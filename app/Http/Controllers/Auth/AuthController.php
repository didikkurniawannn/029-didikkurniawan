<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\User;

class AuthController extends Controller
{
    public function rules()
    {
        return [
            'username' => ['required'],
            'password' => ['required'],
        ];
    }
    
    public function signin(Request $request)
    {
        $validatedData = $request->validate($this->rules());

        $throttleKey = strtolower($validatedData['username']) . '|' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            return redirect()->back()->withErrors([
                'username' => __('auth.throttle', ['seconds' => RateLimiter::availableIn($throttleKey)])
            ])->withInput($request->only('username'));
        }
        
        $fieldType = filter_var($validatedData['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [$fieldType => $validatedData['username'], 'password' => $validatedData['password']];
        
        if (!Auth::attempt($credentials)) {
            RateLimiter::hit($throttleKey);
            
            // Cek apakah username/email ada di database
            $userExists = User::where($fieldType, $validatedData['username'])->exists();
            if (!$userExists) {
                return redirect()->back()->withErrors([
                    'username' => 'Username atau Email tidak ditemukan!'
                ])->withInput($request->only('username'));
            }

            // Jika username/email ada, maka error pada password
            return redirect()->back()->withErrors([
                'password' => 'Password yang Anda masukkan salah!'
            ])->withInput($request->only('username'));
        }

        $user = User::where($fieldType, $validatedData['username'])->first();
        if ($user->is_active) {
            $user->update(['last_login_at' => now()]);
            setActivity('Pengguna Login Aplikasi');
            return redirect()->route('dashboard');
        } else {
            Auth::logout();
            return redirect()->route('login')->withErrors(['username' => 'Akun Anda Sudah Tidak Aktif!']);
        }
    }
}

