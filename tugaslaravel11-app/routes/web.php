<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah file untuk mengatur semua route (rute halaman)
| yang bisa diakses di browser.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 🌸 Route ke halaman home aesthetic
Route::get('/home', function () {
    return view('home');
});