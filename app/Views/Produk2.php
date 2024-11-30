<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk2</title>
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

        .ProdukGlowkoang {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 35px;
            font-family: Poppins, sans-serif;
        }

        .text-white {
            color: white;
        }

        .text-orange {
            color: #FF7B00;
        }


        .Produk {
            width: 1442px;
            height: 1006px;
            position: relative;
        }

        .Rectangle79 {
            width: 1442px;
            height: 1006px;
            position: absolute;
            left: 0;
            top: 0;
            background: white;
        }

        .Ellipse2 {
            width: 367px;
            height: 452px;
            position: absolute;
            left: 80px;
            top: 349px;
            background: #D8CBC4;
            border-radius: 9999px;
        }

        .Group65 {
            width: 1440px;
            height: 245px;
            position: absolute;
            left: 2px;
            top: 50px;
        }

        .Image4 {
            width: 1530px;
            height: 258px;
            position: absolute;
            left: 0;
            top: -50px;
        }

        .Rectangle58 {
            width: 1530px;
            height: 258px;
            position: absolute;
            left: 0;
            top: -50px;
            background: rgba(0, 0, 0, 0.4);
        }

        /* Style untuk RemovebgPreview */
        .RemovebgPreview {
            width: 258px;
            height: 369px;
            left: 154px;
            top: 391px;
            position: absolute;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 25px;
        }

        /* Style untuk teks produk */
        .ovale {
            left: 542px;
            top: 376px;
            position: absolute;
            color: black;
            font-size: 45px;
            font-family: Poppins, sans-serif;
            font-weight: 400;
            line-height: 57.6px;
            word-wrap: break-word;
        }

        /* Style untuk deskripsi produk */
        .deskproduk {
            width: 806px;
            left: 551px;
            top: 480px;
            position: absolute;
            text-align: justify;
            color: black;
            font-size: 30px;
            font-family: Petrona, sans-serif;
            font-weight: 200;
            line-height: 57.6px;
            word-wrap: break-word;
        }

        /* Style untuk tombol kembali */
        .back-button {
            padding: 15px 30px;
            background-color: #EDB27A;
            border: none;
            border-radius: 30px;
            font-size: 20px;
            color: black;
            position: absolute;
            left: 1200px;
            top: 800px;
            cursor: pointer;
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

            /* Navbar */
            .hamburger {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: white;
                width: 100%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                margin: 10px 0;
                padding: 10px;
            }

            /* Produk */
            .Produk {
                width: 100%;
                height: 10%;
                position: relative;
            }

            .Ellipse2 {
                width: 180px;
                height: 220px;
                left: 85px;
                top: 240px;
            }

            .Group65 {
                width: 100%;
                height: auto;
                left: 0;
                top: 20px;
            }

            .Image4,
            .Rectangle58 {
                width: 100%;
                height: 165px;
                top: -30px;
            }

            .RemovebgPreview {
                width: 150px;
                height: 200px;
                left: 90px;
                top: 280px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
                border-radius: 15px;
            }

            .CitraBodyLotion {
                left: 22%;
                top: 180px;
                font-size: 25px;
                line-height: 35px;
            }

            .deskproduk {
                width: 78%;
                left: 5%;
                top: 508px;
                font-size: 20px;
                line-height: 35px;
            }

            .ProdukGlowkoang {
                top: 20%;
                left: 50%;
                font-size: 22px;
            }

            .back-button {
                left: 83%;
                top: 109%;
                transform: translate(-50%, -50%);
                font-size: 16px;
                padding: 10px 20px;
            }

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
                flex-direction: column;
                top: 900px;
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

    <body>
        <div class="Produk">
            <div class="Rectangle79"></div>
            <div class="Ellipse2"></div>
            <div class="Group65">
                <img class="Image4" alt="gambar background" src="uploads/y.png" />
                <div class="Rectangle58"></div>
            </div>
            <img class="RemovebgPreview" alt="gambar citra" src="uploads/ovale.png" />
            <div class="ovale">Ovale Bengkoang</div>
            <div class="deskproduk">
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia
            </div>
            <button onclick="history.back()" class="back-button">Kembali</button>

            <div class="ProdukGlowkoang">
                <span class="text-white">Produk &nbsp;</span><span class="text-orange">GlowKoang</span>
            </div>


        </div>
        </div>
        </div>
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