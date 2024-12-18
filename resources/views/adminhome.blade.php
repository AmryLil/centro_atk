<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }
    body {
      background-color: #f4f6f8;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    nav {
      background-color: #19345E;
      padding: 15px 20px;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }
    .logo {
      font-size: 24px;
      font-weight: bold;
    }
    .logo span {
      color: #D74627;
    }
    nav ul {
      display: flex;
      list-style: none;
    }
    nav ul li {
      margin-left: 20px;
    }
    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav ul li a:hover {
      color: #D74627;
    }
    .logout-btn {
      background-color: #D74627;
      color: #fff;
      padding: 8px 12px;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .logout-btn:hover {
      background-color: #b63d23;
    }

    /* Main Container */
    .container {
      margin-top: 100px; /* For navbar spacing */
      max-width: 600px;
      width: 100%;
      background-color: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin-bottom: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .name {
      font-size: 26px;
      font-weight: bold;
      color: #19345E;
      margin: 10px 0;
    }
    .email {
      color: #777;
      font-size: 14px;
      margin-bottom: 30px;
    }

    /* Admin Information Section */
    .admin-info {
      background-color: #19345E;
      color: #fff;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      font-size: 16px;
    }
    .admin-info p {
      margin: 5px 0;
      color: #ddd;
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">
      CENTRO<span>ATK</span>
    </div>
    <ul>
        <li><a href="{{ route('adminhome') }}">Home</a></li>
        <li><a href="{{ route('barangadmin') }}">Barang</a></li>
        <li><a href="{{ route('riwayat') }}">Riwayat</a></li>
    </ul>
  </nav>

  <!-- Main Container -->
  <div class="container">
    <img src="https://storage.googleapis.com/a1aa/image/C6P3csulyfzADqrPg2WkfQk3eD9umjxufLeK4txMAx7SMxRdC.jpg" alt="Profile picture" class="profile-pic">
    <p class="name">M. Habil Az-zikri</p>
    <p class="email">MHabil@gmail.com</p>

    <!-- Admin Information Section -->
    <div class="admin-info">
      <p><strong>Informasi Admin:</strong></p>
      <p>Nama Tim: Directi</p>
      <p>Jumlah Anggota: 8</p>
      <p>URL Undangan: directi.flock.com</p>
      <p>Plan: Pro</p>
    </div>
  </div>
</body>
</html>
