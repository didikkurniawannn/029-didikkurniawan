<?php

namespace App\Livewire\Master\Kepegawaian\Golongan;

use Livewire\Component;
use App\Models\RefGolongan;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $golongan;
    public $golongan_id = null;
    public $mode = 'create';
    public $perpage = 5;
    public $total;
    protected $queryString = ['search'=> ['except' => '']];

    public function mount()
    {
        $this->total = RefGolongan::where('is_active',1)->count();
    }

    protected $rules = [
        'golongan' => 'required',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        setActivity('Pengguna Mengakses Halaman Golongan');
        return view('livewire.master.kepegawaian.golongan.index',
        [
            'model' => RefGolongan::where('is_active',1)->whereRaw('LOWER(golongan) like ?', ['%'.strtolower($this->search).'%'])
            ->orderBy('golongan')
            ->paginate($this->perpage)
        ]);
    }


    private function resetInput()
    {
        $this->golongan_id = NULL;
        $this->golongan = NULL;

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
        $model = RefGolongan::firstOrNew(['id' =>  $this->golongan_id]);
        $model->golongan  = $this->golongan;
        $model->is_active = 1;

        if($model->save()){
            $this->mode = "create";
            $this->resetInput();
            setActivity('Pengguna Merubah/Menambahkan Golongan');
            $this->alert('success', 'Golongan Berhasil di Simpan/Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Golongan Gagal di Simpan/Ubah', [
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
        $model = RefGolongan::where('id','=',$primaryId)->first()->toArray();
        $this->golongan_id = $model['id'];
        $this->golongan= $model['golongan'];

        $this->dispatch("showForm");
        $this->showForm = true;
    }

    public function update()
    {
        $this->validate();

        $data = [
            'golongan' => $this->golongan,
            'is_active'=>1
        ];
        $update = RefGolongan::where('id',$this->golongan_id)->update($data);
        if($update){
            $this->resetInput();
            $this->dispatch('hideForm');
            // notify()->success('Golongan Berhasil di Ubah');
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Golongan Berhasil Di Ubah'
            ]);
        }else{
            // notify()->error('Golongan Gagal di Ubah');
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Golongan Gagal Di Ubah'
            ]);
        }

    }

    public function deleteConfirm($id)
    {
        $data = RefGolongan::where('id',$id)->first();
        $this->golongan_id = $id;
        return $this->alert('question', 'Apakah Anda Yakin Akan Menghapus Golongan ? '.$data->golongan.'', [
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
        $model = RefGolongan::where('id',$this->golongan_id)->first();
        $model->is_active = 0;
        if($model->save()){
            $this->resetInput();
            return $this->alert('success', 'Golongan Berhasil di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }else{
            return $this->alert('error', 'Golongan Gagal di Hapus', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }


    }

    public function delete($id)
    {
        if(RefGolongan::where('id',$id)->delete()){
            // notify()->success('Golongan Berhasil di Hapus');
            $this->dispatch('swal:modal', [
                'type' => 'success',
                'message' => 'Berhasil',
                'text' => 'Golongan Berhasil Di Hapus'
            ]);
        }else{
            // notify()->error('Golongan Berhasil di Hapus');
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'message' => 'Gagal',
                'text' => 'Golongan Berhasil Di Hapus'
            ]);
        }
    }

}
