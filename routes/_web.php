<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/signin', [App\Http\Controllers\Auth\AuthController::class, 'signin'])->name('signin');

Route::group(['middleware' => ['auth','verified','web'],'prefix' => '', 'as' => '', 'before' => 'csrf'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    });
});







