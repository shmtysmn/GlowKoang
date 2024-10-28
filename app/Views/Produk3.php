<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk3</title>
    <meta name="title" content="GlowKoang - Produk">
<meta name="description" content="Jelajahi rangkaian produk kecantikan GlowKoang yang terbuat dari bengkoang berkualitas tinggi. Temukan krim wajah, serum, dan produk perawatan kulit lainnya yang membantu menjaga kesehatan dan kecantikan kulit Anda secara alami. Dapatkan produk yang sesuai dengan kebutuhan kulit Anda dan rasakan manfaatnya!">

 <!-- Canonical Tag -->
 <link rel="canonical" href="<?= current_url() ?>">
    <style>body {
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
        .header {
            width: 1512px;
            height: 83px;
            background: white;
            display: flex;
            align-items: center;
            padding: 0 15px;
            box-sizing: border-box;
            justify-content: space-between; /* Space between logo and nav elements */
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
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 90px;
            background-color: #E1CFBD;
            border-top: 1px solid rgba(255, 255, 255, 0.17);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .copyright {
            font-size: 13px;
            color: #FDFCE8;
        }

        .social-links {
            display: flex;
            margin-left: auto;
        }

        .social-links img {
            width: 32px;
            height: 32px;
            margin-left: 10px;
            border-radius: 16px;
        }
          /* Footer Styles */
.footer {
    width: 1530px;
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
                <a href="#">Indonesia</a>
                <a href="#">English</a>
            </div>
        </div>
    </div>
</div>

<body>
    <div class="Produk" style="width: 1442px; height: 1006px; position: relative">
  <div class="Rectangle79" style="width: 1442px; height: 1006px; left: 0px; top: 0px; position: absolute; background: white"></div>
  <div class="Ellipse2" style="width: 367px; height: 452px; left: 80px; top: 349px; position: absolute; background: #D8CBC4; border-radius: 9999px"></div>
  <div class="Group65" style="width: 1440px; height: 245px; left: 2px; top: 50px; position: absolute">
    <img class="Image4" style="width: 1530px; height: 258px; left: 0px; top: -50px; position: absolute" alt="gambar background" src="uploads/y.png" />
    <div class="Rectangle58" style="width: 1530px; height: 258px; left: 0px; top: -50px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
  <img class="RemovebgPreview" style="width: 258px; height: 369px; left: 154px; top: 391px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px" alt="gambar citra" src="uploads/pelembab.png" />
  <div class="pelembab" style="left: 542px; top: 376px; position: absolute; color: black; font-size: 45px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Pelembab</div>
  <div class="deskproduk" style="width: 806px; left: 551px; top: 480px; position: absolute; text-align: justify; color: black; font-size: 30px; font-family: Petrona; font-weight: 200; line-height: 57.60px; word-wrap: break-word">nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </div>
  
  <button onclick="history.back()" style="padding: 15px 30px; background-color: #EDB27A; border: none; border-radius: 30px; font-size: 20px; color: black; position: absolute; left: 1200px; top: 800px; cursor: pointer;">Kembali</button>

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

<div class="ProdukGlowkoang" style="display: flex; justify-content: center; align-items: center; position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%); font-size: 35px; font-family: Poppins;">
    <span style="color: white;">Produk &nbsp;</span><span style="color: #FF7B00;">GlowKoang</span>
</div>

  </div>
    </div>
  </div>
</div>
</body>
</html>
