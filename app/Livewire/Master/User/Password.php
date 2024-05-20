<?php

namespace App\Livewire\Master\User;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class Password extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $user_id;
    public $nama;
    public $password_confirm;
    public $password;
    public $avatar;
    public $avatar_url;
    
    protected $rules = [
        'password' => [
            'required',
            'string',
            'min:8',
        ],
        'password_confirm' => ['required', 'same:password'],
    ];
    
    public function mount()
    {
        $data = User::where('id','=',Auth::user()->id)->first();
        $this->user_id              = $data->id;
        $this->nama                 = $data->nama;
    }

    private function resetInput()
    {
        $this->password             = NULL;
        $this->password_confirm     = NULL;
        
    }
    
    public function update()
    {
        $this->validate();
        
        $model = User::firstOrNew(['id' =>  $this->user_id]);
        $model->password    = bcrypt($this->password);
        $model->is_active   = 1;   
        if($model->save()){
            $this->resetInput();
            $log = 'Password berhasil diubah username '.$model->username;
            setActivity($log);
            $this->alert('success', $log, [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
            if(Auth::user()->role_id==1){
                return redirect()->route('master.password');
            }else{
                return redirect()->route('master.password');
            }
        }else{
            $log = 'Password gagal diubah username '.$model->username;
            $this->alert('error', $log, [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
    }
    
    public function render()
    {
        return view('livewire.master.user.password');
        
    }
}
