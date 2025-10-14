<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa ✨</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9c5d1, #9795ef);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .card {
      background: rgba(255,255,255,0.9);
      padding: 30px;
      border-radius: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 400px;
      text-align: center;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 10px;
      border: 2px solid #dcd6f7;
    }
    button, a {
      background: #6a5acd;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      text-decoration: none;
    }
    button:hover, a:hover {
      background: #7b68ee;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
      @csrf
      <input type="text" name="nama" placeholder="Nama" required>
      <input type="text" name="nim" placeholder="NIM" required>
      <input type="text" name="jurusan" placeholder="Jurusan" required>
      <input type="text" name="angkatan" placeholder="Angkatan" required>

      <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('mahasiswa') }}">⬅ Kembali</a>
  </div>
</body>
</html>
