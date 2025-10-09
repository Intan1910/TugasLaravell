<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku Luar Negeri</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #2f4f4f;
      min-height: 100vh;
      overflow-x: hidden;
      animation: fadeIn 1s ease-in-out;
      position: relative;
    }

    /* 🌊 Background laut kalem */
    body::before {
      content: '';
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      z-index: -4;
      background: linear-gradient(270deg, #E0F7FA, #E8FFF5, #C8E6F0, #DFF9FB);
      background-size: 800% 800%;
      animation: gradientMove 20s ease infinite;
    }

    /* 🌊 Ombak lembut */
    .wave {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 200%;
      height: 180px;
      background: rgba(255, 255, 255, 0.5);
      border-radius: 100%;
      animation: waveMove 8s linear infinite;
      z-index: -3;
      opacity: 0.5;
      filter: blur(2px);
    }

    .wave:nth-child(1) {
      animation-duration: 10s;
      background: rgba(255, 255, 255, 0.4);
    }

    .wave:nth-child(2) {
      animation-duration: 14s;
      background: rgba(255, 255, 255, 0.3);
    }

    @keyframes waveMove {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    /* 🐠 Ikan berenang pelan */
    .fish {
      position: fixed;
      bottom: 80px;
      width: 40px;
      height: 25px;
      background: #7ddad1;
      border-radius: 50% 40% 40% 50%;
      transform: rotate(5deg);
      z-index: -2;
      opacity: 0.8;
      animation: swimRight 18s linear infinite;
    }

    .fish::before {
      content: '';
      position: absolute;
      right: -10px;
      top: 8px;
      width: 0;
      height: 0;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
      border-left: 10px solid #5ec7bb;
    }

    /* Ikan kedua (warna berbeda & arah berlawanan) */
    .fish:nth-child(4) {
      width: 45px;
      height: 28px;
      background: #9fe5df;
      bottom: 130px;
      animation: swimLeft 22s linear infinite;
    }

    .fish:nth-child(4)::before {
      border-left-color: #81d4c9;
    }

    /* Gerak ikan */
    @keyframes swimRight {
      0% { left: -60px; transform: rotate(5deg) scaleX(1); }
      50% { bottom: 90px; }
      100% { left: 110%; transform: rotate(5deg) scaleX(1); }
    }

    @keyframes swimLeft {
      0% { right: -60px; transform: rotate(-5deg) scaleX(-1); }
      50% { bottom: 120px; }
      100% { right: 110%; transform: rotate(-5deg) scaleX(-1); }
    }

    /* ✨ Kontainer utama */
    .container {
      max-width: 850px;
      margin: 80px auto;
      background: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 25px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(12px);
      animation: fadeUp 1.3s ease-in-out;
      z-index: 1;
      position: relative;
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #1e5e60;
      font-size: 2.3rem;
      text-shadow: 1px 1px 4px rgba(255, 255, 255, 0.6);
      animation: slideDown 1s ease-out;
    }

    /* 🔍 Pencarian */
    .search-box {
      text-align: center;
      margin-bottom: 25px;
      animation: fadeUp 1.5s ease;
    }

    .search-box form {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
    }

    .search-box input {
      width: 70%;
      padding: 12px 15px;
      border-radius: 10px;
      border: 2px solid #b2dfdb;
      outline: none;
      font-size: 16px;
      background-color: #f0fcfb;
      color: #2f4f4f;
      transition: 0.3s;
    }

    .search-box input:focus {
      border-color: #80cbc4;
      box-shadow: 0 0 10px rgba(128, 203, 196, 0.4);
    }

    .search-box button {
      background-color: #a5d6d9;
      border: none;
      padding: 12px 20px;
      border-radius: 10px;
      cursor: pointer;
      color: #104f55;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .search-box button:hover {
      background-color: #b2ebe7;
      transform: scale(1.05);
    }

    /* 📖 Tabel Buku */
    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 15px;
      margin-top: 10px;
      animation: fadeUp 1.7s ease-in-out;
    }

    th, td {
      padding: 14px;
      text-align: left;
    }

    th {
      background-color: #80cbc4;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: rgba(230, 251, 249, 0.8);
    }

    tr:hover {
      background-color: #d9f3f1;
      transform: scale(1.01);
      transition: all 0.2s ease-in-out;
    }

    /* ✉ Pesan */
    .message-box {
      margin-top: 25px;
      background: linear-gradient(90deg, #C9EAF0, #E0FFF7, #CFEAE8);
      padding: 18px;
      border-radius: 15px;
      text-align: center;
      color: #1e5e60;
      font-weight: 600;
      animation: popIn 1s ease-in-out;
      box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }

    /* 🔗 Tombol Pesan Baru */
    a {
      display: inline-block;
      margin-top: 25px;
      text-decoration: none;
      color: #104f55;
      font-weight: bold;
      background: linear-gradient(90deg, #C9EAF0, #E0FFF7, #CFEAE8);
      padding: 12px 25px;
      border-radius: 12px;
      transition: 0.3s;
      animation: fadeUp 2s ease;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }

    a:hover {
      background: linear-gradient(90deg, #E0FFF7, #CFEAE8, #C9EAF0);
      transform: scale(1.05);
    }

    /* 🎞 Animasi */
    @keyframes fadeIn {
      from { opacity: 0; } to { opacity: 1; }
    }
    @keyframes slideDown {
      from { transform: translateY(-40px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fadeUp {
      from { transform: translateY(40px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @keyframes popIn {
      0% { transform: scale(0.8); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>
</head>
<body>
  <!-- 🌊 Ombak & Ikan -->
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="fish"></div>
  <div class="fish"></div>

  <div class="container">
    <h1>🌊 Daftar Buku Tere Liyye</h1>

    <div class="search-box">
      <form method="GET" action="{{ route('home') }}">
        <input type="text" name="search" placeholder="Cari judul atau penulis..." value="{{ $search ?? '' }}">
        <button type="submit">🔍 Cari</button>
      </form>
    </div>

    <table>
      <thead>
        <tr>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Tahun</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($books as $item)
        <tr>
          <td>{{ $item['judul'] }}</td>
          <td>{{ $item['penulis'] }}</td>
          <td>{{ $item['tahun'] }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="3" style="text-align:center;">Tidak ada buku ditemukan</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    @if (!empty($message))
    <div class="message-box">
      Pesan yang kamu kirim: <br> <em>"{{ $message }}"</em>
    </div>
    @endif

    <div style="text-align:center;">
      <a href="{{ route('form') }}">💌 Kirim Pesan Baru</a>
    </div>
  </div>
</body>
</html>
