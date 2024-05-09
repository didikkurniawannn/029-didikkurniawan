<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
class Login extends Component
{
    public $username, $password, $remember = false;
    use LivewireAlert;
    
    #[Layout('components.layouts.keenthemes.login')]
    public function render()
    {
        return view('livewire.auth.login');
    }
    
    public function rules()
    {
        return [
            'username' => ['required'],
            // 'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }
    
    public function updated($property)
    {
        $this->validateOnly($property);
    }
    
    public function signin()
    {
        $this->validate();
        $throttleKey = strtolower($this->username) . '|' . request()->ip();
        
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $this->addError('username', __('auth.throttle', [
                'seconds' => RateLimiter::availableIn($throttleKey)
            ]));
            return null;
        }
        
        $fieldType = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(!Auth::attempt(array($fieldType => $this->username, 'password' => $this->password),$this->remember)){
            RateLimiter::hit($throttleKey);
            return $this->alert('error', 'Silahkan Cek kembali Username/Password Anda!', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        $user = User::findOrFail(Auth::user()->id);
        if($user) {
            if($user->is_active == 1):
                $user->update([
                    'last_login_at' => date('Y-m-d h:i:s'),
                ]);
                $this->alert('success', 'Selamat Datang di Aplikasi '.getAppName(), [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);
                setActivity('Pengguna Login Aplikasi');
                // dd($user);
                if($user->jabatan_pembantu_id==NULL){
                    return redirect()->to('dashboard');
                }else{
                    return redirect()->to('dashboard/roleakses');
                }
            else:
                Auth::logout();
                $this->alert('error', 'Akun Anda Sudah Tidak Aktif!', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);
            endif;
        }
        
    }
}
