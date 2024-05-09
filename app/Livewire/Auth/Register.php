<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;

class Register extends Component
{
    use LivewireAlert;
    
    public $no_induk;
    public $username;
    public $nama;
    public $phone;
    public $email;
    public $password;
    public $password_confirmation;
    
    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.auth.register');
        // ->layout('layouts.login');
    }
    
    public function rules()
    {
        return [
            'no_induk' => ['required', 'numeric', 'unique:ref_users'],
            'username' => ['required', 'string', 'min:5', 'max:10', 'unique:ref_users'],
            'phone' => ['required', 'string', 'min:5', 'max:15', 'unique:ref_users'],
            'nama' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:ref_users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:password']
            
        ];
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function signup()
    {
        $this->validate();
        $user = User::create([
            'no_induk' => $this->no_induk,
            'username' => $this->username,
            'phone' => $this->phone,
            'nama' => $this->nama,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role_id' => '099a4754-f3cd-48a4-a125-8121b93e3d7e',
            'is_active' => 1,
        ]);
        // Auth::login($user, true);
        $pesan = "Anda Berhasil Membuat Akun Username :".$this->username." Password : ".$this->password." Silahkan Lengkapi Data Profil Anda, Terima Kasih";
        // KirimPesan($this->phone,$pesan);
        $this->alert('success', 'Berhasil Membuat Akun Silahkan Login dan Lengkapi Profil Anda',
        [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
        return redirect()->to('/');
    }
}
