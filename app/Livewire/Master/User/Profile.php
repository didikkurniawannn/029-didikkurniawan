<?php

namespace App\Livewire\Master\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class Profile extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $user_id;
    public $email;
    public $nip;
    public $nama;
    public $phone;
    public $jenis_kelamin;
    public $tanggal_lahir;
    public $alamat;
    public $avatar;
    public $avatar_url;
    public $is_active;
    
    protected $rules = [
        'email' => 'required',
        'nip' => 'required',
        'nama' => 'required',
        'phone' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
    ];

    private function resetInput()
    {
        $this->avatar              = NULL;
        $this->email               = NULL;
        $this->nip                 = NULL;
        $this->nama                = NULL;
        $this->phone               = NULL;
        $this->jenis_kelamin       = NULL;
        $this->tanggal_lahir       = NULL;
        $this->alamat              = NULL;
        $this->avatar              = NULL;
        $this->avatar_url          = NULL;
    }
    
    public function mount()
    {
        $data = User::where('id','=',Auth::user()->id)->first();
        $this->user_id             = $data->id;
        $this->email               = $data->email;
        $this->nip                 = $data->nip;
        $this->nama                = $data->nama;
        $this->phone               = $data->phone;
        $this->jenis_kelamin       = $data->jenis_kelamin;
        $this->tanggal_lahir       = $data->tanggal_lahir;
        $this->alamat              = $data->alamat;
        $this->avatar_url          = Storage::disk('public')->url($data->avatar_url);
    }
    
    public function render()
    {
        return view('livewire.master.user.profile');
    }

    
    public function update()
    {
        $this->validate();
            
        $model = User::firstOrNew(['id' =>  $this->user_id]);
        $model->email               = $this->email;
        $model->nip                 = $this->nip;
        $model->nama                = $this->nama;
        $model->phone               = $this->phone;
        $model->jenis_kelamin       = $this->jenis_kelamin;
        $model->tanggal_lahir       = $this->tanggal_lahir;
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
            Image::load(Storage::disk('public')->path($this->avatar->store('avatar', 'public')))
            ->quality(10)
            ->save();
        }

        if($model->save()){
            $this->resetInput();
            setActivity('Pengguna '.$model->nama.' Merubah Akun');
            $log = 'Data Pengguna an.'.$model->nama.' Berhasil di Diubah';
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
            
            if(Auth::user()->role_id==1){
                return redirect()->route('master.profile');
            }else{
                return redirect()->route('master.profile');
            }
            
        }else{
            $log = 'Data Pengguna an.'.$model->nama.' Gagal di Diubah';
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
    }       
}
            
