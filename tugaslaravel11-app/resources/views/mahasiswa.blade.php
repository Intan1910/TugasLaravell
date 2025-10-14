<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa 🎓</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9c5d1 0%, #9795ef 100%);
      display: flex; flex-direction: column; align-items: center; justify-content: center;
      min-height: 100vh; margin: 0;
    }
    .card {
      background: rgba(255,255,255,0.9);
      padding: 30px;
      border-radius: 25px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      width: 85%;
      max-width: 700px;
      text-align: center;
    }
    h1 { color: #6a5acd; margin-bottom: 20px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td {
      padding: 10px; border-bottom: 1px solid #ddd;
    }
    th { background-color: #dcd6f7; color: #4a4a4a; }
    tr:hover { background-color: #f5f3ff; }
    a.button, button {
      background: #6a5acd; color: white; text-decoration: none;
      padding: 8px 15px; border-radius: 10px; margin: 2px;
      border: none; cursor: pointer;
    }
    a.button:hover, button:hover { background: #7b68ee; transform: scale(1.05); }
    .top-btn { display: inline-block; margin-bottom: 15px; }
    .toast {
      position: fixed; top: 25px; right: 25px;
      background: linear-gradient(135deg, #a18cd1, #fbc2eb);
      color: white; padding: 15px 25px; border-radius: 25px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
      opacity: 0; transform: translateY(-20px);
      animation: slideDown 0.8s ease forwards;
    }
    @keyframes slideDown { to { opacity: 1; transform: translateY(0); } }
  </style>
</head>
<body>

  <div class="card">
    <h1>🎓 Data Mahasiswa</h1>
    <a href="{{ route('create') }}" class="button top-btn">➕ Tambah Mahasiswa</a>
    <table>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
      @foreach($mahasiswa as $m)
      <tr>
        <td>{{ $m['nama'] }}</td>
        <td>{{ $m['nim'] }}</td>
        <td>{{ $m['jurusan'] }}</td>
        <td>
          <a href="{{ route('edit', $m['id']) }}" class="button">✏️ Edit</a>
          <form action="{{ route('destroy', $m['id']) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit" onclick="return confirm('Hapus data ini?')">🗑️ Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <a href="{{ route('home') }}" class="button">⬅ Kembali</a>
  </div>

  @if(session('success'))
  <div class="toast" id="toast">✅ {{ session('success') }}</div>
  <script>
    setTimeout(() => document.getElementById('toast').style.opacity = '0', 3000);
  </script>
  @endif

</body>
</html>
