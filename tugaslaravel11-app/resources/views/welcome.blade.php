<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Aesthetic ✨</title>
    <style>
        /* 🌷 Font & Warna Dasar */
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

        /* 🩵 Kartu Utama */
        .card {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 25px;
            width: 400px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            animation: fadeIn 1s ease-in-out;
        }

        /* ✨ Animasi Lembut */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(30px);}
            to {opacity: 1; transform: translateY(0);}
        }

        /* 🌈 Teks */
        h1 {
            font-size: 28px;
            color: #6a5acd;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        /* 🎀 Tombol */
        a.button {
            background: #6a5acd;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
        }

        a.button:hover {
            background: #7b68ee;
            transform: scale(1.05);
        }

        /* 💫 Emoji Dekoratif */
        .emoji {
            font-size: 60px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* ✨ Footer */
        footer {
            margin-top: 25px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="emoji">🌸</div>
        <h1>Welcome, Intan! 💖</h1>
        <p>Selamat datang di halaman home Laravel ✨</p>
        <a href="#" class="button">Jelajahi Sekarang</a>
        <footer>© 2025 | Dibuat dengan 💕 oleh Intan</footer>
    </div>

</body>
</html>