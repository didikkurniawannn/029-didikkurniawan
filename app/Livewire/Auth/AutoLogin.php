<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User as Model;

class AutoLogin extends Component
{
    public function mount($level,$id)
    {
        // Uncomment this line for debugging purposes
        // dd($level);
        
        // Logout the current user
        // Auth::logout();
        
        // Find the user by their ID
        $enkripsi = Crypt::decryptString($id);
        $data = Model::where('id', $enkripsi)->first();
        
        // Set the status_login based on the $level parameter
        $data->status_login = ($level == 1) ? 1 : 2;
        
        // Update the user's status_login
        $data->update();
        
        // Log in the user
        Auth::login($data, true);
        
        // Uncomment the following line for activity logging
        // setActivity('Login ke Aplikasi');
        
        return redirect()->route('dashboard');
    }
    
    
}

