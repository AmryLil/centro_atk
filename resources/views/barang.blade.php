<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 50px;
            background-color: #19345E;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        nav .logo span {
            color: #D74627;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            position: relative;
            padding-bottom: 5px;
        }
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            left: 0;
            bottom: 0;
            background-color: #D74627;
            transition: width 0.3s ease-in-out;
        }
        nav ul li a:hover::after {
            width: 100%;
        }


        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 200px;
            transition: all 0.3s ease;
        }

        .product-item img {
            width: 100%;
            height: 150px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .product-title {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            color: #19345E;
        }

        .product-price {
            color: #D74627;
            font-size: 16px;
            margin: 5px 0;
        }

        .product-stock {
            color: #777;
            font-size: 14px;
        }

        .product-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .tambah-keranjang-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #19345E;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .tambah-keranjang-btn:hover {
            background-color: #D74627;
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">CENTRO<span>ATK</span></div>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('barang') }}">Barang</a></li>
        <li><a href="{{ route('keranjang') }}">Keranjang</a></li>
    </ul>
</nav>

<div class="container">
    <div class="product-list">
        <div class="product-item">
            <img src="images/kertas-sidu-a4..jpeg" alt="Kertas Sidu">
            <p class="product-title">Kertas Sidu A4</p>
            <p class="product-price">Rp 60.000</p>
            <p class="product-stock">Stok: 30 Pcs</p>
            <a href="#" class="tambah-keranjang-btn">Tambah Keranjang</a>
        </div>
        <div class="product-item">
            <img src="images/gunting.jpg" alt="Gunting">
            <p class="product-title">Gunting</p>
            <p class="product-price">Rp 10.000</p>
            <p class="product-stock">Stok: 30 Pcs</p>
            <a href="#" class="tambah-keranjang-btn">Tambah Keranjang</a>
        </div>
        <div class="product-item">
            <img src="images/tipx.jpg" alt="Tip-X">
            <p class="product-title">Tip-X</p>
            <p class="product-price">Rp 7.000</p>
            <p class="product-stock">Stok: 30 Pcs</p>
            <a href="#" class="tambah-keranjang-btn">Tambah Keranjang</a>
        </div>
        <div class="product-item">
            <img src="images/penghapus.jpg" alt="Penghapus">
            <p class="product-title">Penghapus</p>
            <p class="product-price">Rp 6.000</p>
            <p class="product-stock">Stok: 30 Pcs</p>
            <a href="#" class="tambah-keranjang-btn">Tambah Keranjang</a>
        </div>
        <div class="product-item">
            <img src="images/pulpen.jpeg" alt="Pulpen">
            <p class="product-title">Pulpen</p>
            <p class="product-price">Rp 5.000</p>
            <p class="product-stock">Stok: 30 Pcs</p>
            <a href="#" class="tambah-keranjang-btn">Tambah Keranjang</a>
        </div>
    </div>
</div>

</body>
</html>
