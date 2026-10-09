<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/hello',function(){
    return view ('hello');
});

Route::get('/profile',function(){
    return view ('profile');
});

Route::get('/profile2', function(){
    return view('profile2', [
        'nama'  => 'Cecep',
        'nim'   => '123456789',
        'kelas' => 'TRM-99',
        'prodi' => 'Teknologi Rekayasa Multimedia',

    ]);
});