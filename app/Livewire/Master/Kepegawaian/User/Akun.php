<?php

namespace App\Livewire\Master\Kepegawaian\User;

use Storage;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Akun extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $uuid;
    public $nama;
    public $username;
    public $password;
    public $password_confirm;
    
    public $avatar;
    public $avatar_url;
    public $avatar_size;
    public $avatar_path;
    public $avatar_human_size;
    
    public function mount($token)
    {
        $data = User::where('id','=',$token)->first();
        $this->uuid                 = $data->id;
        $this->nama                 = $data->nama;
        $this->username             = $data->username;
        $this->nama                 = $data->nama;
        $this->avatar               = $data->avatar;
        $this->avatar_url           = Storage::disk('public')->url($data->avatar_url);
    }
    
    protected $rules = [
        'username' => 'required',
        'password' => ['required', 'string', 'min:8'],
        'password_confirm' => ['required', 'same:password']
        
    ];
    
    private function resetInput()
    {
        $this->username             = NULL;
        $this->password             = NULL;
        $this->password_confirm     = NULL;
        $this->avatar               = NULL;
        $this->avatar_url           = NULL;
        $this->avatar_size          = NULL;
        $this->avatar_path          = NULL;
        $this->avatar_human_size    = NULL;
        
    }
    
    public function cancel()
    {
        $this->mode = 'create';
        $this->resetInput();
    }
    
    public function store()
    {
        $this->validate();
        
        $model = User::firstOrNew(['id' =>  $this->uuid]);
        
        $model->username    = $this->username;
        $model->password    = bcrypt($this->password);
        
        $model->is_active   = 1;
        
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
            $this->alert('success', 'Pengguna/User Berhasil di Ubah', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
            return redirect()->route('account.index');
        }else{
            return $this->alert('error', 'Pengguna/User Gagal di Ubah', [
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
        return view('livewire.master.kepegawaian.user.akun');
    }
}
