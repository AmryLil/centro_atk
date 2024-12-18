<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
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
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }

        .cart-header h2 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .cart-items {
            margin-top: 20px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .cart-item img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-right: 10px;
        }

        .cart-item-details {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-item-name {
            font-size: 16px;
            font-weight: bold;
        }

        .cart-item-price {
            font-size: 14px;
            color: #666;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .cart-item-quantity button {
            background-color: #D3D3D3;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 14px;
            cursor: pointer;
        }


        .cart-summary {
            margin-top: 20px;
            text-align: right;
        }

        .cart-summary h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .checkout-btn {
            display: inline-block;
            background-color: #19345E;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
        }

        .checkout-btn:hover {
            background-color: #D74627;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">CENTRO<span>ATK</span></div>
        <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('barang') }}">Barang</a></li>
        <li><a href="{{ route('keranjang') }}">Keranjang</a></li>
        </ul>
    </nav>

    <!-- Container -->
    <div class="container">
        <div class="cart-header">
            <h2>Keranjang Belanja</h2>
            <p>3 Barang</p>
        </div>
        <div class="cart-items">
            <!-- Item 1 -->
            <div class="cart-item">
                <div class="cart-item-details">
                    <img src="images/kertas-sidu-a4..jpeg" alt="Kertas Sidu">
                    <div>
                        <p class="cart-item-name">Kertas Sidu A4s</p>
                        <p class="cart-item-price">Rp. 132.000</p>
                        <a href="#" style="color: red; font-size: 12px;">Hapus</a>
                    </div>
                </div>
                <div class="cart-item-quantity">
                    <button>-</button>
                    <span>2</span>
                    <button>+</button>
                </div>
                <p>Rp. 132.000</p>
            </div>

            <!-- Item 2 -->
            <div class="cart-item">
                <div class="cart-item-details">
                    <img src="images/tipx.jpg" alt="Tip X">
                    <div>
                        <p class="cart-item-name">Tip X</p>
                        <p class="cart-item-price">Rp. 5.000</p>
                        <a href="#" style="color: red; font-size: 12px;">Hapus</a>
                    </div>
                </div>
                <div class="cart-item-quantity">
                    <button>-</button>
                    <span>8</span>
                    <button>+</button>
                </div>
                <p>Rp. 40.000</p>
            </div>

            <!-- Item 3 -->
            <div class="cart-item">
                <div class="cart-item-details">
                    <img src="images/gunting.jpg" alt="Tinta Print">
                    <div>
                        <p class="cart-item-name">Gunting</p>
                        <p class="cart-item-price">Rp. 132.000</p>
                        <a href="#" style="color: red; font-size: 12px;">Hapus</a>
                    </div>
                </div>
                <div class="cart-item-quantity">
                    <button>-</button>
                    <span>2</span>
                    <button>+</button>
                </div>
                <p>Rp. 132.000</p>
            </div>
        </div>
        <div class="cart-summary">
            <h3>TOTAL BARANG: Rp. 900.000</h3>
            <a href="{{ route('pembayaran') }}"  class="checkout-btn">Selanjutnya</a>
        </div>
    </div>
</body>
</html>
