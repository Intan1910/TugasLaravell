<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Aesthetic ✨</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9c5d1 0%, #9795ef 100%);
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background: rgba(255, 255, 255, 0.85);
      padding: 50px;
      border-radius: 25px;
      width: 420px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      animation: fadeIn 1s ease-in-out;
    }

    h1 {
      color: #6a5acd;
      margin-bottom: 10px;
    }

    p {
      font-size: 16px;
      color: #555;
      margin-bottom: 25px;
    }

    .btn {
      display: block;
      background: linear-gradient(90deg, #a18cd1, #fbc2eb);
      color: white;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 25px;
      font-weight: 600;
      margin: 10px 0;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(161, 140, 209, 0.4);
    }

    .emoji {
      font-size: 60px;
      animation: float 3s ease-in-out infinite;
      margin-bottom: 10px;
    }

    footer {
      margin-top: 25px;
      font-size: 13px;
      color: #777;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
  </style>
</head>
<body>

  <div class="card">
    <div class="emoji">🌸</div>
    <h1>Selamat Datang, Intan! 💖</h1>
    <p>Pilih halaman yang ingin kamu kunjungi:</p>

    <a href="{{ route('home') }}" class="btn">📚 Tabel Buku</a>
    <a href="{{ route('form') }}" class="btn">💌 Form Pesan</a>
    <a href="{{ route('mahasiswa') }}" class="btn">🎓 Data Mahasiswa</a>

    <footer>© 2025 | Dibuat dengan 💕 oleh Intan</footer>
  </div>

</body>
</html>
