<?php

namespace App\Livewire\Master\Kepegawaian\Eselon;

use Livewire\Component;
use App\Models\RefEselon;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $eselon;
    public $eselon_id = null;
    public $mode = 'create';
    public $perpage = 5;
    public $total;
    protected $queryString = ['search'=> ['except' => '']];
    
    public function mount()
    {
        $this->total = RefEselon::where('is_active',1)->count();
    }
    
    protected $rules = [
        'eselon' => 'required',
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        setActivity('Pengguna Mengakses Halaman Eselon');
        return view('livewire.master.kepegawaian.eselon.index',
        [
            'model' => RefEselon::where('is_active',1)->whereRaw('LOWER(eselon) like ?', ['%'.strtolower($this->search).'%'])
            ->orderBy('eselon')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->eselon_id = NULL;
        $this->eselon = NULL;
        
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->resetInput();
    }
    
    public function create()
    {
        $this->mode = 'create';
        $this->resetInput();
        $this->showForm = true;
        
        $this->dispatch("showForm");
    }
    
    public function store()
    {
        $this->validate();
        $model = RefEselon::firstOrNew(['id' =>  $this->eselon_id]);
        $model->eselon  = $this->eselon;
        $model->is_active = 1;
        
        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            setActivity('Pengguna Merubah/Menambahkan Eselon');
            $this->alert('success', 'Eselon Berhasil di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Eselon Gagal di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->mode = 'update';
        $this->primaryId = $primaryId;
        $model = RefEselon::where('id','=',$primaryId)->first()->toArray();
        $this->eselon_id = $model['id'];
        $this->eselon= $model['eselon'];
        
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        
        $data = [
            'eselon' => $this->eselon,
            'is_active'=>1
        ];
        $update = RefEselon::where('id',$this->eselon_id)->update($data);
        if($update){
            $this->resetInput();
            $this->dispatch('hideForm');
            // notify()->success('Eselon Berhasil di Ubah');
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Eselon Berhasil Di Ubah'
            ]);
        }else{
            // notify()->error('Eselon Gagal di Ubah');
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Eselon Gagal Di Ubah'
            ]);
        }
        
    }
    
    public function deleteConfirm($id)
    {
        $data = RefEselon::where('id',$id)->first();
        $this->eselon_id = $id;
        return $this->alert('question', 'Apakah Anda Yakin Akan Menghapus Eselon ? '.$data->eselon.'', [
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
        $model = RefEselon::where('id',$this->eselon_id)->first();
        $model->is_active = 0;
        if($model->save()){
            $this->resetInput();
            return $this->alert('success', 'Eselon Berhasil di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Eselon Gagal di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
        
    }
    
    public function delete($id)
    {
        if(RefEselon::where('id',$id)->delete()){
            // notify()->success('Eselon Berhasil di Hapus');
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Eselon Berhasil Di Hapus'
            ]);
        }else{
            // notify()->error('Eselon Berhasil di Hapus');
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Eselon Berhasil Di Hapus'
            ]);
        }
    }
    
}
