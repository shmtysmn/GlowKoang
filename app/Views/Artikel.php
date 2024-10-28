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
.Group119, .Group120, .Group121, .Group122 {
    width: 272px;
    height: 425px;
    position: absolute;
}

.Group119 {
    left: 80px;
    top: 500px;
}

.Group120 {
    left: 1150px;
    top: 500px;
}

.Group121 {
    width: 800px;
    left: 450px;
    top: 500px;
}

.Group122 {
    left: 350px;
    top: 2px;
}

.Rectangle89 {
    width: 272px;
    height: 425px;
    position: absolute;
    background: #EDB27A;
    border-radius: 10px;
}

.Image {
    width: 228px;
    height: 290px;
    position: absolute;
    border-radius: 15px;
    left: 22px;
    top: 18px;
}

.desk1, .desk2, .desk3, .desk4 {
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
    top: 160px;
}


    </style> </head>
    <body>
    <img class="Image4" style="width: 100%; height: 209.35px; left: -0px; top: 60px; position: absolute" src="uploads/y.png" />
    <div class="Rectangle51" style="width: 100%; height: 209px; left: -0px; top: 60px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
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
<div class="Rectangle20" style="width: 270px; height: 97px; left: 130px; top: 320px; position: absolute; background: white; border-radius: 10px; border: 8px #DDB79B solid"></div>
  <div class="ArtikelTerbaru" style="left: 150px; top: 342px; position: absolute; color: black; font-size: 35px; font-family: Inter; font-weight: 700; line-height: 57.60px; word-wrap: break-word">Artikel Terbaru</div>
  
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
  <!-- Artikel GlowKoang -->
<div class="artikel-glowkoang">
    <span>Artikel &nbsp;</span><span>GlowKoang</span>
</div>

<div class="Group119">
    <div class="Rectangle89"></div>
    <img class="Image" src="uploads/foto1.png" />
    <a href="/artikel1" class="desk1">
    <div class="desk1">Begini cara mencerahkan kulit secara alami berikut ini!</div>
    </a>
</div>

<div class="Group120">
    <div class="Rectangle89"></div>
    <img class="Image" src="uploads/foto kedua.png" />
    <a href="/artikel2" class="desk2">
    <div class="desk4">Ternyata, Ini 7 Kegunaan dan Manfaat Bengkoang untuk Kulit Cantikmu</div>
    </a>
</div>

<div class="Group121">
    <div class="Rectangle89"></div>
    <img class="Image" src="uploads/foto ketiga.png" />
    <a href="/artikel3" class="desk3">
    <div class="desk3">Begini Urutan dan Cara Pakai body Serum dan Body Lotion yang Benar</div>
    </a>
    
    <div class="Group122">
        <div class="Rectangle89"></div>
        <img class="Image" src="uploads/foto4.png" />
        <a href="/artikel4" class="desk4">
        <div class="desk2">Raih Kecantikan Alami dengan Glowkoang: Manfaat Bengkoang untuk Kulit Sehat</div>
        </a>
    </div>
</div>

</body>
</html>