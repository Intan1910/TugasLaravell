<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class HomeController extends Controller
{
    // ✅ Halaman awal
    public function home()
    {
        return view('welcome');
    }

    // ✅ Halaman buku (contoh)
    public function index()
    {
        $buku = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata'],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer'],
        ];
        return view('home', compact('home'));
    }

    // ✅ Halaman form pesan
    public function form()
    {
        return view('form');
    }

    // ✅ CRUD Mahasiswa
    public function mahasiswa()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa', compact('data'));
    }

    public function createMahasiswa()
    {
        return view('create');
    }

    public function storeMahasiswa(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editMahasiswa($id)
    {
        $data = Mahasiswa::find($id);
        return view('edit', compact('data'));
    }

    public function updateMahasiswa(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data berhasil diupdate!');
    }

    public function destroyMahasiswa($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data berhasil dihapus!');
    }
}
