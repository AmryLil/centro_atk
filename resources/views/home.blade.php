<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

        .hero {
            position: relative;
            background-image: url('images/home.jpeg');
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero-content {
            z-index: 2;
        }
        .hero h1 {
            font-size: 60px;
            margin: 0;
        }
        .hero p {
            font-size: 20px;
        }

        .container {
            text-align: center;
            padding: 50px;
        }
        .header {
            background-color: #19345E;
            color: #19345E;
            padding: 10px;
            font-size: 24px;
            border-radius: 5px;
            display: inline-block;
        }
        .sub-header {
            margin-top: 20px;
            font-size: 18px;
            color: #777;
        }
        .card-wrapper {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            gap: 20px;
        }
        .card {
            background-color: white;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        
        .card img {
            width: 50px;
            height: 50px;
        }
        .card h3 {
            margin-top: 15px;
            color: #333;
            font-size: 20px;
        }
        .card p {
            color: black;
            font-size: 16px;
        }

        /* Lapangan Section */
        .lapangan-container {
            display: flex;
            justify-content: space-around;
            margin: 50px 0;
        }
        .lapangan-card {
            width: 45%;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .lapangan-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .lapangan-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }
        .lapangan-card:hover img {
            transform: scale(1.1);
        }

        /* Footer Section */
        footer {
            background-color: #19345E;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin-bottom: 10px;
        }
        footer a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 14px;
        }
        footer a:hover {
            text-decoration: underline;
        }
        html {
            scroll-behavior: smooth;
        }
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 10px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .hero p {
                font-size: 16px;
            }

            .lapangan-container {
                flex-direction: column;
            }

            .lapangan-card {
                width: 100%;
                margin-bottom: 20px;
            }

            .card-wrapper {
                flex-direction: column;
            
            }

            footer a {
                display: block;
                margin-bottom: 10px;
            }
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

<section class="hero">
    <div class="hero-content">
        <h1>CENTRO ATK</h1>
        <p></p>
    </div>
</section>

<section class="alat tulis">
    <div class="container">
        <h2>Menyediakan Alat Tulis </h2>
        <p>Solusi Kebutuhan Kantor, Lengkap dan Terjangkau! </p>
        <div class="lapangan-container">
            <div class="lap angan-card">
                <a href="lapanganrumput.php">
                    <img src="image/2.jpeg" alt="2">
                    <p><strong>Kumpulan Alat Tulis</strong></p>
                </a>
            </div>
            
            <section class="alat tulis">
            <div class="tinta print">
                    <img src="images/33.jpeg" alt="3">
                    <p><strong>Kumpulan Tinta Print</strong></p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="fasilitas" style="width: 100%;">
    <div class="card-wrapper">
        <div class="card">
            <h3>Alamat Kami</h3>
            <h4><p1>Centro ATK</h4>
            <p2> Blok C No. 7,</p2>
            <P3> Jl. Trans Sulawesi,
Lasusua, Sulawesi Tenggara 90234</P3>
<p4>Telp: 0821-2345-6789</p4></p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 CENTRO ATK</p>
</footer>  

</body>
</html>
