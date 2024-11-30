<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <meta name="title" content="GlowKoang - Produk">
    <meta name="description"
        content="Jelajahi rangkaian produk kecantikan GlowKoang yang terbuat dari bengkoang berkualitas tinggi. Temukan krim wajah, serum, dan produk perawatan kulit lainnya yang membantu menjaga kesehatan dan kecantikan kulit Anda secara alami. Dapatkan produk yang sesuai dengan kebutuhan kulit Anda dan rasakan manfaatnya!">

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

        .header {
            width: 1512px;
            height: 83px;
            background: white;
            display: flex;
            align-items: center;
            padding: 0 15px;
            box-sizing: border-box;
            justify-content: space-between;
            /* Space between logo and nav elements */
        }

        .header img {
            width: 100%;
            height: auto;
        }

        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0);
        }

        /* box */
        .group75 {
            width: 100%;
            max-width: 1239px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            position: relative;
            margin: 30px auto;
        }

        .group71 {
            width: 269px;
            height: auto;
            position: relative;
            margin: 10px;
        }

        .image {
            width: 269px;
            height: 366.36px;
            display: block;
            margin: 0 auto;
        }

        .rectangle16 {
            width: 269px;
            height: 131.05px;
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 25px;
        }

        .rectangle17 {
            width: 189.22px;
            height: 68.87px;
            margin: 10px auto;
            background: white;
            border-radius: 15px;
            border: 5px #F8EDE3 solid;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .citraBodyLotion {
            color: black;
            font-size: 15px;
            font-family: Inter;
            font-weight: 400;
            text-align: center;
        }


        /* Footer Styles */
        .footer {
            width: 100%;
            height: 105px;
            position: absolute;
            left: 0;
            top: 970px;
            background: rgba(222, 202, 182, 0.90);
            border-top: 1px solid rgba(255, 255, 255, 0.17);
        }

        .copyright-text {
            width: auto;
            height: auto;
            position: absolute;
            left: 50%;
            top: 39.25px;
            transform: translateX(-50%);
            color: #FDFCE8;
            font-size: 13px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            line-height: 19.50px;
            word-wrap: break-word;
        }

        /* Responsive social icons */
        .social-icons {
            position: absolute;
            top: 33px;
            left: 85%;
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

        /* Mobile Styling */
        @media (max-width: 768px) {
            .footer {
                padding: 20px;
                text-align: center;
                flex-direction: column;
                top: 1950px;
            }

            .social-icons {
                order: 1;
                margin-bottom: 10px;
                margin-left: -55%;
                margin-top: -5%;
            }

            .link {
                width: 32px;
                height: 32px;
            }

            .copyright-text {
                font-size: 10px;
                color: #FDFCE8;
                order: 2;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
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

        <!-- Navigation Links -->
        <div id="nav-links" class="nav-links">
            <a href="/" id="home">Beranda</a>
            <a href="/tentang" id="about">Tentang</a>
            <a href="/artikel" id="article">Artikel</a>
            <a href="/produk" id="produks">Produk</a>
            <a href="/aktivitas" id="activity">Aktivitas</a>
            <a href="/kontak" id="contact">Kontak</a>

            <!-- Dropdown Bahasa -->
            <div class="dropdown">
                <button class="dropbtn">Bahasa ▼</button>
                <div class="dropdown-content">
                    <a href="?lang=id">Indonesia</a>
                    <a href="?lang=en">English</a>
                </div>
            </div>
        </div>
    </div>

    <div class="Produk" style="width: 100%; height: auto; position: relative; background: white;">
        <div class="Group61" style="width: 100%; height: 300px; position: relative;">
            <img class="Image4" style="width: 100%; height: 258px; position: absolute; top: -10px;"
                alt="gambar background" src="uploads/Group 117.png" />
            <div class="Rectangle51"
                style="width: 100%; height: 258px; position: absolute; top: -10px; background: rgba(0, 0, 0, 0.40);">
            </div>
        </div>

        <div class="ProdukGlowkoang"
            style="display: flex; justify-content: center; align-items: center; position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%); font-size: 35px; font-family: Poppins;">
            <span style="color: white;">Produk &nbsp;</span><span style="color: #FF7B00;">GlowKoang</span>
        </div>

        <div class="group75">
            <?php foreach ($produks as $produk): ?>
                <div class="group71">
                    <img class="image" alt="<?= $produk['nama_produk'] ?>"
                        src="<?= base_url('uploads/' . $produk['foto_produk']) ?>" />
                    <div class="rectangle16">
                    <a href="<?= base_url('/produk' . esc($produk['id_produk'])) ?>" class="rectangle17">
                            <div class="citraBodyLotion">
                                <?= $produk['nama_produk'] ?>
                            </div>
                        </a>
                    </div>
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