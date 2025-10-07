<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data array buku minimal 5
           $buku = [
    ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Rindu', 'penulis' => 'Tere Liye', 'tahun' => 2014],
    ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
    ['judul' => 'Pergi', 'penulis' => 'Tere Liye', 'tahun' => 2018],
    ['judul' => 'Bumi', 'penulis' => 'Tere Liye', 'tahun' => 2014],
    ['judul' => 'Bulan', 'penulis' => 'Tere Liye', 'tahun' => 2015],
    ['judul' => 'Matahari', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Nebula', 'penulis' => 'Tere Liye', 'tahun' => 2022],
    ['judul' => 'Selamat Tinggal', 'penulis' => 'Tere Liye', 'tahun' => 2021],
    ['judul' => 'Tentang Kamu', 'penulis' => 'Tere Liye', 'tahun' => 2016],
           ];
        // Kirim data ke view
        return view('home', ['buku' => $buku]);
    }
}