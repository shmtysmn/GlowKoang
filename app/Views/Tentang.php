<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <meta name="title" content="GlowKoang - Tentang">
    <meta name="description"
        content="Pelajari lebih lanjut tentang GlowKoang, brand kecantikan yang mengutamakan bahan alami dari bengkoang. Kami berkomitmen untuk memberikan produk perawatan kulit yang berkualitas tinggi, aman, dan efektif untuk membantu Anda mendapatkan kulit yang sehat dan bercahaya. Temukan perjalanan kami dan visi di balik setiap produk yang kami tawarkan.">

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

        /* Group and Image styles */
        .Group65 {
            width: 100%;
            height: 249px;
            position: absolute;
            top: 57px;
            left: 0px;
        }

        .Image4 {
            width: 100%;
            height: 270px;
            position: absolute;
            top: -80px;
            left: 0px;
        }

        .Rectangle58 {
            width: 100%;
            height: 269px;
            position: absolute;
            top: -80px;
            left: 0px;
            background: rgba(0, 0, 0, 0.40);
        }

        .TentangGlowkoang {
            position: absolute;
            top: 100px;
            left: 40%;
            font-family: Poppins;
            font-weight: 400;
            word-wrap: break-word;
        }

        .TentangGlowkoang .text-white {
            color: white;
            font-size: 35px;
            /* Sesuaikan ukuran font */
            line-height: 40px;
        }

        .TentangGlowkoang .highlighted {
            color: #FF7B00;
            font-size: 35px;
            /* Sesuaikan ukuran font */
            line-height: 40px;
        }

        @media (max-width: 768px) {
            .Group65 {
                height: 200px;
                /* Mengurangi tinggi untuk tampilan mobile */
                top: 40px;
                /* Menyesuaikan posisi vertikal */
            }

            .Image4 {
                height: 250px;
                /* Mengurangi tinggi untuk tampilan mobile */
                top: -40px;
                /* Menyesuaikan posisi vertikal */
            }

            .Rectangle58 {
                height: 250px;
                /* Mengurangi tinggi untuk tampilan mobile */
                top: -40px;
                /* Menyesuaikan posisi vertikal */
            }

            .TentangGlowkoang {
                top: 70px;
                /* Menyesuaikan posisi vertikal untuk tampilan mobile */
                left: 20%;
                /* Mengatur posisi horizontal agar lebih responsif */
                font-size: 100px;
                /* Mengurangi ukuran font untuk tampilan mobile */
                text-align: center;
                /* Menyesuaikan teks agar lebih rapi di tengah */
            }

            .TentangGlowkoang .text-white,
            .TentangGlowkoang .highlighted {
                font-size: 25px;
                /* Mengurangi ukuran font untuk teks di tampilan mobile */
                line-height: 30px;
                /* Mengurangi line-height untuk teks di tampilan mobile */
            }
        }



        /* Group and Image styles */
        .Group107 {
            width: 100%;
            height: 500px;
            position: absolute;
            top: 301px;
            left: -3px;
        }

        .Vector {
            width: 100%;
            height: 80px;
            position: absolute;
            top: -55px;
            left: 3px;
            background: #B6A99B;
        }

        @media (max-width: 768px) {
            .Group107 {
                height: 300px;
                /* Mengurangi tinggi untuk tampilan mobile */
                top: 300px;
                /* Menyesuaikan posisi vertikal */
                left: 0;
                /* Mengatur ulang posisi horizontal */
            }

            .Vector {
                height: 60px;
                /* Mengurangi tinggi untuk tampilan mobile */
                top: -55px;
                /* Menyesuaikan posisi vertikal */
                left: 0;
                /* Mengatur ulang posisi horizontal */
            }
        }


        .Group62 {
            height: 291.77px;
            position: absolute;
            top: 267px;
            left: 59px;
        }

        .gambar1 {
            width: 308.94px;
            height: 170.08px;
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 15px;
        }

        .gambar2 {
            width: 261.32px;
            height: 190.82px;
            position: absolute;
            top: 100.94px;
            left: 144.68px;
            border-radius: 15px;
        }

        /* Mobile Styling */
        @media (max-width: 768px) {
            .Group62 {
                height: auto;
                /* Sesuaikan tinggi */
                width: 100%;
                /* Sesuaikan lebar agar mengikuti lebar layar */
            }

            .gambar1 {
                width: 50%;
                /* Sesuaikan lebar gambar pada mobile */
                height: auto;
                /* Tinggi otomatis mengikuti rasio */
                margin-top: -40%;
                margin-left: -10%;
                border-radius: 10px;
                /* Sesuaikan radius border */
            }

            .gambar2 {
                width: 45%;
                /* Sesuaikan lebar gambar pada mobile */
                height: auto;
                /* Tinggi otomatis mengikuti rasio */
                margin-top: -50%;
                margin-left: -5%;
                border-radius: 10px;
                /* Sesuaikan radius border */
            }
        }



        /* Deskripsi styles */
        .deskripsi {
            width: 832px;
            height: auto;
            position: absolute;
            top: 550px;
            left: 533px;
            text-align: justify;
            color: black;
            font-family: Petrona;
            font-size: 20px;
            font-weight: 300;
            line-height: 50px;
            word-wrap: break-word;
        }

        @media (max-width: 768px) {
            .deskripsi {
                width: 90%;
                /* Full width on mobile */
                font-size: 16px;
                /* Smaller font size for mobile */
                line-height: 30px;
                /* Adjust line height */
                top: 630px;
                /* Adjust position */
                left: 5%;
                /* Center align */
            }
        }

        .Line11 {
            width: 146px;
            height: 0px;
            position: absolute;
            top: 475px;
            left: 905px;
            border: 3px solid black;
        }

        @media (max-width: 768px) {
            .Line11 {
                top: 398px;
                /* Adjust position */
                left: 28%;
                /* Center align */
            }
        }

        /* Tentang Kami styles */
        .TentangKami {
            width: auto;
            height: auto;
            position: absolute;
            top: 420px;
            left: 890px;
            color: black;
            font-family: Inika;
            font-size: 30px !important;
            font-weight: 400;
            line-height: 57.6px;
            word-wrap: break-word;
        }

        @media (max-width: 768px) {
            .TentangKami {
                font-size: 20px;
                /* Smaller font size for mobile */
                top: 350px;
                /* Adjust position */
                left: 25%;
                /* Center align */
            }
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


        /* Responsive Typography */
        .TentangGlowkoang span,
        .TentangKami {
            font-size: 5vw;
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
            <a href="/">Beranda</a>
            <a href="/tentang">Tentang</a>
            <a href="/artikel">Artikel</a>
            <a href="/produk">Produk</a>
            <a href="/aktivitas">Aktivitas</a>
            <a href="/kontak">Kontak</a>

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

    <div class="Group65">
        <img class="Image4" alt="gambar background" src="uploads/y.png" />
        <div class="Rectangle58"></div>
    </div>
    <div class="TentangGlowkoang">
        <span class="text-white">Tentang </span>
        <span class="highlighted">GlowKoang</span>
    </div>
    <div class="Group107">
        <div class="Vector"></div>
        <div class="Group62">
            <img class="gambar1" alt="desk_produk1" src="uploads/gambardes1.png" />
            <img class="gambar2" alt="desk_produk2" src="uploads/gambardes2.png" />
        </div>
    </div>

    <div class="Line11"></div>

    <div class="TentangKami">
        Tentang Kami
    </div>

    <div class="deskripsi">
        Glowkoang adalah brand kecantikan yang menghadirkan rangkaian produk perawatan kulit dan tubuh dengan bahan
        alami bengkoang. Terinspirasi dari khasiat bengkoang dalam mencerahkan kulit, Glowkoang menawarkan solusi
        skincare yang membantu merawat kulit agar tetap lembut, cerah, dan sehat. Dengan kandungan alami dan ramah
        kulit, produk Glowkoang dirancang khusus untuk wanita yang mendambakan kulit bersinar alami dan perawatan yang
        menyegarkan.
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