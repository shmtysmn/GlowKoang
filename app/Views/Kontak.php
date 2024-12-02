<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <meta name="title" content="GlowKoang - Kontak">
    <meta name="description"
        content="Hubungi GlowKoang untuk pertanyaan, saran, atau informasi lebih lanjut tentang produk kecantikan kami yang terbuat dari bengkoang. Kami siap membantu Anda dengan pelayanan terbaik. Temukan informasi kontak kami dan jangan ragu untuk menghubungi kami!">

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
        
        /* Artikel GlowKoang */
        .artikel-glowkoang {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 20%;
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


        .kontak {
            /* width: 100%; */
            /* height: 1024px; */
            position: relative;
            background: white;
        }

        .group-65 {
            width: 100%;
            height: 233px;
            position: absolute;
            top: 82px;
        }

        .image-4 {
            width: 100%;
            height: 169px;
            position: absolute;
            top: -81px;
        }

        .rectangle-58 {
            width: 100%;
            height: 170px;
            position: absolute;
            top: -82px;
            background: rgba(0, 0, 0, 0.40);
        }

        .kontak-glowkoang h2 {
            position: absolute;
            top: -18%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2rem;
            font-weight: bold;
            z-index: 2;
        }

        /* Content Wrapper */
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            max-width: 1200px;
            margin: 159px 8px;
            padding: 20px;
        }

        /* Left Content */
        .content-left {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-box h3 {
            margin-top: 0;
        }

        .contact-box p {
            margin: 10px 0;
            color: #666;
        }

        .contact-box button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-box button:hover {
            background-color: #45a049;
        }

        /* Google Maps Section */
        .maps-container {
            flex: 1;
            height: 300px;
            /* Disesuaikan agar tidak terlalu besar */
            border-radius: 10px;
            overflow: hidden;
        }

        .maps-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }


        /* Footer Styles */
        .footer {
            width: 100%;
            height: 105px;
            position: absolute;
            left: 0;
            top: 723px;
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

            .content-wrapper {
                flex-direction: column;
            }

            .content-left {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .maps-container {
                margin-left: 0;
                height: 300px;
            }

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
            <a href="/">Beranda</a>
            <a href="/tentang">Tentang</a>
            <a href="/artikel">Artikel</a>
            <a href="/produk">Produk</a>
            <a href="/aktivitas">Aktivitas</a>
            <a href="/kontak">Kontak</a>
        </div>
    </div>

    <!-- Kontak Section -->
    <div class="kontak">
        <!-- Background Section -->
        <div class="group-65">
            <img class="image-4" alt="Background Kontak GlowKoang" src="uploads/y.png" />
            <div class="rectangle-58"></div>
        </div>
    </div>
     <!-- Artikel GlowKoang -->
     <div class="artikel-glowkoang">
        <span>Artikel &nbsp;</span><span>GlowKoang</span>
    </div>

    <!-- Content Wrapper Section -->
    <div class="content-wrapper">
        <!-- Left Content: Contact Information -->
        <div class="content-left">
            <div class="contact-box">
                <h3>Kontak Kami</h3>
                <p><strong>Alamat:</strong> Jl. Jaya Milk No. 123, Batu, Jawa Timur</p>
                <p><strong>Email:</strong> <a href="mailto:contact@healthymilk.co.id">contact@healthymilk.co.id</a>
                </p>
                <p><strong>Telepon:</strong> <a href="tel:+6281234567890">+62 812-3456-7890</a></p>
                <button onclick="window.location.href='mailto:contact@healthymilk.co.id'">Hubungi Kami</button>
            </div>
        </div>

        <!-- Right Content: Google Maps Embed -->
        <div class="maps-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.976362496498!2d112.5356125871582!3d-7.8956849999999905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788110b42bc893%3A0x2f2bf5c3f2b4eedd!2sPabrik%20Pengolahan%20Susu%20Sapi%20Kud%20%22Batu%22!5e0!3m2!1sid!2sid!4v1728281642160!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                title="Google Maps Lokasi GlowKoang" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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

    </div>
    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("nav-links");
            navLinks.classList.toggle("active");
        }
    </script>
</body>

</html>