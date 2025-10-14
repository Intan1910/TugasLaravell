<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa 🎓</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9c5d1, #9795ef);
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      color: #4b0082;
      margin-top: 30px;
    }
    .container {
      width: 90%;
      max-width: 900px;
      background: rgba(255,255,255,0.9);
      margin: 40px auto;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #dcd6f7;
      padding: 10px;
      text-align: center;
    }
    th {
      background: #6a5acd;
      color: white;
    }
    tr:nth-child(even) {
      background: #f5f3ff;
    }
    .btn {
      padding: 6px 14px;
      border-radius: 15px;
      color: white;
      text-decoration: none;
      font-size: 14px;
    }
    .add-btn { background: #6a5acd; }
    .edit-btn { background: #ffa500; }
    .delete-btn { background: #ff4d4d; }
    .btn:hover { opacity: 0.8; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Daftar Mahasiswa</h1>

    @if(session('success'))
      <p style="color:green; text-align:center;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('mahasiswa.create') }}" class="btn add-btn">+ Tambah Mahasiswa</a>

    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Angkatan</th>
        <th>Aksi</th>
      </tr>

      @forelse($mahasiswa as $index => $mhs)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $mhs->nama }}</td>
          <td>{{ $mhs->nim }}</td>
          <td>{{ $mhs->jurusan }}</td>
          <td>{{ $mhs->angkatan }}</td>
          <td>
            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn edit-btn">Edit</a>
            <a href="{{ route('mahasiswa.delete', $mhs->id) }}" class="btn delete-btn"
               onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6">Belum ada data mahasiswa.</td>
        </tr>
      @endforelse
    </table>
  </div>
</body>
</html>
