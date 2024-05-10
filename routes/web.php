<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/signin', [App\Http\Controllers\Auth\AuthController::class, 'signin'])->name('signin');




