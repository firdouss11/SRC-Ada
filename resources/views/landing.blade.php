<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo Jadi Lebih Baik Bersama SRC</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="home" class="section">
        <!-- Navbar -->
        <nav>
            <a href="#" class="logo">SRC ADA</a>
            <ul>
                <li class="nav-item">
                    <a class="nav-link activate" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link activate" href="#tentang">Tentang</a> <!-- Tautan ke bagian Tentang -->
                </li>
                {{-- <li><a href="#blog">Blog</a></li> --}}
                <li><a class="nav-link" href="/admin">Login</a>
                </li>
            </ul>
        </nav>

        <!-- Header -->
        <div style="margin-top: 56px">

            <img src="{{ asset('image/banner.jpg') }}" style="width: 100%" class="mobile-image" alt="" srcset="">
            <header class="full-header" style="background-image: url({{ asset('image/banner.jpg') }}); background-size: cover">
                {{-- <link href="css/hederlan.css" rel="stylesheet" type="text/css"> --}}
                {{-- <h1>Ayo <span>#JadiLebihBaik</span> Bersama SRC</h1> --}}
                <!-- Banner -->


            </header>
        </div>


    </section>


    <!-- Main Content -->
    <main>
        <!-- Bagian Tentang -->
        <section class="content" id="tentang">
            <div class="image-container">
                <img src="image/images.jpeg" alt="Toko SRC">
            </div>
            <div class="text-container">
                <h2>Perjalanan Kami Sebagai <span>SRC Indonesia</span></h2>
                <p>
                    Berawal dari 28 toko kelontong sederhana di kota Cilacap pada tahun 2008, dengan semangat untuk
                    terus berkembang menjadi lebih baik, kami terus berusaha dan bertransformasi untuk menjadi solusi
                    untuk semua, bagi mitra grosir, pemilik toko kelontong, dan pelanggan di Indonesia.
                </p>
                <p>
                    Melalui semangat kebersamaan, kini kami dapat menghadirkan ekosistem yang terkoneksi dengan lebih
                    dari 243.000 toko kelontong dan 6.300 Mitra SRC yang tersebar di seluruh wilayah Indonesia. Kami
                    tergabung dalam 8.200 Paguyuban SRC yang saling berbagi pengetahuan dan pengalaman untuk
                    meningkatkan daya saing toko kelontong dan berkontribusi memajukan UMKM demi Indonesia yang jadi
                    lebih baik.
                </p>
            </div>
        </section>
    </main>
    </section>

    <!-- Main Content -->
    <p>Selamat datang di toko SRC ADA, solusi belanja harian yang lebih baik untuk Anda, mitra, dan pelanggan!</p>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SRC. Semua Hak Dilindungi.</p>
    </footer>

</body>

</html>
