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

        /* Masukkan CSS Anda di sini */
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

        .rectangle20 {
            width: 215px;
            height: 75px;
            position: absolute;
            left: 130px;
            top: 320px;
            background: white;
            border-radius: 10px;
            border: 5px solid #DDB79B;
        }

        .artikel-terbaru {
            position: absolute;
            left: 150px;
            top: 330px;
            color: black;
            font-size: 25px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 57.6px;
            word-wrap: break-word;
        }

        /* bagian artikel */
        .articles {
            display: flex;
            gap: 50px;
            /* Jarak antar kartu */
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
            margin-top: 25%;
        }

        .article {
            width: 272px;
            height: 425px;
            background: #EDB27A;
            border-radius: 10px;
            padding: 15px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .image {
            width: 100%;
            height: 290px;
            border-radius: 15px;
            object-fit: cover;
        }

        .text-link a {
            text-decoration: none;
            /* Pastikan ini menghapus garis bawah pada elemen link */
        }

        .text-link {
            color: black;
            font-size: 20px;
            font-family: Poppins, sans-serif;
            font-weight: 400;
            line-height: 30px;
            margin-top: 15px;
            word-wrap: break-word;
            text-decoration: none !important;
        }



        /* Responsive Mobile */
        @media (max-width: 768px) {

            /* Artikel Glowkoang */
            .artikel-glowkoang {
                font-size: 18px;
                top: 20%;
            }

            @media (max-width: 480px) {
                .artikel-glowkoang {
                    font-size: 23px;
                    top: 22%;
                }
            }

            /* Rectangle20 */
            .rectangle20 {
                width: 150px;
                height: 60px;
                left: 20%;
                top: 280px;
                transform: translateX(-50%);
            }

            /* Artikel Terbaru */
            .artikel-terbaru {
                left: 20%;
                top: 290px;
                font-size: 17px;
                line-height: 45px;
                transform: translateX(-50%);
            }

            /* Articles */
            .articles {
                gap: 20px;
                margin-top: 75%;
                padding: 0 10px;
            }

            /* Article */
            .article {
                width: 100%;
                height: auto;
                padding: 10px;
            }

            /* Image */
            .image {
                height: 200px;
            }

            /* Text Link */
            .text-link .text {
                font-size: 16px;
                line-height: 24px;
                margin-top: 10px;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                flex-direction: column;
                top: 1700px;
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
    <img class="Image4" style="width: 100%; height: 209.35px; left: -0px; top: 60px; position: absolute"
        src="uploads/y.png" />
    <div class="Rectangle51"
        style="width: 100%; height: 209px; left: -0px; top: 60px; position: absolute; background: rgba(0, 0, 0, 0.40)">
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

    <div class="rectangle20"></div>
    <div class="artikel-terbaru">Artikel Terbaru</div>

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
                    <div class="text-link a"><?= esc($artikel['judul_artikel']) ?></div>
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