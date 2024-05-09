<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Auth\Login::class)->name('login');
Route::get('forgot-password', App\Livewire\Auth\Forgot::class)->name('forgot');
Route::get('/auth', App\Livewire\Auth\Login::class)->name('login.auth');
Route::get('logout', App\Livewire\Auth\Logout::class)->name('logout');
Route::get('register', App\Livewire\Auth\Register::class)->name('register');
