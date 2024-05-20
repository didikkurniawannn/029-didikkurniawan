<?php

namespace App\Livewire\Master\Kepegawaian\Pangkat;

use Livewire\Component;
use App\Models\RefPangkat;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $pangkat;
    public $pangkat_id = null;
    public $mode = 'create';
    public $perpage = 5;
    public $total;
    protected $queryString = ['search'=> ['except' => '']];

    public function mount()
    {
        $this->total = RefPangkat::where('is_active',1)->count();
    }

    protected $rules = [
        'pangkat' => 'required',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        setActivity('Pengguna Mengakses Halaman Pangkat');
        return view('livewire.master.kepegawaian.pangkat.index',
        [
            'model' => RefPangkat::where('is_active',1)->whereRaw('LOWER(pangkat) like ?', ['%'.strtolower($this->search).'%'])
            ->orderBy('pangkat')
            ->paginate($this->perpage)
        ]);
    }


    private function resetInput()
    {
        $this->pangkat_id = NULL;
        $this->pangkat = NULL;

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
        $model = RefPangkat::firstOrNew(['id' =>  $this->pangkat_id]);
        $model->pangkat  = $this->pangkat;
        $model->is_active = 1;

        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            setActivity('Pengguna Menambahkan/Merubah Pangkat');
            $this->alert('success', 'Pangkat Berhasil di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Pangkat Gagal di Simpan/Ubah', [
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
        $model = RefPangkat::where('id','=',$primaryId)->first()->toArray();
        $this->pangkat_id = $model['id'];
        $this->pangkat= $model['pangkat'];

        $this->dispatch("showForm");
        $this->showForm = true;
    }

    public function update()
    {
        $this->validate();

        $data = [
            'pangkat' => $this->pangkat,
            'is_active'=>1
        ];
        $update = RefPangkat::where('id',$this->pangkat_id)->update($data);
        if($update){
            $this->resetInput();
            $this->dispatch('hideForm');
            // notify()->success('Pangkat Berhasil di Ubah');
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Pangkat Berhasil Di Ubah'
            ]);
        }else{
            // notify()->error('Pangkat Gagal di Ubah');
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Pangkat Gagal Di Ubah'
            ]);
        }

    }

    public function deleteConfirm($id)
    {
        $data = RefPangkat::where('id',$id)->first();
        $this->pangkat_id = $id;
        return $this->alert('question', 'Apakah Anda Yakin Akan Menghapus Pangkat ? '.$data->pangkat.'', [
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
        $model = RefPangkat::where('id',$this->pangkat_id)->first();
        $model->is_active = 0;
        if($model->save()){
            $this->resetInput();
            return $this->alert('success', 'Pangkat Berhasil di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Pangkat Gagal di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }


    }

    public function delete($id)
    {
        if(RefPangkat::where('id',$id)->delete()){
            // notify()->success('Pangkat Berhasil di Hapus');
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Pangkat Berhasil Di Hapus'
            ]);
        }else{
            // notify()->error('Pangkat Berhasil di Hapus');
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Pangkat Berhasil Di Hapus'
            ]);
        }
    }

}
