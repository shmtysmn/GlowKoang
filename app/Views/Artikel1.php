<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <meta name="title" content="GlowKoang - Artikel">
<meta name="description" content="Baca artikel menarik seputar kecantikan, perawatan kulit, dan manfaat bengkoang di GlowKoang. Temukan tips dan trik untuk merawat kulit Anda, ulasan produk, dan informasi terbaru tentang dunia kecantikan. Dapatkan wawasan yang berguna untuk meningkatkan rutin kecantikan Anda!">

 <!-- Canonical Tag -->
 <link rel="canonical" href="<?= current_url() ?>">
    <style>
      /* Masukkan CSS Anda di sini */
      body {
    margin: 0;
    font-family: 'Petrona', sans-serif;
    padding-top: 60px; /* Adjusted to avoid content hiding behind the navbar */
}

         /* Navbar styling */
         .navbar {
            width: 100%;
            height: 60px;
            position: fixed; /* Navbar tetap berada di atas */
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
    right: 0; /* Geser dropdown ke kiri dari sisi kanan */
    background-color: white;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    min-width: 120px; /* Atur lebar minimum dropdown supaya tidak mepet */
    padding: 12px 0; /* Tambahkan padding pada konten dropdown */
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

        .text-center {
            text-align: center;
            color: black;
            font-size: 1.2rem;
            line-height: 1.5;
            margin: 20px 0;
        }
        .artikel1 {
    width: 1440px;
    height: 2019px;
    position: relative;
    background: white;
}

.group65 {
    width: 1440px;
    height: 272px;
    position: absolute;
    top: 61px;
}

.image4 {
    width: 1530px;
    height: 258px;
    position: absolute;
    top: -70px;
}

.rectangle58 {
    width: 1530px;
    height: 258px;
    position: absolute;
    top: -70px;
    background: rgba(0, 0, 0, 0.40);
}

.rectangle59 {
    width: 880px;
    height: 1354px;
    position: absolute;
    top: 467px;
    left: 72px;
    background: white;
    border-radius: 15px;
    border: 5px rgba(61, 37, 30, 0.80) solid;
}

.title-text {
    width: 824px;
    height: 130px;
    position: absolute;
    top: 1053px;
    left: 112px;
    text-align: center;
    color: black;
    font-size: 40px;
    font-family: Poppins, sans-serif;
    font-weight: 600;
    line-height: 57.6px;
}

.main-image {
    width: 869px;
    height: 505px;
    position: absolute;
    top: 475px;
    left: 77px;
    border-radius: 15px;
}

.group66 {
    width: 158px;
    height: 58px;
    position: absolute;
    top: 475px;
    left: 991px;
}

.rectangle60 {
    width: 158px;
    height: 56px;
    background: white;
    border: 1px solid #64514B;
}

.baca-juga {
    position: absolute;
    top: 0;
    left: 24px;
    color: black;
    font-size: 20px;
    font-family: Poppins, sans-serif;
    font-weight: 500;
}

.rectangle61 {
    width: 401px;
    height: 369px;
    position: absolute;
    top: 587px;
    left: 991px;
    background: white;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border: 1px solid #734128;
}

.line8 {
    width: 413px;
    height: 0;
    position: absolute;
    top: 557px;
    left: 993px;
    border: 4px solid #734128;
}

.image2 {
    width: 146px;
    height: 90px;
    position: absolute;
    top: 618px;
    left: 1031px;
    border-radius: 15px;
}

.rectangle62 {
    width: 193px;
    height: 77px;
    position: absolute;
    top: 624px;
    left: 1174px;
    background: white;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.date-text {
    width: 135px;
    height: 39px;
    position: absolute;
    color: black;
    font-size: 15px;
    font-family: Poppins, sans-serif;
    font-weight: 500;
}

.main-text {
    width: 806px;
    height: 586px;
    position: absolute;
    top: 1204px;
    left: 108px;
    text-align: justify;
    color: black;
    font-size: 30px;
    font-family: Poppins, sans-serif;
    font-weight: 300;
    line-height: 30px;
}

.group68 {
    width: 336px;
    height: 105px;
    position: absolute;
    top: 789px;
    left: 1031px;
}

.image3 {
    width: 146px;
    height: 105px;
    border-radius: 20px;
}

.rectangle63 {
    width: 193px;
    height: 86px;
    position: absolute;
    top: 10px;
    left: 143px;
    background: white;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
/* Footer Styles */
.footer {
    width: 1530px;
    height: 105px;
    position: absolute;
    left: 0;
    top: 1950px;
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

/* Additional Text and Dates */
.additional-text {
    position: absolute;
    top: 660px;
    left: 1180px;
    color: black;
    font-family: 'Poppins', sans-serif;
}

.short-text {
    width: 193px;
    height: 26px;
    text-align: center;
    font-size: 17px;
    font-weight: 500;
    line-height: 57.60px;
    word-wrap: break-word;
}

.date-text {
    width: 135px;
    height: 39px;
    position: absolute;
    top: 789px;
    left: 1187px;
    font-size: 15px;
    font-weight: 500;
    line-height: 57.60px;
    word-wrap: break-word;
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
        <a href="/artikel1">Artikel</a>
        <a href="/produk">Produk</a>
        <a href="/aktivitas">Aktivitas</a>
        <a href="/kontak">Kontak</a>

        <!-- Dropdown Bahasa -->
        <div class="dropdown">
            <button class="dropbtn">Bahasa ▼</button>
            <div class="dropdown-content">
                <a href="#">Indonesia</a>
                <a href="#">English</a>
            </div>
        </div>
    </div>
</div>

<div class="artikel1">
    <!-- Section Background -->
    <div class="group65">
        <img class="image4" alt="gambar background" src="uploads/Group 117.png" />
        <div class="rectangle58"></div>
    </div>

    <!-- Main Content Section -->
    <div class="rectangle59"></div>
    <div class="title-text">Begini cara mencerahkan kulit secara alami berikut ini!</div>

    <!-- Main Image -->
    <img class="main-image" alt="gambar foto1" src="uploads/foto1.png" />

    <!-- "Baca Juga" Section -->
    <div class="group66">
        <div class="rectangle60"></div>
        <div class="baca-juga">Baca Juga</div>
    </div>

    <!-- Secondary Image Section -->
    <div class="rectangle61"></div>
    <div class="line8"></div>

    <!-- Image 2 -->
    <img class="image2" alt="gambar foto2" src="uploads/foto2.png" />
    <div class="rectangle62"></div>
    <div class="date-text">02 Agust 2024</div>

    <!-- Main Text -->
    <div class="main-text">
    Untuk mencerahkan kulit secara alami, ada beberapa metode yang bisa dilakukan tanpa menggunakan bahan kimia berbahaya. Pertama, menjaga kebersihan kulit dengan rutin membersihkan wajah, agar kotoran dan minyak tidak menumpuk dan menyebabkan kulit kusam. Kedua, gunakan bahan-bahan alami seperti bengkoang, lemon, atau madu yang diketahui memiliki manfaat untuk mencerahkan kulit. Selain itu, menjaga pola makan yang sehat dengan banyak mengonsumsi buah dan sayuran, serta cukup minum air putih, juga berperan penting dalam menjaga kulit tetap cerah dan sehat. Jangan lupa untuk selalu menggunakan tabir surya saat beraktivitas di luar ruangan untuk melindungi kulit dari paparan sinar UV yang dapat menyebabkan kulit gelap. </div>

    <!-- Date Text -->
    <div class="date-text">10 Agust 2024</div>

    <!-- Group 68 (Image 3 Section) -->
    <div class="group68">
        <img class="image3" alt="gambar foto3" src="uploads/foto3.png" />
        <div class="rectangle63"></div>
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
            <img src="uploads/link.png" alt="Icon 1">
        </div>
        <div class="link">
            <img src="uploads/twitter.png" alt="Icon 2">
        </div>
        <div class="link">
            <img src="uploads/instagram.png" alt="Icon 3">
        </div>
        <div class="link">
            <img src="uploads/youtube.png" alt="Icon 4">
        </div>
    </div>
</div>

<!-- Additional Text and Dates -->
<div class="additional-text">
    <div class="short-text">Begini Urutan dan....</div>
    <div class="date-text">24 Agust 2024</div>
    <div class="short-text">Ternyata, Ini 7 Keg....</div>
</div>

<!-- Artikel GlowKoang -->
<div class="artikel-glowkoang">
    <span>Artikel &nbsp;</span><span>GlowKoang</span>
</div>

  </div>
</div>
</body>
</html>