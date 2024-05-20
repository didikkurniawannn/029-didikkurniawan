<?php
namespace App\Livewire\Master\Konfigurasi\Role;
use Livewire\Component;
use App\Models\RefRole as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $role;
    public $role_id = NULL;
    public $alias;
    public $primaryId;
    public $url;
    public $icon;
    public $showForm;
    
    public $mode = 'create';
    public $perpage = 10;
    public $total;
    public $actionTitle = 'Tambah';
    public $sortColoumName = "role";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->count();
    }
    
    protected $rules = [
        'role'      => 'required',
    ];
    
    public function sortBy($coloumName)
    {
        if($this->sortColoumName === $coloumName){
            $this->sortDirection = $this->swapSortDirection();
        }else{
            $this->sortDirection ='asc';
        }
        $this->sortColoumName = $coloumName;
    }
    
    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        
        setActivity('Pengguna Mengakses Halaman Hak Akses');
        return view('livewire.master.konfigurasi.role.index',
        [
            'model' => Model::where('is_delete',0)
            ->whereRaw('LOWER(role) like ?', ['%'.strtolower($this->search).'%'])
            // ->where('is_active','=',1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            // ->orderBy('posisi','ASC')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->role         = NULL;
        $this->alias        = NULL;
        $this->role_id      = NULL;
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->actionTitle = 'Tambah';
        $this->resetInput();
    }
    
    public function create()
    {
        $this->resetInput();
        $this->mode = 'create';
        $this->actionTitle = 'Tambah';
        $this->showForm = true;
        $this->isOpen = true;
        $this->dispatch("showForm");
    }
    
    public function store()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->role_id]);
        $model->id          = Model::where('is_active','=',1)->max('id') + 1;
        $model->role        = $this->role;
        $model->alias        = $this->alias;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->resetInput();
            $log = 'Role '.$model->menu.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{            
            $log = 'Role '.$model->menu.' Gagal di Ditambah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->isOpen = true;
        $this->mode = 'update';
        $this->actionTitle = 'Ubah';
        $this->primaryId = $primaryId;
        $model = Model::where('id','=',$primaryId)->first();
        $this->role        = $model->role;
        $this->alias        = $model->alias;
        $this->role_id     = $model->id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->role_id]);
        $model->role        = $this->role;
        $model->alias        = $this->alias;
        $model->is_active   = 1;
        
        if($model->save()){
            $this->actionTitle = 'Ubah';
            $this->mode = "create";
            $this->resetInput();
            $log = 'Role '.$model->menu.' Berhasil di Diubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{            
            $log = 'Role '.$model->menu.' Gagal di Diubah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function deleteRequest($id)
    {
        $this->dispatch("swal:deleteRequest", [
            'type' => 'warning',
            'title' =>'Apa anda yakin ?',
            'text' =>'Setelah memilih YA maka data akan Dihapus',
            'id'=>$id
        ]);
    }
    public function deleteSelectedRequest($id)
    {
        if(Model::where('id',$id)->delete()){
            $this->resetInput();
            $log = 'Menu Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            $log = 'Menu Gagal di Hapus';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);

        }
    }
    public $isOpen = false;
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }
    
    public function status($id)
    {
        $model = Model::where('id', $id)->firstOrFail();
        $newStatus = $model->is_active === 1 ? 0 : 1;
        $infoStatus = $newStatus == 1 ? "Aktif" : "Tidak Aktif"; 
        $model->update(['is_active' => $newStatus]);
        return $this->alert('success', 'Status Hak Akses '.$model->role.' '.$infoStatus, [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    
    
}
