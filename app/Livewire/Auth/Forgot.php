<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
class Forgot extends Component
{
    public $email;
    use LivewireAlert;
    
    #[Layout('components.layouts.keenthemes.login')]
    public function render()
    {
        return view('livewire.auth.forgot');
    }
    
    public function rules()
    {
        return [
            'email' => ['required'],
            // 'email' => ['required', 'email'],
            // 'password' => ['required'],
        ];
    }
    
    public function updated($property)
    {
        $this->validateOnly($property);
    }
    
    public function sendPasswordResetLink()
    {
        $this->validate([
            'email' => 'required|email',
        ]);
        
        $response = User::where('email',$this->email)->first();
        
        if ($response === NULL) {
            $pesan = 'Gagal mengirimkan link reset password. Silakan cek kembali alamat email Anda.';
            return $this->alert('error', $pesan, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } else {
            $pesan = 'Link reset password telah dikirim ke email Anda.';
            return $this->alert('success', $pesan, [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
        
        
        
    }
}
