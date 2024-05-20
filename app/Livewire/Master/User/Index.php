<?php
namespace App\Livewire\Master\User;
use Livewire\Component;
use App\Models\User as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\RefRole;
use App\Models\RefInstansi;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['store' => 'render','delete', 'confirmed'];
    public $search = '';
    public $showForm;

    public $username;
    public $nama;
    public $email;
    public $password;
    public $role_id;
    public $phone;
    public $user_id = NULL;
    public $primaryId;
    public $jenis_kelamin;
    public $role_list;
    public $listSkpd;
    public $instansi_id;
    public $nip;
    
    public $mode = 'create';
    public $actionTitle = 'Tambah';
    public $perpage = 10;
    public $total;
    public $sortColoumName = "nama";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    protected $rules = [
        'nama'          => 'required',
        'email'         => 'required',
        'username'      => 'required',
        'nip'           => 'required',
        'jenis_kelamin' => 'required',
        'phone'         => 'required',
        'role_id'       => 'required',
        'instansi_id'   => 'required',
    ];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->count();
        $this->role_list   = RefRole::where('is_active','=',1)->where('is_delete','=',0)->orderBy('role','asc')->get();
        $this->listSkpd = RefInstansi::orderBy('type','asc')->get();
        // dd($this->listSkpd);
    }

    public function render()
    {
        
        setActivity('Pengguna Mengakses Halaman Akun Pengguna');
        return view('livewire.master.user.index',
        [
            'model' => Model::whereRaw('LOWER(nama) like ?', ['%'.strtolower($this->search).'%'])
            ->orderBy($this->sortColoumName,$this->sortDirection)
            ->paginate($this->perpage)
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
        $this->username     = NULL;
        $this->email        = NULL;
        $this->nama         = NULL;
        $this->phone        = NULL;
        $this->nip         = NULL;
        $this->jenis_kelamin = NULL;
        $this->user_id      = NULL;
        $this->role_id      = NULL;
        $this->instansi_id  = NULL;
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
        $this->validate([
            'nama'          => 'required',
            'email'         => 'required|unique:users,email,except,id',
            'username'      => 'required|unique:users,username,except,id',
            'role_id'       => 'required',
            'instansi_id'   => 'required',
            'nip'           => 'required',
            'jenis_kelamin' => 'required',
            'phone'       => 'required',
        ]);
        $model = Model::firstOrNew(['id' =>  $this->user_id]);
        $model->id          = Model::max('id') + 1;
        $model->nama        = $this->nama;
        $model->username    = $this->username;
        $model->email       = $this->email;
        $model->nip         = $this->nip;
        $model->jenis_kelamin = $this->jenis_kelamin;
        $model->phone     = $this->phone;
        $model->role_id     = $this->role_id;
        $model->instansi_id = $this->instansi_id;
        $model->password    = bcrypt($this->username);
        $model->is_active   = 1;
        
        if($model->save()){
            $this->resetInput();
            $log = 'Data Pengguna an.'.$model->nama.' Berhasil di Ditambah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Pengguna an.'.$model->nama.' Gagal di Ditambah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
            return redirect()->route('master.index');
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->isOpen       = true;
        $this->mode         = 'update';
        $this->actionTitle  = 'Ubah';
        $this->primaryId    = $primaryId;

        $model              = Model::where('id','=',$primaryId)->first();
        $this->nama         = $model->nama;
        $this->username     = $model->username;
        $this->nip         = $model->nip;
        $this->jenis_kelamin = $model->jenis_kelamin;
        $this->email        = $model->email;
        $this->role_id      = $model->role_id;
        $this->instansi_id  = $model->instansi_id;
        $this->user_id      = $model->id;
        $this->phone      = $model->phone;

        $this->dispatch("showForm");
        $this->showForm     = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->user_id]);
        $model->nama        = $this->nama;
        $model->username    = $this->username;
        $model->email       = $this->email;
        $model->nip         = $this->nip;
        $model->jenis_kelamin = $this->jenis_kelamin;
        $model->role_id     = $this->role_id;
        $model->instansi_id = $this->instansi_id;
        $model->phone     = $this->phone;
        $model->is_active   = 1;
        
        if($model->save()){
            $this->mode = "create";
            $this->actionTitle = 'Ubah';
            $this->resetInput();
            $log = 'Data Pengguna an.'.$model->nama.' Berhasil di Ubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Pengguna an.'.$model->nama.' Gagal di Ubah';
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
            $log = 'Data Pengguna Berhasil di Hapus';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }else{
            $log = 'Data Pengguna Gagal di Hapus';
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
        $infoStatus = $newStatus == 0 ? "Tidak Aktif" : "Aktif"; 
        $model->update(['is_active' => $newStatus]);
        $log = 'Status Akun Pengguna '.$model->nama.' '.$infoStatus;
        setActivity($log);
        $this->alert('success', $log, [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    
    
}
