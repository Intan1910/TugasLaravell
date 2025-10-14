<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirim Pesan 💌</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f9c5d1 0%, #9795ef 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }
    .card {
      background: rgba(255, 255, 255, 0.85);
      padding: 40px;
      border-radius: 25px;
      width: 400px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    h1 { color: #6a5acd; margin-bottom: 20px; }
    textarea {
      width: 100%; height: 120px;
      border-radius: 15px; border: 2px solid #d2c8f5;
      padding: 12px; font-size: 16px; background: #f8f5ff;
      resize: none; transition: 0.3s;
    }
    textarea:focus { border-color: #a18cd1; box-shadow: 0 0 10px rgba(161,140,209,0.4); }
    button {
      margin-top: 20px; background: linear-gradient(90deg, #a18cd1, #fbc2eb);
      border: none; color: white; font-weight: 600;
      border-radius: 25px; padding: 10px 25px; cursor: pointer;
    }
    a { display: inline-block; margin-top: 20px; color: #6a5acd; font-weight: 600; text-decoration: none; }
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
    <h1>💌 Kirim Pesan</h1>
    <form action="{{ route('form.submit') }}" method="POST">
      @csrf
      <textarea name="message" placeholder="Tulis pesanmu di sini..."></textarea><br>
      <button type="submit">Kirim Sekarang ✨</button>
    </form>
    <a href="{{ route('home') }}">⬅ Kembali</a>
  </div>

  @if(session('success'))
  <div class="toast" id="toast">✅ {{ session('success') }}</div>
  <script>
    setTimeout(() => document.getElementById('toast').style.opacity = '0', 3000);
  </script>
  @endif

</body>
</html>
