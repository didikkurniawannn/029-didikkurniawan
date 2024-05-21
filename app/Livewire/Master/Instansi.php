<?php

namespace App\Livewire\Master;

use Livewire\Component;
use App\Models\RefInstansi as Model;
use App\Models\User;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Instansi extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $id_instansi;
    public $name;
    public $firstId;
    public $leader;
    public $address;
    public $email;
    public $no_telp;
    public $type;
    public $website;
    public $showForm = false;
    public $mode = 'create';
    public $actionTitle = 'Tambah';
    public $perpage = 10;
    public $searchJenisInstansi = '0';
    public $sortColoumName = "name";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function rules()
    {
        return [
            'name'          => 'required',
            'leader'        => 'required',
            'address'       => 'required',
            'email'         => 'required',
            'no_telp'       => 'required',
            'type'          => 'required',
            'website'       => 'required',
        ];
    }
    public function render()
    {
        $query = Model::query();
        $query->when($this->searchJenisInstansi != "0", function ($q) {
            return $q->where('type', $this->searchJenisInstansi);
        });
        $query->when($this->search != "", function ($q) {
           return $q->whereRaw('LOWER(name) like ?', ['%'.strtolower($this->search).'%']);
        });
        $rows = $query->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage);
        if ($rows[0]!=null) {
            $this->firstId = $rows[0]->id;
        }
        return view('livewire.master.instansi', [
            'model'=> $rows
        ]);
    }

    
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
    
    private function resetInput()
    {
        $this->id_instansi  = NULL;
        $this->name         = NULL;
        $this->leader       = NULL;
        $this->address      = NULL;
        $this->email        = NULL;
        $this->no_telp      = NULL;
        $this->type         = NULL;
        $this->website      = NULL;
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
        $model = Model::firstOrNew(['id' =>  $this->id_instansi]);
        $model->id          = Model::max('id') + 1;
        $model->name        = $this->name;
        $model->leader      = $this->leader;
        $model->address     = $this->address;
        $model->email       = $this->email;
        $model->no_telp     = $this->no_telp;
        $model->type        = $this->type;
        $model->website     = $this->website;
        $model->status      = 0;
        if($model->save()){
            $this->resetInput();
            $log = 'Data Instansi '.$model->name.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Instansi '.$model->name.' Gagal di Ditambah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
        
    }
    
    public function edit($idInstansi)
    {
        $this->isOpen = true;
        $this->mode = 'update';
        $this->actionTitle = 'Ubah';
        $this->id_instansi = $idInstansi;

        $model = Model::where('id','=',$idInstansi)->first();
        $this->name         = $model->name;
        $this->leader       = $model->leader;
        $this->address      = $model->address;
        $this->email        = $model->email;
        $this->no_telp      = $model->no_telp;
        $this->type         = $model->type;
        $this->website      = $model->website;

        $this->dispatch("showForm");
        $this->showForm     = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->id_instansi]);
        $model->name        = $this->name;
        $model->leader      = $this->leader;
        $model->address     = $this->address;
        $model->email       = $this->email;
        $model->no_telp     = $this->no_telp;
        $model->type        = $this->type;
        $model->website    = $this->website;
        if($model->save()){
            $this->mode = "create";
            $this->actionTitle = 'Ubah';
            $this->resetInput();
            $log = 'Data Instansi '.$model->name.' Berhasil di Ubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Instansi '.$model->name.' Gagal di Ubah';
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
            $log = 'Data Instansi Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Instansi Gagal di Hapus';
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
        $model = Model::find($id);
        $akun = User::Where('username', $model->email)->first();
        User::firstOrCreate(
            [
                'username'          => $model->email,
                'email'             => $model->email,
            ],
            [
                
                'id'                => User::max('id') + 1,
                'username'          => $model->email,
                'email'             => $model->email,
                'nama'              => $model->name,
                'instansi_id'       => $model->id,
                'role_id'           => 2,
                'password'          => bcrypt('12345678'),
                'is_active'         => 1,
            ]
        );

        if ($model->status==1) {
            $model->status=0;
        } else {
            $model->status=1;
        }
        if($model->save()){
            $this->resetInput();
            $log = 'Data user berhasil di generate dengan password 12345678';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data user gagal di generate';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            
        }
    }
}
