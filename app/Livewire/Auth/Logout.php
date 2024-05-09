<?php

namespace App\Livewire\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }
    
    public function logout()
    {
        setActivity('Logout dari Aplikasi');
        Auth::logout();
        return redirect()->route('login');
    }
}
