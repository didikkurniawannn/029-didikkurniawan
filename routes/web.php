<?php

use Illuminate\Support\Facades\Route;

$data = [
    'title' => 'Mager - Management Rapat',
    'description' => 'Aplikasi dibuat berkaitan dengan Management Rapat yang akan digunakan untuk Pemerintah Kabupaten Bandung. dengan aplikasi ini diharapkan event yang dibuat dapat mudah dipublikasi sehingga peserta rapat dapat mempelajari apa yang akan di akan dibahas pada rapat tersebut.',
    'copyright' => 'Copyright © 2024. Didik Kurniawan.'
];

Route::group(['middleware' => ['auth','verified','web'],'prefix' => '', 'as' => '', 'before' => 'csrf'], function () {
    
    Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'index'])->name('logout');
    Route::get('/autologin/{id}', [App\Http\Controllers\Auth\AutoLoginController::class, 'autologin'])->name('autologin');
    Route::prefix('dashboard')->group(function () {
        Route::get('/',App\Livewire\Dashboard::class)->name('dashboard');
    });
    Route::prefix('utilitas')->group(function () {
        Route::get('menu',App\Livewire\Utilitas\Menu::class)->name('utilitas.menu');
        Route::get('role',App\Livewire\Utilitas\Role::class)->name('utilitas.role');
        Route::get('role-child/{id}',App\Livewire\Utilitas\RoleChild::class)->name('utilitas.role-child');
        Route::get('setting',App\Livewire\Utilitas\Setting::class)->name('utilitas.setting');
    });
    //Begin Master
    Route::prefix('master')->group(function () {
        Route::get('user',App\Livewire\Master\User\Index::class)->name('master.index');
        Route::get('user/profile',App\Livewire\Master\User\Profile::class)->name('master.profile');
        Route::get('user/password',App\Livewire\Master\User\Password::class)->name('master.password');
        Route::get('instansi',App\Livewire\Master\Instansi::class)->name('master.instansi');
    });

    Route::prefix('rapat')->group(function(){
        Route::get('create',[App\Livewire\Rapat\Agenda\Create::class,'create'])->name('rapat.create');
        Route::get('/',App\Livewire\Rapat\Agenda\Index::class)->name('rapat');
        Route::get('form/informasi/{id?}',App\Livewire\Rapat\Agenda\Form\Informasi::class)->name('rapat.form.informasi');
        Route::get('form/lokasi/{id}',App\Livewire\Rapat\Agenda\Form\Lokasi::class)->name('rapat.form.lokasi');
        Route::get('form/peserta/{id}',App\Livewire\Rapat\Agenda\Form\Peserta::class)->name('rapat.form.peserta');
        Route::get('detail/{id}',App\Livewire\Rapat\Agenda\Detail::class)->name('rapat.detail');
    });
    
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/signin', [App\Http\Controllers\Auth\AuthController::class, 'signin'])->name('signin');

Route::get('/',App\Livewire\Frontend\Home::class)->name('home');
Route::get('detail-rapat/{id}',App\Livewire\Frontend\Detail::class)->name('detail-rapat');
Route::get('cetak/{id}',App\Livewire\Frontend\Cetak::class)->name('cetak');
Route::get('invoice/{id}',App\Livewire\Frontend\Invoice::class)->name('invoice');

Route::get('my-ticket',App\Livewire\Frontend\Ticket::class)->name('my-ticket');
Route::get('contact-us',App\Livewire\Frontend\Contact::class)->name('contact-us');


Route::get('/register', function() use ($data){
    return view('auth.register', ['data' => $data]);
})->name('register');

Route::get('/forgot', function() use ($data){
    return view('auth.forgot', ['data' => $data]);
})->name('forgot');





