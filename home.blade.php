<!DOCTYPE html>
<html>
<head>
    <title>Flower Shop - Home</title>
</head>
<body>
    <header>
        <h1>Selamat Datang di Toko Bunga Kami</h1>
        <p>Kami menyediakan berbagai macam bunga segar untuk segala kesempatan.</p>
        <a href="{{ route('products') }}">Lihat Katalog Bunga Kami</a>
    </header>

    <main>
        <section class="featured-products">
            <h2>Produk Unggulan</h2>
            <!-- Tampilkan beberapa produk unggulan di sini -->
            <div class="product">
                <h3>Nama Produk</h3>
                <img src="path-to-image.jpg" alt="Nama Produk">
                <p>Deskripsi singkat produk...</p>
                <p>Harga: $XX.XX</p>
                <a href="{{ route('products') }}">Lihat Detail</a>
            </div>
            <!-- Tambahkan produk lainnya jika diperlukan -->
        </section>

        <section class="about-us">
            <h2>Tentang Kami</h2>
            <p>Kami adalah toko bunga lokal yang berkomitmen untuk menyediakan bunga berkualitas tinggi kepada pelanggan kami.</p>
            <p>Kami juga menerima pesanan khusus untuk acara spesial Anda.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Flower Shop - Hak Cipta Dilindungi</p>
    </footer>
</body>
</html>
