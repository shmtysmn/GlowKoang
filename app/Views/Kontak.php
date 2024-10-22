<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <meta name="title" content="GlowKoang - Kontak">
<meta name="description" content="Hubungi GlowKoang untuk pertanyaan, saran, atau informasi lebih lanjut tentang produk kecantikan kami yang terbuat dari bengkoang. Kami siap membantu Anda dengan pelayanan terbaik. Temukan informasi kontak kami dan jangan ragu untuk menghubungi kami!">

 <!-- Canonical Tag -->
 <link rel="canonical" href="<?= current_url() ?>">

    <style>
      /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global Styles */
body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    padding: 0;
    margin: 0;
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
        /* Kontak Section */
.kontak {
    width: 1440px;
    height: 1024px;
    position: relative;
    background: white;
}

.group-65 {
    width: 1440px;
    height: 233px;
    position: absolute;
    top: 82px;
}

.image-4 {
    width: 1530px;
    height: 258px;
    position: absolute;
    top: -90px;
}

.rectangle-58 {
    width: 1530px;
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

.rectangle-85, .rectangle-87, .rectangle-88, .rectangle-86 {
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

<!-- Kontak Section -->
<div class="kontak">
    <div class="group-65">
        <img class="image-4" alt="gambar background" src="uploads/y.png" />
        <div class="rectangle-58"></div>
    </div>
    <img class="map-maker-standard" alt="gambar peta" src="uploads/peta.png" />
    <div class="contact-info">
        Email: GlowKoang@gmail.com<br/>
        Ig: @GlowKoang<br/>
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
</body>
</html>