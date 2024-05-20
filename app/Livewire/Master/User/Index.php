<?php
namespace App\Livewire\Master\User;
use Livewire\Component;
use App\Models\User as Model;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\RefEselon;
use App\Models\RefJabatan;
use App\Models\RefPangkat;
use App\Models\RefGolongan;
use App\Models\RefUnitKerja;
use App\Models\RefSatuanKerja;
use App\Models\RefJenisKelamin;
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
    public $user_id = NULL;
    public $alias;
    public $primaryId;
    public $url;
    public $icon;
    
    public $golongan_list;
    public $pangkat_list;
    public $eselon_list;
    public $jabatan_list;
    public $satuan_kerja_list;
    public $unit_kerja_list;
    public $jenis_kelamin_list;
    public $role_list;
    public $listSkpd;
    public $dinas_id;
    
    public $mode = 'create';
    public $actionTitle = 'Tambah';
    public $perpage = 10;
    public $total;
    public $sortColoumName = "nama";
    public $sortDirection = "asc";
    protected $queryString = ['search'];
    
    public function mount()
    {
        $this->total = Model::where('is_active',1)->count();
        $this->role_list   = RefRole::where('is_active','=',1)->where('is_delete','=',0)->orderBy('role','asc')->get();
        $this->listSkpd = RefInstansi::orderBy('type','asc')->get();
    }
    
    protected $rules = [
        'nama'      => 'required',
        'email'      => 'required',
        'username'      => 'required',
        // 'email'     => 'required|email|unique:ref_users,email',
        // 'username'  => ['required', 'unique:ref_users,username', 'regex:/^\S*$/'],
        'role_id'   => 'required',
        'dinas_id'   => 'required',
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
        
        setActivity('Pengguna Mengakses Halaman Akun Pengguna');
        return view('livewire.master.kepegawaian.user.index',
        [
            'model' => Model::where('is_delete',0)
            ->whereRaw('LOWER(nama) like ?', ['%'.strtolower($this->search).'%'])
            // ->where('is_active','=',1)
            ->orderBy($this->sortColoumName,$this->sortDirection)
            // ->orderBy('posisi','ASC')
            ->paginate($this->perpage)
        ]);
    }
    
    
    private function resetInput()
    {
        $this->username     = NULL;
        $this->email        = NULL;
        $this->nama         = NULL;
        $this->user_id      = NULL;
        $this->role_id      = NULL;
        $this->dinas_id      = NULL;
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
        $model = Model::firstOrNew(['id' =>  $this->user_id]);
        $model->id          = Model::max('id') + 1;
        $model->nama        = $this->nama;
        $model->username    = $this->username;
        $model->email       = $this->email;
        $model->role_id     = $this->role_id;
        $model->dinas_id     = $this->dinas_id;
        $model->password    = bcrypt($this->username);
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
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
            notify()->success($log);
            return redirect()->route('account.index');
        }
        
    }
    
    public function edit($primaryId)
    {
        $this->isOpen = true;
        $this->mode = 'update';
        $this->actionTitle = 'Ubah';
        $this->primaryId = $primaryId;
        $model = Model::where('id','=',$primaryId)->first();
        $this->nama     = $model->nama;
        $this->username = $model->username;
        $this->email    = $model->email;
        $this->role_id  = $model->role_id;
        $this->dinas_id  = $model->dinas_id;
        $this->user_id  = $model->id;
        $this->dispatch("showForm");
        $this->showForm = true;
    }
    
    public function update()
    {
        $this->validate();
        $model = Model::firstOrNew(['id' =>  $this->user_id]);
        $model->nama        = $this->nama;
        $model->username    = $this->username;
        $model->email       = $this->email;
        $model->role_id     = $this->role_id;
        $model->dinas_id     = $this->dinas_id;
        $model->is_active   = 1;
        $model->is_delete   = 0;
        
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
