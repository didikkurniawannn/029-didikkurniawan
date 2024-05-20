<?php
namespace App\Livewire\Master\Konfigurasi\Menu;
use Livewire\Component;
use App\Models\RefMenu as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $menu;
    public $menu_id = NULL;
    public $posisi;
    public $jenis_menu;
    public $url;
    public $icon;
    public $tipe;
    public $parent_id;
    
    public $mode = 'create';
    public $perpage = 10;
    public $total;
    public $actionTitle = 'Tambah';
    public $sortColoumName = "menu";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->where('parent_id','=',0)->count();
    }
    
    protected $rules = [
        'menu'      => 'required',
        'posisi'    => 'required',
        'jenis_menu'     => 'required',
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
        
        setActivity('Pengguna Mengakses Halaman Menu');
        return view('livewire.master.konfigurasi.menu.index',
        [
            'model' => Model::where('parent_id',0)
            ->whereRaw('LOWER(menu) like ?', ['%'.strtolower($this->search).'%'])
            // ->where('is_active','=',1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            // ->orderBy('posisi','ASC')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->menu         = NULL;
        $this->menu_id      = NULL;
        $this->posisi       = NULL;
        $this->jenis_menu   = NULL;
        $this->url          = NULL;
        $this->icon         = NULL;
        $this->tipe         = NULL;
        $this->parent_id    = NULL;
        
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
        $model = Model::firstOrNew(['id' =>  $this->menu_id]);
        $model->id          = Model::where('is_active','=',1)->max('id') + 1;
        $model->menu        = $this->menu;
        $model->posisi      = $this->posisi;
        $model->jenis_menu  = $this->jenis_menu;
        $model->url         = $this->url;
        $model->type        = $this->tipe;
        $model->parent_id   = $this->parent_id;
        $model->icon         = $this->icon;
        $model->is_active   = 1;
        
        if($model->save()){
            $this->resetInput();
            $log = 'Menu '.$model->menu.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Menu '.$model->menu.' Gagal di Ditambah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
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
        $this->menu        = $model->menu;
        $this->menu_id     = $model->id;
        $this->posisi      = $model->posisi;
        $this->jenis_menu  = $model->jenis_menu;
        $this->url         = $model->url;
        $this->icon        = $model->icon;
        $this->tipe        = $model->type;
        $this->parent_id        = $model->parent_id;
        
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->menu_id]);
        $model->menu        = $this->menu;
        $model->posisi      = $this->posisi;
        $model->jenis_menu  = $this->jenis_menu;
        $model->url         = $this->url;
        $model->icon        = $this->icon;
        $model->parent_id   = $this->parent_id;
        $model->type        = $this->tipe;
        $model->is_active   = 1;
        
        if($model->save()){
            $this->actionTitle = 'Ubah';
            $this->mode = "create";
            $this->resetInput();
            $log = 'Menu '.$model->menu.' Berhasil di Diubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Menu '.$model->menu.' Gagal di Diubah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
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
            ]);
        }else{
            $log = 'Menu Gagal di Hapus';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
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
        $infoStatus = $newStatus == 1 ? "Tidak Aktif" : "Aktif"; 
        $model->update(['is_active' => $newStatus]);
        return $this->alert('success', 'Status Menu '.$model->menu.' '.$infoStatus, [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    
    
}