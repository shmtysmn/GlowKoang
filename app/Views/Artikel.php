<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <meta name="title" content="GlowKoang - Artikel">
    <meta name="description"
        content="Baca artikel menarik seputar kecantikan, perawatan kulit, dan manfaat bengkoang di GlowKoang. Temukan tips dan trik untuk merawat kulit Anda, ulasan produk, dan informasi terbaru tentang dunia kecantikan. Dapatkan wawasan yang berguna untuk meningkatkan rutin kecantikan Anda!">

    <!-- Canonical Tag -->
    <link rel="canonical" href="<?= current_url() ?>">
    <style>
        /* Resetting some default styles */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Petrona', sans-serif;
            padding-top: 60px;
            /* Adjusted to avoid content hiding behind the navbar */
        }

        /* Navbar styling */
        .navbar {
            width: 100%;
            height: 60px;
            position: absolute;
            /* Navbar tetap berada di atas */
            top: 0;
            left: 0;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-right: 20px;
        }

        /* Navbar link styling */
        .navbar a {
            margin-left: 20px;
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            color: black;
            text-decoration: none;
        }

        .navbar a:hover {
            color: #FF7B00;
        }

        /* Dropdown button styling */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        .dropdown button {
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            color: black;
            background-color: white;
            border: none;
            cursor: pointer;
        }

        /* Dropdown content styling */
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            /* Geser dropdown ke kiri dari sisi kanan */
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            min-width: 120px;
            /* Atur lebar minimum dropdown supaya tidak mepet */
            padding: 12px 0;
            /* Tambahkan padding pada konten dropdown */
        }

        .dropdown-content a {
            padding: 12px 16px;
            display: block;
            font-family: 'Poppins', sans-serif;
            color: black;
            text-decoration: none;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show dropdown on button click */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        .hamburger {
            display: none;
            /* Sembunyikan hamburger di desktop */
            cursor: pointer;
            font-size: 24px;
            margin-left: auto;
            /* Pindahkan hamburger ke kanan */
        }

        .nav-links {
            display: flex;
            /* Menampilkan menu dalam baris */
        }

        .nav-links a {
            margin-left: 20px;
            /* Jarak antar link */
        }

        /* Media query untuk tampilan mobile */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
                /* Tampilkan hamburger di mobile */
            }

            .nav-links {
                display: none;
                /* Sembunyikan menu di mobile secara default */
                flex-direction: column;
                /* Tampilkan menu dalam kolom */
                position: absolute;
                /* Posisi menu relatif terhadap navbar */
                top: 60px;
                /* Sesuaikan dengan tinggi navbar */
                left: 0;
                background-color: white;
                /* Warna latar belakang menu */
                width: 100%;
                /* Lebar menu */
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                /* Bayangan untuk menu */
            }

            .nav-links.active {
                display: flex;
                /* Tampilkan menu saat aktif */
            }

            .nav-links a {
                margin: 10px 0;
                /* Jarak antar link di menu mobile */
                padding: 10px;
                /* Padding untuk link */
            }
        }


        /*halaman beranda */
        .hero-section {
            position: relative;
            width: 100%;
            height: 826px;
            background-image: url('uploads/bg.png');
            background-size: cover;
            background-position: center;
        }

        /* Logo styles */
        .logo {
            position: absolute;
            top: 15px;
            left: 5%;
            display: flex;
            align-items: center;
        }

        /* Responsive logo size */
        .logo img {
            width: 40px;
            height: 30px;
        }

        /* Text center styles */
        .text-center {
            text-align: center;
            color: black;
            font-size: 1.2rem;
            line-height: 1.5;
            margin: 20px 0;
        }

        /* Footer Styles */
        .footer {
            width: 100%;
            height: 105px;
            position: absolute;
            left: 0;
            top: 1020px;
            background: rgba(222, 202, 182, 0.90);
            border-top: 1px solid rgba(255, 255, 255, 0.17);
        }

        .copyright-text {
            width: 443.35px;
            height: 19.50px;
            position: absolute;
            left: 320px;
            top: 39.25px;
            color: #FDFCE8;
            font-size: 13px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            line-height: 19.50px;
            word-wrap: break-word;
        }

        .social-icons {
            position: absolute;
            top: 33px;
            left: 1218px;
            display: flex;
            gap: 10px;
        }

        .link {
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .link img {
            width: 100%;
            height: 100%;
            border-radius: 16px;
        }

        /* Artikel GlowKoang */
        .artikel-glowkoang {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 35px;
            font-family: 'Poppins', sans-serif;
        }

        .artikel-glowkoang span:first-child {
            color: white;
        }

        .artikel-glowkoang span:last-child {
            color: #FF7B00;
        }

        /* akhir */
        .articles {
            position: relative;
        }

        .article {
            width: 272px;
            height: 425px;
            position: absolute;
        }

        .article:nth-child(1) {
            left: 80px;
            top: 500px;
        }

        .article:nth-child(2) {
            left: 1150px;
            top: 500px;
        }

        .article:nth-child(3) {
            width: 800px;
            left: 450px;
            top: 500px;
        }

        .article:nth-child(4) {
            left: 800px;
            top: 500px;
        }

        .image-frame {
            width: 272px;
            height: 425px;
            position: absolute;
            background: #EDB27A;
            border-radius: 10px;
        }

        .image {
            width: 228px;
            height: 290px;
            position: absolute;
            border-radius: 15px;
            left: 22px;
            top: 18px;
        }

        .text-link .text {
            width: 243px;
            position: absolute;
            text-align: center;
            color: black;
            font-size: 20px;
            font-family: Poppins;
            font-weight: 400;
            line-height: 30px;
            word-wrap: break-word;
            left: 10px;
            top: 320px;
        }
    </style>
</head>

<body>
    <img class="Image4" style="width: 100%; height: 209.35px; left: -0px; top: 60px; position: absolute"
        src="uploads/y.png" />
    <div class="Rectangle51"
        style="width: 100%; height: 209px; left: -0px; top: 60px; position: absolute; background: rgba(0, 0, 0, 0.40)">
    </div>
    </div>

    <!-- Navbar Section -->
    <div class="navbar">
        <!-- Logo Section -->
        <div class="logo">
            <img src="uploads/logo.png" alt="Logo">
            <span>GlowKoang</span>
        </div>

        <!-- Hamburger Menu -->
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            &#9776; <!-- Simbol hamburger -->
        </div>
    </div>

    <!-- Navigation Links -->
    <div id="nav-links" class="nav-links">
        <a href="/" id="home">Beranda</a>
        <a href="/tentang" id="about">Tentang</a>
        <a href="/artikel" id="artikel">Artikel</a>
        <a href="/produk" id="produks">Produk</a>
        <a href="/aktivitas" id="aktivitas">Aktivitas</a>
        <a href="/kontak" id="contact">Kontak</a>

        <!-- Dropdown Bahasa -->
        <div class="dropdown">
            <button class="dropbtn">Bahasa ▼</button>
            <div class="dropdown-content">
                <a href="id">Indonesia</a>
                <a href="en">English</a>
            </div>
        </div>
    </div>
    </div>

    <div class="Rectangle20"
        style="width: 270px; height: 97px; left: 130px; top: 320px; position: absolute; background: white; border-radius: 10px; border: 8px #DDB79B solid">
    </div>
    <div class="ArtikelTerbaru"
        style="left: 150px; top: 342px; position: absolute; color: black; font-size: 35px; font-family: Inter; font-weight: 700; line-height: 57.60px; word-wrap: break-word">
        Artikel Terbaru</div>

    <!-- Artikel GlowKoang -->
    <div class="artikel-glowkoang">
        <span>Artikel &nbsp;</span><span>GlowKoang</span>
    </div>

    <div class="articles">
        <?php foreach ($artikels as $artikel): ?>
            <div class="article">
                <div class="image-frame"></div>
                <img class="image" src="uploads/<?= esc($artikel['foto_artikel']) ?>" />
                <a href="<?= base_url('/artikel' . esc($artikel['id_artikel'])) ?>" class="text-link">
                    <div class="text"><?= esc($artikel['judul_artikel']) ?></div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>



    <!-- Footer -->
    <div class="footer">
        <div class="copyright-text">
            Copyright © 2024 GlowKoang, Design by GlowKoang
        </div>

        <!-- Social Media Icons -->
        <div class="social-icons">
            <div class="link">
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="uploads/link.png" alt="Icon 1">
                </a>
            </div>
            <div class="link">
                <a href="https://twitter.com/" target="_blank">
                    <img src="uploads/twitter.png" alt="Icon 2">
                </a>
            </div>
            <div class="link">
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="uploads/instagram.png" alt="Icon 3">
                </a>
            </div>
            <div class="link">
                <a href="https://www.youtube.com/" target="_blank">
                    <img src="uploads/youtube.png" alt="Icon 4">
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.toggle("active");
        }
    </script>
</body>

</html>