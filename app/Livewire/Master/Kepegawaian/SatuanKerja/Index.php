<?php
namespace App\Livewire\Master\Kepegawaian\SatuanKerja;
use Livewire\Component;
use App\Models\RefSatuanKerja as Model;
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
    public $satuan_kerja;
    public $satuan_kerja_id = NULL;
    public $alias;
    public $primaryId;
    public $url;
    public $icon;
    
    public $mode = 'create';
    public $perpage = 10;
    public $total;
    public $sortColoumName = "satuan_kerja";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->count();
    }
    
    protected $rules = [
        'satuan_kerja'      => 'required',
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
        
        setActivity('Pengguna Mengakses Halaman Satuan Kerja');
        return view('livewire.master.kepegawaian.satuan-kerja.index',
        [
            'model' => Model::where('is_delete',0)
            ->whereRaw('LOWER(satuan_kerja) like ?', ['%'.strtolower($this->search).'%'])
            // ->where('is_active','=',1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            // ->orderBy('posisi','ASC')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->kode             = NULL;
        $this->satuan_kerja     = NULL;
        $this->satuan_kerja_id  = NULL;
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
        $model = Model::firstOrNew(['id' =>  $this->satuan_kerja_id]);
        $model->id              = Model::max('id') + 1;
        $model->satuan_kerja    = $this->satuan_kerja;
        $model->kode            = $this->kode;
        $model->is_active       = 1;
        $model->is_delete       = 0;
        
        if($model->save()){
            $this->resetInput();
            $this->alert('success', 'Satuan Kerja Berhasil di Simpan', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Satuan Kerja Gagal di Simpan', [
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
        $this->satuan_kerja        = $model->satuan_kerja;
        $this->kode              = $model->kode;
        $this->satuan_kerja_id     = $model->id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->satuan_kerja_id]);
        $model->satuan_kerja        = $this->satuan_kerja;
        $model->kode              = $this->kode;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            $this->alert('success', 'Satuan Kerja Berhasil di Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Satuan Kerja Gagal di Ubah', [
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
        $this->satuan_kerja_id = $id;
        return $this->alert('question', 'Apakah Anda Yakin Akan Menghapus Satuan Kerja ? '.$data->satuan_kerja.'', [
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
        $model = Model::where('id',$this->satuan_kerja_id)->first();
        $model->is_delete = 1;
        if($model->save()){
            $this->resetInput();
            return $this->alert('success', 'Satuan Kerja Berhasil di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Satuan Kerja Gagal di Hapus', [
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
                'text' => 'Satuan Kerja Berhasil Di Hapus'
            ]);
        }else{
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Satuan Kerja Berhasil Di Hapus'
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
        return $this->alert('success', 'Status Satuan Kerja '.$model->satuan_kerja.' '.$infoStatus, [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    
    
}
