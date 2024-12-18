<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        /* Reset dan Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            width: 400px;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: left;
            color: #000;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .btn {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }

        .btn-simpan {
            background-color: #19345E;
            flex: 1;
        }

        .btn-kembali {
            background-color: #19345E;
            flex: 1;
        }

        .btn-simpan:hover {
            background-color: #B13320;
        }

        .btn-kembali:hover {
            background-color: #B13320;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Barang</h1>
        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nama Barang -->
            <div class="form-group">
                <label for="nama">Nama Barang:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama barang">
            </div>

            <!-- Harga -->
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" placeholder="Masukkan harga barang">
            </div>

            <!-- Stok -->
            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" placeholder="Masukkan jumlah stok">
            </div>

            <!-- Gambar -->
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar">
            </div>

            <!-- Tombol Simpan dan Kembali -->
            <div class="btn-group">
                <button type="submit" class="btn btn-simpan">Simpan</button>
                <button type="button" class="btn btn-kembali"
                    onclick="window.location.href='{{ route('barang.index') }}';">Kembali</button>
            </div>
        </form>
    </div>
</body>

</html>
