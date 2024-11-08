<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas</title>
    <meta name="title" content="GlowKoang - Aktivitas">
    <meta name="description"
        content="Temukan berbagai aktivitas menarik dan acara yang diselenggarakan oleh GlowKoang. Ikuti kami untuk update terbaru mengenai promosi, workshop kecantikan, dan acara komunitas yang menginspirasi. Bergabunglah dengan kami untuk merayakan kecantikan alami dan berbagi pengalaman!">

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

        /* box */
        .Group103 {
            width: 1361px;
            height: 494px;
            left: 40px;
            top: 423px;
            position: absolute;
        }

        .bgaktivitas {
            width: 314px;
            height: 494px;
            background: #D8CBC4;
            border-radius: 30px;
            position: absolute;
        }

        .gambar_aktivitas {
            width: 236px;
            height: 300px;
            position: absolute;
            top: 30px;
            transform: translateX(15%);
        }

        .btnaktivitas {
            width: 150px;
            height: 50px;
            background: #E4D6CF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            position: absolute;
            top: 350px;
            transform: translateX(40%);
        }

        .Testimoni {
            left: 170px;
            top: 770px;
            position: absolute;
            text-align: justify;
            color: black;
            font-size: 25px;
            font-family: Petrona;
            font-weight: 300;
            line-height: 57.60px;
            word-wrap: break-word;
        }

        .Influencer {
            left: 850px;
            top: 770px;
            position: absolute;
            text-align: justify;
            color: black;
            font-size: 25px;
            font-family: Petrona;
            font-weight: 300;
            line-height: 57.60px;
            word-wrap: break-word;
        }

        .UjiKelayakanProduk {
            width: 311px;
            height: 49px;
            left: 460px;
            top: 785px;
            position: absolute;
            text-align: justify;
            color: black;
            font-size: 20px;
            font-family: Petrona;
            font-weight: 300;
            line-height: 30px;
            word-wrap: break-word;
        }

        .Promo {
            left: 1195px;
            top: 770px;
            position: absolute;
            text-align: justify;
            color: black;
            font-size: 25px;
            font-family: Petrona;
            font-weight: 300;
            line-height: 57.60px;
            word-wrap: break-word;
        }

        .btnaktivitas,
        .btntesti,
        .btninflue,
        .btnuji,
        .btnpromo {
            display: block;
            /* Mengubah link menjadi block agar dapat diklik */
            width: 150px;
            /* Sesuaikan jika diperlukan untuk btnuji */
            height: 50px;
            background: #E4D6CF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            position: absolute;
            top: 775px;
            /* Posisi sama untuk semua tombol */
            text-align: center;
            /* Agar teks di dalam tombol berada di tengah */
            line-height: 50px;
            /* Agar teks berada di tengah vertikal */
        }

        .btntesti {
            left: 163px;
            /* Posisi spesifik untuk btntesti */
        }

        .btninflue {
            width: 170px;
            /* Sesuaikan lebar untuk btninflue */
            left: 843px;
            /* Posisi spesifik untuk btninflue */
        }

        .btnuji {
            width: 262px;
            /* Sesuaikan lebar untuk btnuji */
            left: 450px;
            /* Posisi spesifik untuk btnuji */
        }

        .btnpromo {
            width: 115px;
            /* Sesuaikan lebar untuk btnpromo */
            left: 1185px;
            /* Posisi spesifik untuk btnpromo */
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

        /* Mobile Styling */
        @media (max-width: 768px) {
            .footer {
                padding: 20px;
                text-align: center;
                flex-direction: column;
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
            <a href="/artikel" id="artikel">Artikel</a>
            <a href="/produk" id="produks">Produk</a>
            <a href="/aktivitas" id="aktivitas">Aktivitas</a>
            <a href="/kontak" id="contact">Kontak</a>

            <!-- Dropdown Bahasa -->
            <div class="dropdown">
                <button class="dropbtn">Bahasa ▼</button>
                <div class="dropdown-content">
                    <a href="in">Indonesia</a>
                    <a href="en">English</a>
                </div>
            </div>
        </div>
    </div>

    <div class="Aktivitas" style="width: 100%; height: 1072px; position: relative; background: white">
        <div class="Group65" style="width: 100%; height: 231px; left: 0px; top: 87px; position: absolute">
            <img class="Image4" style="width: 100%; height: 258px; left: 0px; top: -90px; position: absolute"
                alt="gambar background" src="uploads/Group 117.png" />
            <div class="Rectangle58"
                style="width: 100%; height: 258px; left: 0px; top: -90px; position: absolute; background: rgba(0, 0, 0, 0.40)">
            </div>
        </div>
    </div>
    <div class="AktivitasGlowkoang"
        style="display: flex; justify-content: center; align-items: center; position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%); font-size: 35px; font-family: Poppins;">
        <span style="color: white;">Aktivitas &nbsp;</span><span style="color: #FF7B00;">GlowKoang</span>
    </div>



    <div class="Group103">
        <?php foreach ($aktivitas as $key => $akt): ?>
            <div class="bgaktivitas" style="left: <?= 40 + ($key * 340) ?>px;"></div>
            <img class="gambar_aktivitas" alt="gambar aktivitas" src="uploads/<?= $akt['foto_aktivitas'] ?>"
                style="left: <?= 49 + ($key * 340) ?>px;">
            <div class="nama_aktivitas" style="left: <?= 74 + ($key * 340) ?>px;">
            </div>
        <?php endforeach; ?>
    </div>
    <a href="aktivitas1" class="btntesti" style="text-decoration: none;"></a>
    <a href="aktivitas1" class="Testimoni" style="text-decoration: none;">TESTIMONI</a>

    <a href="aktivitas2" class="btnuji" style="text-decoration: none;"></a>
    <a href="aktivitas2" class="UjiKelayakanProduk" style="text-decoration: none;">UJI KELAYAKAN PRODUK</a>

    <a href="aktivitas3" class="btninflue" style="text-decoration: none;"></a>
    <a href="aktivitas3" class="Influencer" style="text-decoration: none;">INFLUENCER</a>


    <a href="aktivitas4" class="btnpromo" style="text-decoration: none;"></a>
    <a href="aktivitas4" class="Promo" style="text-decoration: none;">PROMO</a>






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