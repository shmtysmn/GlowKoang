<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel1</title>
    <meta name="title" content="GlowKoang - Artikel1">
    <meta name="description"
        content="Baca artikel menarik seputar kecantikan, perawatan kulit, dan manfaat bengkoang di GlowKoang. Temukan tips dan trik untuk merawat kulit Anda, ulasan produk, dan informasi terbaru tentang dunia kecantikan. Dapatkan wawasan yang berguna untuk meningkatkan rutin kecantikan Anda!">

    <!-- Canonical Tag -->
    <link rel="canonical" href="<?= current_url() ?>">
    <style>
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
            position: fixed;
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


        /*halaman beranda */
        .hero-section {
            position: relative;
            width: 100%;
            height: 826px;
            background-image: url('uploads/bg.png');
            background-size: cover;
            background-position: center;
        }

        .logo {
            position: absolute;
            top: 5px;
            left: 152px;
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 65px;
            height: 50px;
        }

        .logo span {
            font-size: 20px;
            margin-left: 10px;
            height: 25px;
        }

        /* Banner Section */
        .banner {
            width: 100%;
            height: auto;
            position: relative;
        }

        .banner img {
            width: 100%;
            height: auto;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(14, 26, 24, 0.50);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner-title {
            color: white;
            font-size: 48px;
            font-family: Inter, sans-serif;
            font-weight: 700;
            text-align: center;
        }

        /* Container utama */
        .artikel-container {
            width: 100%;
            height: auto;
            padding: 40px 0;
            background: linear-gradient(234deg, #A6D4FF 0%, white 40%, rgba(178, 218, 255, 0.09) 96%);
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: space-between;
        }

        /* Heading */
        .heading-container {
            text-align: center;
        }

        .heading {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }

        .heading-line {
            width: 50px;
            height: 2px;
            background: #1BBCA3;
        }

        .heading-title {
            font-size: 32px;
            font-weight: 700;
            color: #384F4B;
        }

        /* Footer Styles */
        .footer {
            width: 100%;
            height: 105px;
            position: absolute;
            left: 0;
            top: 1900px;
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
    top: 45%;
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

        <!-- Navigation Links -->
        <div>
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

    <!-- Banner Section -->
    <div class="banner">
        <img src="uploads/Group 117.png" alt="banner glowkoang" />
        <div class="artikel-glowkoang">
            <span>Artikel &nbsp;</span><span>GlowKoang</span>
        </div>
    </div>


    <!-- Content Section -->
    <div style="display: flex; justify-content: space-between; width: 90%; padding: 20px; background: white;">
        <!-- Artikel Utama -->
        <div style="flex: 2; padding-right: 20px;">
            <img style="width: 100%; height: auto; border: 5px #3D251E solid;" alt="susu sapi import"
                src="uploads/foto kedua.png" />
            <div
                style="padding: 50px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 5px #3D251E solid; margin-top: 20px;">
                <div style="color: black; font-size: 14px; font-family: Inika; font-weight: 400;">
                    12 Agust 2024
                </div>
                <div style="color: black; font-size: 32px; font-family: Roboto; font-weight: 700; margin-top: 10px;">
                Ternyata, Ini 7 Kegunaan dan Manfaat Bengkoang untuk Kulit Cantikmu
                </div>
                <div
                    style="color: black; font-size: 16px; font-family: Times New Roman; font-weight: 400; margin-top: 20px; line-height: 1.6;">
                    <br> Siapa yang tidak ingin memiliki kulit cantik dan bercahaya? Bengkoang, umbi yang terkenal di Indonesia, bukan hanya lezat dijadikan camilan, tetapi juga menyimpan berbagai manfaat luar biasa untuk kecantikan kulit. Dalam artikel ini, kami akan mengungkap tujuh kegunaan dan manfaat bengkoang yang wajib Anda ketahui. Dari kemampuannya untuk mencerahkan kulit hingga menghidrasi dengan sempurna, bengkoang menawarkan solusi alami yang efektif dan aman bagi Anda yang ingin merawat kecantikan kulit. Temukan rahasia di balik khasiat bengkoang dan bagaimana Anda bisa mengintegrasikannya ke dalam rutinitas perawatan kulit Anda untuk hasil yang menakjubkan!</br>

                </div>
            </div>
        </div>

        <!-- Sidebar "Baca Juga" -->
        <div style="flex: 1;">
            <div
                style="background: white; padding: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 2px #3D251E solid;">
                <div
                    style="text-align: center; font-size: 24px; font-family: Inika; font-weight: 400; margin-bottom: 10px;">
                    Baca Juga
                </div>

                <!-- Artikel 1 -->
                <a href="<?= base_url('artikel1') ?>"
                    style="text-decoration: none; color: inherit;">
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <img style="width: 147px; height: auto;" alt="susu banyak manfaat"
                            src="<?= base_url('uploads/foto1.png') ?>" />
                        <div>
                            <div style="font-size: 14px; color: black; margin-bottom: 8px;"> 02 Agust 2024</div>
                            <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;"> Begini cara mencerahkan kulit secara alami....</div>
                        </div>
                    </div>
                </a>

                <hr style="border: 1px solid #3D251E;">

                <!-- Artikel 2 -->
                <a href="<?= base_url('artikel3') ?>"
                    style="text-decoration: none; color: inherit;">
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <img style="width: 147px; height: auto;" alt="susu murni dari sapi"
                            src="<?= base_url('uploads/foto ketiga.png') ?>" />
                        <div>
                            <div style="font-size: 14px; color: black; margin-bottom: 8px;">25 Agustus 2024</div>
                            <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Begini Urutan dan Cara Pakai body Serum...</div>
                        </div>
                    </div>
                </a>

                <hr style="border: 1px solid #3D251E;">

                <!-- Artikel 3 -->
                <a href="<?= base_url('artikel4') ?>"
                    style="text-decoration: none; color: inherit;">
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <img style="width: 147px; height: auto;" alt="susu untuk bahan pangan"
                            src="<?= base_url('uploads/foto4.png') ?>" />
                        <div>
                            <div style="font-size: 14px; color: black; margin-bottom: 8px;">30 Agustus 2024</div>
                            <div style="font-size: 16px; color: blue; font-family: Inika; font-weight: 400;">Raih Kecantikan Alami dengan Glowkoang: Manfaat....</div>
                        </div>
                    </div>
                </a>
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
</body>

</html>