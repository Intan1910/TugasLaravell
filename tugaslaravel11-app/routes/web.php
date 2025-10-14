<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/', [HomeController::class, 'home'])->name('home');

// halaman buku
Route::get('/buku', [HomeController::class, 'index'])->name('buku');

// form pesan
Route::get('/form', [HomeController::class, 'form'])->name('form');

// halaman mahasiswa (CRUD)
Route::get('/mahasiswa', [HomeController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/mahasiswa/create', [HomeController::class, 'createMahasiswa'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [HomeController::class, 'storeMahasiswa'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [HomeController::class, 'editMahasiswa'])->name('mahasiswa.edit');
Route::put('/mahasiswa/update/{id}', [HomeController::class, 'updateMahasiswa'])->name('mahasiswa.update');
Route::delete('/mahasiswa/delete/{id}', [HomeController::class, 'destroyMahasiswa'])->name('mahasiswa.destroy');
