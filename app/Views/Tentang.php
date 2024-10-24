<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <meta name="title" content="GlowKoang - Tentang">
<meta name="description" content="Pelajari lebih lanjut tentang GlowKoang, brand kecantikan yang mengutamakan bahan alami dari bengkoang. Kami berkomitmen untuk memberikan produk perawatan kulit yang berkualitas tinggi, aman, dan efektif untuk membantu Anda mendapatkan kulit yang sehat dan bercahaya. Temukan perjalanan kami dan visi di balik setiap produk yang kami tawarkan.">

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
 /* Responsive Typography */
 .TentangGlowkoang span, .TentangKami {
            font-size: 5vw;
        }
 /* Media Queries */
 @media (max-width: 768px) {
            .navbar a {
                font-size: 16px;
            }

            .logo span {
                font-size: 16px;
            }

            .dropdown button {
                font-size: 16px;
            }

            .TentangGlowkoang span {
                font-size: 8vw;
            }

            .deskripsi {
                font-size: 1rem;
            }

            .social-icons {
                justify-content: center;
                margin: 10px auto;
            }
        }
@media (max-width: 480px) {
            .navbar {
                justify-content: center;
                padding-right: 0;
            }

            .navbar a {
                font-size: 14px;
                margin-left: 10px;
            }

            .dropdown button {
                font-size: 14px;
            }

            .logo {
                left: 10px;
            }

            .TentangKami {
                font-size: 28px;
            }

            .deskripsi {
                font-size: 0.9rem;
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
  <div class="Group65" style="width: 100%; height: 249px; left: 0px; top: 57px; position: absolute">
    <img class="Image4" style="width: 100%; height: 270px; left: 0px; top: -80px; position: absolute" alt="gambar background" src="uploads/y.png" />
    <div class="Rectangle58" style="width: 100%; height: 269px; left: 0px; top: -80px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
  <div class="TentangGlowkoang" style="left: 574px; top: 100px; position: absolute"><span style="color: white; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Tentang </span><span style="color: #FF7B00; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">GlowKoang</span></div>
  <div class="Group107" style="width: 100%; height: 500px; left: -3px; top: 301px; position: absolute">
    <div class="Vector" style="width: 100%; height: 80px; left: 3px; top: -55px; position: absolute; background: #B6A99B"></div>
    <div class="Group62" style=" height: 291.77px; left: 59px; top: 267px; position: absolute">
      <img class="Image" style="width: 308.94px; height: 170.08px; left: 0px; top: 0px; position: absolute; border-radius: 15px" alt="desk_produk1" src="uploads/gambardes1.png" />
      <img class="ManfaatBengkoangUntukKesehatan1" style="width: 261.32px; height: 190.82px; left: 144.68px; top: 100.94px; position: absolute; border-radius: 15px" alt="desk_produk2" src="uploads/gambardes2.png" />
    </div>
    
    <div class="deskripsi" style="width: 832px; height: 516.70px; left: 533px; top: 250px; position: absolute; text-align: justify; color: black; font-size: 20px; font-family: Petrona; font-weight: 300; line-height: 50px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br/>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</div>
    
    <div class="Line11" style="width: 146px; height: 0px; left: 925px; top: 190px; position: absolute; border: 5px black solid"></div>
  <div class="TentangKami" style="width: 257px; height: 52.97px; left: 890px; top: 130px; position: absolute; color: black; font-size: 38px; font-family: Inika; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Tentang Kami</div>
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