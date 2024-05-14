<?php

use Illuminate\Support\Facades\Route;

$data = [
    'title' => 'Mager - Management Rapat',
    'description' => 'Aplikasi dibuat berkaitan dengan Management Rapat yang akan digunakan untuk Pemerintah Kabupaten Bandung. dengan aplikasi ini diharapkan event yang dibuat dapat mudah dipublikasi sehingga peserta rapat dapat mempelajari apa yang akan di akan dibahas pada rapat tersebut.',
    'copyright' => 'Copyright © 2024. Didik Kurniawan.'
];

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

Route::get('/login', function() use ($data){
    return view('auth.login', ['data' => $data]);
})->name('login');

Route::get('/register', function() use ($data){
    return view('auth.register', ['data' => $data]);
})->name('register');

Route::get('/forgot', function() use ($data){
    return view('auth.forgot', ['data' => $data]);
})->name('forgot');



Route::get('/dashboard',function() use ($data) {
    $profile = [
        'username' => 'didikkurniawannn',
        'role' => 'Admin',
        'email' => 'didikkurniawannn@gmail.com',
        'name' => 'Didik Kurniawan'
    ];
    return view('dashboard', ['profile' => $profile,'data' => $data]);
})->name('dashboard');







