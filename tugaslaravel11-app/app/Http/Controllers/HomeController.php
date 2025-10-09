<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman utama dengan data buku
    public function index(Request $request)
    {
        $books = [
    ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Bumi', 'penulis' => 'Tere Liye', 'tahun' => 2014],
    ['judul' => 'Matahari', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Bintang', 'penulis' => 'Tere Liye', 'tahun' => 2017],
    ['judul' => 'Rembulan Tenggelam di Wajahmu', 'penulis' => 'Tere Liye', 'tahun' => 2009],
    ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
    ['judul' => 'Pergi', 'penulis' => 'Tere Liye', 'tahun' => 2018],
    ['judul' => 'Negeri Para Bedebah', 'penulis' => 'Tere Liye', 'tahun' => 2012],
    ['judul' => 'Negeri di Ujung Tanduk', 'penulis' => 'Tere Liye', 'tahun' => 2013],
    ['judul' => 'Tentang Kamu', 'penulis' => 'Tere Liye', 'tahun' => 2016],
];

        // fitur pencarian
        $search = $request->input('search');
        if ($search) {
            $books = array_filter($books, function ($item) use ($search) {
                return stripos($item['judul'], $search) !== false ||
                       stripos($item['penulis'], $search) !== false;
            });
        }

        return view('home', [
            'books' => $books,
            'search' => $search ?? '',
            'message' => null
        ]);
    }

    // Menampilkan form input
    public function form()
    {
        return view('form');
    }

    // Menerima data form dan kembali ke home
    public function submit(Request $request)
    {
        $dataMessage = $request->message;

        // Tetap menampilkan daftar buku saat kembali
        $books = [
           ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Bumi', 'penulis' => 'Tere Liye', 'tahun' => 2014],
    ['judul' => 'Matahari', 'penulis' => 'Tere Liye', 'tahun' => 2016],
    ['judul' => 'Bintang', 'penulis' => 'Tere Liye', 'tahun' => 2017],
    ['judul' => 'Rembulan Tenggelam di Wajahmu', 'penulis' => 'Tere Liye', 'tahun' => 2009],
    ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
    ['judul' => 'Pergi', 'penulis' => 'Tere Liye', 'tahun' => 2018],
    ['judul' => 'Negeri Para Bedebah', 'penulis' => 'Tere Liye', 'tahun' => 2012],
    ['judul' => 'Negeri di Ujung Tanduk', 'penulis' => 'Tere Liye', 'tahun' => 2013],
    ['judul' => 'Tentang Kamu', 'penulis' => 'Tere Liye', 'tahun' => 2016],
        ];

        return view('home', [
            'books' => $books,
            'search' => '',
            'message' => $dataMessage
        ]);
    }
}