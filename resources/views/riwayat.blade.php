<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
        }
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

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #19345E;
            color: #fff;
            text-align: left;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f5f9;
        }

        .total-row {
            font-weight: bold;
            background-color: #e5e7eb;
        }

        .button {
            display: inline-flex;
            align-items: center;
            background-color: #10b981;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">CENTRO<span>ATK</span></div>
        <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('barangadmin') }}">Barang</a></li>
        <li><a href="{{ route('riwayat') }}">Riwayat</a></li>
        </ul>
    </nav>

    <!-- Tabel Transaksi -->
    <div class="content">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <table>
                <thead>
                    <tr>
                        <th>Pelanggan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Harga Total</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $totalKeseluruhan = 0; // Variabel untuk menyimpan total harga keseluruhan
                    if (!empty($items)) {
                        foreach ($items as $row): 
                            $totalKeseluruhan += $row['total_harga']; // Hitung total harga keseluruhan
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nama_pelanggan']) ?></td>
                        <td><?= htmlspecialchars($row['alamat']) ?></td>
                        <td><?= htmlspecialchars($row['telepon']) ?></td>
                        <td><?= htmlspecialchars($row['nama_barang']) ?></td>
                        <td><?= htmlspecialchars($row['jumlah_barang']) ?></td>
                        <td><?= htmlspecialchars(number_format($row['harga_satuan'], 0, ',', '.')) ?></td>
                        <td><?= htmlspecialchars(number_format($row['total_harga'], 0, ',', '.')) ?></td>
                        <td><?= htmlspecialchars($row['tanggal_transaksi']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr class="total-row">
                        <td colspan="6" class="text-right">Total Keseluruhan:</td>
                        <td><?= htmlspecialchars(number_format($totalKeseluruhan, 0, ',', '.')) ?></td>
                        <td></td>
                    </tr>
                    <?php 
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>Tidak ada data transaksi.</td></tr>";
                    } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
