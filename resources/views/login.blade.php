<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna Masuk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        /* Gaya untuk body */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #19345E;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        /* Container untuk form login */
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 320px;
        }

        /* Heading utama */
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #19345E;
        }

        /* Warna untuk teks highlight */
        .login-container h1 span {
            color: #D74627;
        }

        /* Gaya untuk input */
        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 20px 12px 35px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box; 
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #bbb;
        }

        /* Tombol login */
        .login-btn, .register-btn {
            display: inline-block;
            width: 100%; 
            padding-top: 10px;
            padding-bottom: 10px;
            border: 2px solid #19345E;
            border-radius: 4px;
            background-color: #ffffff;
            color: #19345E;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 10px;
        }

        .login-btn:hover, .register-btn:hover {
            background-color: #19345E;
            color: #ffffff;
        }

        .error-message {
            color: #D74627;
            font-size: 12px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h1>CENTRO<span>ATK</span></h1>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Alamat Email" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            @if ($errors->has('loginError'))
                <div class="error-message">{{ $errors->first('loginError') }}</div>
            @endif
            <button type="submit"  class="login-btn">Masuk</button>
            <a href="/register" class="login-btn">
                Buat Akun
            </a>
        </form>
    </div>
</body>
</html>
