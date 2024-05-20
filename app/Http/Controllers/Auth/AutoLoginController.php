<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User as Model;

class AutoLoginController extends Controller
{
    public function autologin($id){
        $enkripsi = Crypt::decrypt($id);
        $data = Model::where('id', $enkripsi)->first();
        $model = Model::firstOrNew(['id' =>  $data->id]);
        $model->last_login_at = Carbon::now();
        // Update the user's status_login
        $model->update();
        
        // Log in the user
        Auth::login($data, true);
        
        // Uncomment the following line for activity logging
        setActivity('Auto Login ke Aplikasi '.$data->username);
        
        return redirect()->route('dashboard');
    }
}
