<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CentroATK - Barang</title>
    <style>
        /* Reset dan Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
        }

        /* Header Navigasi */
        nav {
            background-color: #19345E;
            padding: 10px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .logo span {
            color: #D74627;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
        }

        nav ul li a {
            color: white;
            font-weight: bold;
            font-size: 16px;
        }

        nav ul li a.active {
            color: #D74627;
        }

        /* Container Utama */
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .item:hover {
            background-color: #eef3f8;
        }

        .item-info {
            flex: 1;
        }

        .item-info h4 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .item-info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #666;
        }

        .item-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .btn-edit {
            background-color: #19345E;
        }

        .btn-hapus {
            background-color: #19345E;
        }

        .btn-edit:hover {
            background-color: #152947;
        }

        .btn-hapus:hover {
            background-color: #B13320;
        }

        .btn-tambah {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            background-color: #19345E;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
        }

        .btn-tambah:hover {
            background-color: #152947;
        }
    </style>
</head>

<body>
    <!-- Header Navigasi -->
    <nav>
        <div class="logo">CENTRO<span>ATK</span></div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a class="active" href="#">Barang</a></li>
            <li><a href="{{ route('riwayat') }}">Riwayat</a></li>
        </ul>
    </nav>

    <!-- Container Utama -->
    <div class="container">
        <!-- Pesan Flash -->
        @if (session('success'))
            <div style="color: green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Data Barang -->
        @if ($barang->isEmpty())
            <p style="text-align: center; color: #666;">Tidak ada barang yang tersedia.</p>
        @else
            @foreach ($barang as $barang)
                <div class="item">
                    <div class="item-info">
                        <h4>{{ $barang->nama }}</h4>
                        <p>Harga: Rp. {{ number_format($barang->harga, 0, ',', '.') }}</p>
                        <p>Stok: {{ $barang->stok }}</p>
                    </div>
                    <div class="item-actions">
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-hapus">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif

        <a href="{{ route('barang.create') }}" class="btn-tambah">Tambah Barang</a>
    </div>
</body>

</html>
