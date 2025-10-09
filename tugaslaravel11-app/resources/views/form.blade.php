<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirim Pesan ✉</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #1e5e60;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
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

    .fish:nth-child(3) {
      width: 45px;
      height: 28px;
      background: #9fe5df;
      bottom: 130px;
      animation: swimLeft 22s linear infinite;
    }

    .fish:nth-child(3)::before {
      border-left-color: #81d4c9;
    }

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

    /* ✨ Form Container */
    form {
      background: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 25px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
      backdrop-filter: blur(10px);
      animation: fadeUp 1.2s ease-in-out;
      text-align: center;
      max-width: 420px;
      width: 90%;
      z-index: 1;
    }

    h1 {
      font-size: 2.2rem;
      margin-bottom: 25px;
      color: #1e5e60;
      text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.7);
      animation: slideDown 1s ease;
    }

    textarea {
      width: 100%;
      height: 130px;
      border-radius: 15px;
      border: 2px solid #b2dfdb;
      padding: 12px;
      font-size: 16px;
      resize: none;
      outline: none;
      background-color: #f0fcfb;
      color: #2f4f4f;
      transition: 0.3s;
    }

    textarea:focus {
      border-color: #80cbc4;
      box-shadow: 0 0 10px rgba(128, 203, 196, 0.4);
    }

    button {
      margin-top: 20px;
      padding: 10px 25px;
      background: linear-gradient(90deg, #C9EAF0, #E0FFF7, #CFEAE8);
      border: none;
      border-radius: 20px;
      font-weight: bold;
      color: #104f55;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }

    button:hover {
      background: linear-gradient(90deg, #E0FFF7, #CFEAE8, #C9EAF0);
      transform: scale(1.05);
    }

    a {
      display: inline-block;
      margin-top: 25px;
      text-decoration: none;
      color: #104f55;
      font-weight: bold;
      background: rgba(255, 255, 255, 0.5);
      padding: 10px 20px;
      border-radius: 15px;
      transition: 0.3s;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    a:hover {
      background: rgba(255, 255, 255, 0.8);
      transform: scale(1.05);
    }

    /* ✨ Animasi Umum */
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes fadeUp { from { transform: translateY(40px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    @keyframes slideDown { from { transform: translateY(-30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
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

  <h1> Kirim Pesan</h1>

  <form action="{{ route('form.submit') }}" method="POST">
    @csrf
    <textarea name="message" placeholder="Tulis pesan kamu di sini..."></textarea><br>
    <button type="submit">Kirim Sekarang ✨</button>
  </form>

  <a href="{{ route('home') }}">⬅ Kembali ke Daftar Buku</a>
</body>
</html>
