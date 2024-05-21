<?php

use Illuminate\Support\Facades\Route;

$data = [
    'title' => 'Mager - Management Rapat',
    'description' => 'Aplikasi dibuat berkaitan dengan Management Rapat yang akan digunakan untuk Pemerintah Kabupaten Bandung. dengan aplikasi ini diharapkan event yang dibuat dapat mudah dipublikasi sehingga peserta rapat dapat mempelajari apa yang akan di akan dibahas pada rapat tersebut.',
    'copyright' => 'Copyright © 2024. Didik Kurniawan.'
];

Route::group(['middleware' => ['auth','verified','web'],'prefix' => '', 'as' => '', 'before' => 'csrf'], function () {
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

    Route::prefix('rapat')->group(function () {
        Route::get('create',[App\Livewire\Rapat\Agenda\Create::class,'create'])->name('rapat.create');
        Route::get('informasi',App\Livewire\Rapat\Agenda\Form\Informasi::class)->name('rapat.form.informasi');
    });
    
});

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'index'])->name('logout');
Route::post('/signin', [App\Http\Controllers\Auth\AuthController::class, 'signin'])->name('signin');
Route::get('/autologin/{id}', [App\Http\Controllers\Auth\AutoLoginController::class, 'autologin'])->name('autologin');

Route::get('/register', function() use ($data){
    return view('auth.register', ['data' => $data]);
})->name('register');

Route::get('/forgot', function() use ($data){
    return view('auth.forgot', ['data' => $data]);
})->name('forgot');



Route::get('/', function() use ($data){
    return view('frontend.home', ['data' => $data]);
})->name('home');

Route::get('/my-ticket', function() use ($data){
    $ticket = [
        'no_peserta' => 'E4234RE990',
        'telp' => '082130314252',
        'email' => 'didikkurniawannn@gmail.com',
        'name' => 'Didik Kurniawan',
        'kegiatan' => 'Rapat Pemerintah Kabupaten Bandung',
        'tanggal' => '2024-03-01',
        'jam' => '09:00:00',
        'lokasi' => 'Gedung Kesehatan Kabupaten Bandung',
    ];
    return view('frontend.my-ticket', ['data' => $data, 'ticket' => $ticket]);
})->name('my-ticket');

Route::get('/contact-us', function() use ($data){
    return view('frontend.contact-us', ['data' => $data]);
})->name('contact-us');

Route::get('/detail-rapat', function() use ($data){
    return view('frontend.detail-rapat', ['data' => $data]);
})->name('detail-rapat');




