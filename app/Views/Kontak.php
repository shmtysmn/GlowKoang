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

        /* Kontak Section */
        .kontak {
            width: 100%;
            height: 1024px;
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
            height: 258px;
            position: absolute;
            top: -90px;
        }

        .rectangle-58 {
            width: 100%;
            height: 258px;
            position: absolute;
            top: -90px;
            background: rgba(0, 0, 0, 0.40);
        }

        .map-maker-standard {
            width: 570px;
            height: 284px;
            position: absolute;
            top: 337px;
            left: 66px;
        }

        .contact-info {
            width: 444px;
            height: 168px;
            position: absolute;
            top: 668px;
            left: 69px;
            color: black;
            font-size: 20px;
            font-family: 'Inika', serif;
            line-height: 44px;
        }

        .kontak-glowkoang {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 35px;
            font-family: 'Poppins', sans-serif;
            color: white;
        }

        .kontak-glowkoang span:last-child {
            color: #FF7B00;
        }

        .group-113 {
            width: 164px;
            height: 44px;
            position: absolute;
            top: 853px;
            left: 972px;
        }

        .rectangle-84 {
            width: 164px;
            height: 43px;
            background: #EDB27A;
            border-radius: 13px;
        }

        .kirim-pesan {
            position: absolute;
            left: 27px;
            top: 0;
            color: black;
            font-size: 20px;
            font-family: 'Inika', serif;
            line-height: 44px;
        }

        .rectangle-85,
        .rectangle-87,
        .rectangle-88,
        .rectangle-86 {
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .rectangle-85 {
            width: 335px;
            height: 54px;
            position: absolute;
            top: 337px;
            left: 703px;
        }

        .rectangle-87 {
            width: 335px;
            height: 54px;
            position: absolute;
            top: 418px;
            left: 703px;
        }

        .rectangle-88 {
            width: 697px;
            height: 317px;
            position: absolute;
            top: 499px;
            left: 703px;
        }

        .rectangle-86 {
            width: 335px;
            height: 54px;
            position: absolute;
            top: 337px;
            left: 1069px;
        }

        .form-label {
            position: absolute;
            color: black;
            font-size: 20px;
            font-family: 'Inika', serif;
            line-height: 44px;
        }

        #name {
            top: 342px;
            left: 717px;
        }

        #email {
            top: 342px;
            left: 1084px;
        }

        #subject {
            top: 423px;
            left: 720px;
        }

        #pesan {
            top: 504px;
            left: 720px;
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

    <!-- Kontak Section -->
    <div class="kontak">
        <div class="group-65">
            <img class="image-4" alt="gambar background" src="uploads/y.png" />
            <div class="rectangle-58"></div>
        </div>
        <img class="map-maker-standard" alt="gambar peta" src="uploads/peta.png" />
        <div class="contact-info">
            Email: GlowKoang@gmail.com<br />
            Ig: @GlowKoang<br />
            Telp/WA: +62 251 882 512 933
        </div>

        <div class="kontak-glowkoang">
            <span>Kontak &nbsp;</span><span>GlowKoang</span>
        </div>

        <div class="group-113">
            <div class="rectangle-84"></div>
            <div class="kirim-pesan">Kirim Pesan</div>
        </div>

        <div class="rectangle-85"></div>
        <div class="rectangle-87"></div>
        <div class="rectangle-88"></div>
        <div class="rectangle-86"></div>
        <div class="form-label" id="name">Your name</div>
        <div class="form-label" id="email">Your Email</div>
        <div class="form-label" id="subject">Subject</div>
        <div class="form-label" id="pesan">Pesan</div>
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