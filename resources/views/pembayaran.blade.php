<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pengiriman dan Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto my-6">
    <div class="w-full max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Alamat Pembeli</h1>
        
 
        
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                    Nama Penerima
                </label>
                <input type="text" id="nama" name="nama" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">
                    Alamat Lengkap
                </label>
                <textarea id="alamat" name="alamat" class="w-full px-3 py-2 border rounded-lg" rows="3" required></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telepon">
                    Nomor Telepon
                </label>
                <input type="text" id="telepon" name="telepon" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            
            <h2 class="text-2xl font-bold mb-4 mt-8">Metode Pembayaran</h2>

            <!-- Pilihan Metode Pembayaran -->
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="radio" name="transfer_bank" value="transfer_bank" class="form-radio" >
                    <span class="ml-2">Transfer Bank</span>
                </label>
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="radio" name="cod" value="cod" class="form-radio" >
                    <span class="ml-2">Bayar di Tempat</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-semibold text-sm py-3 mt-8 rounded-lg">Konfirmasi Pembayaran</button>
       
    </div>
</div>
</body>
</html>
