<?php

namespace App\Livewire\Master\Kepegawaian\User;

use Storage;
use App\Models\User;
use Livewire\Component;
use App\Models\RefEselon;
use App\Models\RefJabatan;
use App\Models\RefPangkat;
use App\Models\RefGolongan;
use App\Models\RefUnitKerja;
use Livewire\WithFileUploads;
use App\Models\RefSatuanKerja;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\RefJenisKelamin;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    
    public $email;
    public $no_induk;
    public $nama;
    public $phone;
    public $jenis_kelamin;
    public $tanggal_lahir;
    
    public $golongan_id;
    public $golongan;
    public $pangkat_id;
    public $pangkat;
    public $eselon_id;
    public $eselon;
    public $jabatan_id;
    public $jabatan;
    public $satuan_kerja_id;
    public $satuan_kerja;
    public $unit_kerja_id;
    public $unit_kerja;
    
    public $alamat;
    public $avatar;
    public $is_active;
    public $avatar_url;
    public $avatar_size;
    public $avatar_path;
    public $avatar_human_size;
    
    public $golongan_list;
    public $pangkat_list;
    public $eselon_list;
    public $jabatan_list;
    public $satuan_kerja_list;
    public $unit_kerja_list;
    public $jenis_kelamin_list;
    
    public function mount()
    {
        $this->jenis_kelamin_list   = RefJenisKelamin::where('is_active','=',1)->orderBy('jenis_kelamin','asc')->get();
    }
    
    protected $rules = [
        'email' => 'required',
        'no_induk' => 'required',
        'nama' => 'required',
        'phone' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        
        'golongan_id' => 'required',
        
        'pangkat_id' => 'required',
        
        'eselon_id' => 'required',
        
        'jabatan_id' => 'required',
        
        'satuan_kerja_id' => 'required',
        
        'unit_kerja_id' => 'required',
        
        
        'alamat' => 'required',
    ];
    
    private function resetInput()
    {
        $this->email            = NULL;
        $this->no_induk         = NULL;
        $this->nama             = NULL;
        $this->phone            = NULL;
        $this->jenis_kelamin    = NULL;
        $this->tanggal_lahir    = NULL;
        
        $this->golongan_id      = NULL;
        $this->golongan         = NULL;
        $this->pangkat_id       = NULL;
        $this->pangkat          = NULL;
        $this->eselon_id        = NULL;
        $this->eselon           = NULL;
        $this->jabatan_id       = NULL;
        $this->jabatan          = NULL;
        $this->satuan_kerja_id  = NULL;
        $this->satuan_kerja     = NULL;
        $this->unit_kerja_id    = NULL;
        $this->unit_kerja       = NULL;
        
        $this->alamat           = NULL;
        
    }
    
    public function hydrate()
    {
        $this->dispatch('render-select2');
        // if(!empty($this->listSekolah)):
            //     $this->listSekolah = MSekolah::where('id','=',$this->sekolah_asal_id)->get();
            // endif;
        }
        
        public function cancel()
        {
            $this->mode = 'create';
            $this->resetInput();
        }
        
        public function store()
        {
            $this->validate();
            
            $model = User::firstOrNew(['no_induk' =>  $this->no_induk]);
            $golongan_info        = RefGolongan::where('id','=',$this->golongan_id)->first();
            $pangkat_info         = RefPangkat::where('id','=',$this->pangkat_id)->first();
            $eselon_info          = RefEselon::where('id','=',$this->eselon_id)->first();
            $jabatan_info         = RefJabatan::where('id','=',$this->jabatan_id)->first();
            $unit_kerja_info      = RefUnitKerja::where('id','=',$this->unit_kerja_id)->first();
            $satuan_kerja_info    = RefSatuanKerja::where('id','=',$this->satuan_kerja_id)->first();
            
            
            $model->email               = $this->email;
            $model->no_induk            = $this->no_induk;
            $model->nama                = $this->nama;
            $model->phone               = $this->phone;
            $model->jenis_kelamin       = $this->jenis_kelamin;
            $model->tanggal_lahir       = $this->tanggal_lahir;
            
            $model->golongan_id         = $this->golongan_id;
            $model->golongan            = $golongan_info->golongan;
            $model->pangkat_id          = $this->pangkat_id;
            $model->pangkat             = $pangkat_info->pangkat;
            $model->eselon_id           = $this->eselon_id;
            $model->eselon              = $eselon_info->eselon;
            $model->jabatan_id          = $this->jabatan_id;
            $model->jabatan             = $jabatan_info->jabatan;
            $model->satuan_kerja_id     = $this->satuan_kerja_id;
            $model->satuan_kerja        = $satuan_kerja_info->satuan_kerja;
            $model->unit_kerja_id       = $this->unit_kerja_id;
            $model->unit_kerja          = $unit_kerja_info->unit_kerja;
            
            $model->alamat              = $this->alamat;
            $model->is_active           = 1;
            
            if ($this->avatar) {
                $this->validate(['avatar' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2000']);
                $pathFolder = Storage::disk('public')->path('avatar');
                if (!file_exists($pathFolder)) {
                    Storage::disk('public')->makeDirectory('avatar');
                }
                $model->avatar = $this->avatar->getClientOriginalName();
                $model->avatar_url = $this->avatar->store('avatar', 'public');
                $model->avatar_size = $this->avatar->getSize();
                $model->avatar_path = Storage::disk('public')->path($this->avatar->store('avatar', 'public'));
                $model->avatar_human_size = humanFileSize($this->avatar->getSize());
            }
            
            
            if($model->save()){
                $this->resetInput();
                setActivity('Pengguna Menambahkan Akun');
                $this->alert('success', 'Pengguna/User Berhasil di Simpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);
                return redirect()->to('master/user');
            }else{
                return $this->alert('error', 'Pengguna/User Gagal di Simpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);
            }
            
        }
        
        #[Layout('components.layouts.form')]
        public function render()
        {
            return view('livewire.master.kepegawaian.user.add');
        }
    }
    