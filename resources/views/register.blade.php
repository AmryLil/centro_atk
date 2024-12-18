<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            background-color: #19345E;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            padding: 40px;
            text-align: center;
        }
        .container h2 {
            margin: 0 0 20px;
            font-size: 24px;
            font-weight: bold;
            color: #19345E;
        }
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        .input-group input {
            width: 85%;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .input-group i {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            color: #bbb;
        }
        button {
            display: inline-block;
            width: 100%;
            padding: 12px;
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
        button:hover {
            background-color: #19345E;
            color: #ffffff;
        }
        .back-to-shop {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #000;
        }
        .messasge {
            margin-top: 10px;
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Akun</h2>
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                @error('name')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                @error('password')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
            </div>
            <button type="submit">Buat Akun</button>
        </form>
        <a class="back-to-shop" href="{{ route('login.show') }}">Kembali</a>   
    </div>
</body>
</html>
