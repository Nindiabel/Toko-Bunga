<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru - Admin</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf

        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
