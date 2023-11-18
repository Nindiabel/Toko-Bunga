<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Flower Shop</title>
</head>
<body>
    <h1>Dashboard Admin</h1>
    <nav>
        <ul>
            <li><a href="{{ route('admin.products') }}">Pengelolaan Produk</a></li>
            <li><a href="{{ route('admin.orders') }}">Pengelolaan Pesanan</a></li>
            <li><a href="{{ route('admin.customers') }}">Pengelolaan Pelanggan</a></li>
        </ul>
    </nav>
    <section>
        <h2>Pengelolaan Produk</h2>
        <form method="post" action="{{ route('admin.products.store') }}">
            @csrf
            <label for="nama">Nama Produk:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="deskripsi">Deskripsi:</label><br>
            <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" required><br><br>
            <button type="submit">Tambah Produk</button>
        </form>
        <h3>Daftar Produk</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>
</body>
</html>
