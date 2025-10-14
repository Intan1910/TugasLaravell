<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/buku', [HomeController::class, 'buku'])->name('buku');
Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::post('/kirim-pesan', [HomeController::class, 'kirimPesan'])->name('kirim.pesan');

Route::get('/mahasiswa', [HomeController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/mahasiswa/create', [HomeController::class, 'createMahasiswa'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [HomeController::class, 'storeMahasiswa'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [HomeController::class, 'editMahasiswa'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [HomeController::class, 'updateMahasiswa'])->name('mahasiswa.update');
Route::get('/mahasiswa/show/{id}', [HomeController::class, 'showMahasiswa'])->name('mahasiswa.show');
Route::delete('/mahasiswa/{id}', [HomeController::class, 'destroyMahasiswa'])->name('mahasiswa.destroy');
