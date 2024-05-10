<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotController extends Controller
{
    public function index()
    {
        return view('auth.forgot');
    }

    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with(['status' => __($status)]);
        } else {
            return back()->withErrors(['email' => __($status)]);
        }
    }
}

