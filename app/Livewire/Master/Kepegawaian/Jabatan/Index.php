<?php
namespace App\Livewire\Master\Kepegawaian\Jabatan;
use Livewire\Component;
use App\Models\RefJabatan as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $showForm;
    public $kode;
    public $jabatan;
    public $jabatan_id = NULL;
    public $atasan_id;
    public $alias;
    public $primaryId;
    public $url;
    public $icon;
    public $mode = 'create';
    public $perpage = 10;
    public $total;
    public $sortColoumName = "jabatan";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->where('is_delete','=',0)->count();
    }
    
    protected $rules = [
        'jabatan'      => 'required',
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
        
        setActivity('Pengguna Mengakses Halaman Jabatan');
        return view('livewire.master.kepegawaian.jabatan.index',
        [
            'model' => Model::where('is_delete',0)
            ->whereRaw('LOWER(jabatan) like ?', ['%'.strtolower($this->search).'%'])
            // ->where('is_active','=',1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            // ->orderBy('posisi','ASC')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->kode             = NULL;
        $this->jabatan          = NULL;
        $this->jabatan_id       = NULL;
        $this->atasan_id        = NULL;
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->resetInput();
    }
    
    public function create()
    {
        $this->resetInput();
        $this->mode = 'create';
        $this->showForm = true;
        $this->isOpen = true;
        $this->dispatch("showForm");
    }
    
    public function store()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->jabatan_id]);
        $model->id          = Model::max('id') + 1;
        $model->jabatan     = $this->jabatan;
        $model->kode        = $this->kode;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->resetInput();
            $this->alert('success', 'Jabatan Berhasil di Simpan', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Jabatan Gagal di Simpan', [
                'position' => 'top',
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
        $this->primaryId = $primaryId;
        $model = Model::where('id','=',$primaryId)->first();
        $this->jabatan          = $model->jabatan;
        $this->kode             = $model->kode;
        $this->jabatan_id       = $model->id;
        $this->atasan_id        = $model->atasan_id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->jabatan_id]);
        $atasan = Model::firstOrNew(['id' =>  $model->atasan_id]);
        $model->jabatan     = $this->jabatan;
        $model->kode        = $this->kode;
        $model->atasan_id   = $this->atasan_id;
        $model->atasan_id_token   = $atasan->token;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            $this->alert('success', 'Jabatan Berhasil di Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Jabatan Gagal di Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function deleteConfirm($id)
    {
        $data = Model::where('id',$id)->first();
        $this->jabatan_id = $id;
        return $this->alert('question', 'Apakah Anda Yakin Akan Menghapus Jabatan ? '.$data->jabatan.'', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ok',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed',
            'toast' => false,
            'position' => 'center',
            'timer' => 2000
        ]);
    }
    
    public function confirmed()
    {
        $model = Model::where('id',$this->jabatan_id)->first();
        $model->is_delete = 1;
        if($model->save()){
            $this->resetInput();
            return $this->alert('success', 'Jabatan Berhasil di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Jabatan Gagal di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
        
    }
    
    public function delete($id)
    {
        if(Model::where('id',$id)->delete()){
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Jabatan Berhasil Di Hapus'
            ]);
        }else{
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Jabatan Berhasil Di Hapus'
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
        return $this->alert('success', 'Status Jabatan '.$model->jabatan.' '.$infoStatus, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    
    public function statusJabatan($id)
    {
        $model = Model::where('id', $id)->firstOrFail();
        $newStatus = $model->status_jabatan === 1 ? 0 : 1;
        $infoStatus = $newStatus == 1 ? "Struktural" : "Non Struktural"; 
        $model->update(['status_jabatan' => $newStatus]);
        return $this->alert('success', 'Status Jabatan '.$model->jabatan.' '.$infoStatus, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    
    public function statusPejabat($id)
    {
        $model = Model::where('id', $id)->firstOrFail();
        $newStatus = $model->status_pj === 1 ? 0 : 1;
        $infoStatus = $newStatus == 1 ? "Aktif" : "Tidak Aktif"; 
        $model->update(['status_pj' => $newStatus]);
        return $this->alert('success', 'Status Jabatan '.$model->jabatan.' '.$infoStatus, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    
    public function statusTujuan($id)
    {
        $model = Model::where('id', $id)->firstOrFail();
        $newStatus = $model->status_tujuan === 1 ? 0 : 1;
        $infoStatus = $newStatus == 1 ? "Aktif" : "Tidak Aktif"; 
        $model->update(['status_tujuan' => $newStatus]);
        return $this->alert('success', 'Status Tujuan Jabatan '.$model->jabatan.' '.$infoStatus, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }    
    
    
}
