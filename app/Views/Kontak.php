<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title><style>
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

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
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
            top: 3px;
            left: 152px;
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 65px;
            height: 70px;
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
        <a href="#beranda">Beranda</a>
        <a href="#tentang">Tentang</a>
        <a href="#artikel">Artikel</a>
        <a href="#produk">Produk</a>
        <a href="#aktivitas">Aktivitas</a>
        <a href="#kontak">Kontak</a>

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
<script>
    // Fungsi untuk menampilkan dan menyembunyikan dropdown
    document.querySelector('.dropbtn').addEventListener('click', function() {
        var dropdownContent = document.querySelector('.dropdown-content');
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    // Menyembunyikan dropdown jika diklik di luar
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdownContent = document.querySelector('.dropdown-content');
            if (dropdownContent.style.display === 'block') {
                dropdownContent.style.display = 'none';
            }
        }
    }
</script>
<div class="Kontak" style="width: 1440px; height: 1024px; position: relative; background: white">
  <div class="Group65" style="width: 1440px; height: 233px; left: 0px; top: 82px; position: absolute">
    <img class="Image4" style="width: 1440px; height: 228.72px; left: 0px; top: 0px; position: absolute" src="uploads/y.png" />
    <div class="Rectangle58" style="width: 1440px; height: 233px; left: 0px; top: 0px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
  <img class="MapMakerStandard" style="width: 570px; height: 284px; left: 66px; top: 337px; position: absolute" src="uploads/peta.png" />
  <div class="EmailGlowkoangGmailComIgGlowkoangTelpWa62251882512933" style="width: 444px; height: 168px; left: 69px; top: 668px; position: absolute; color: black; font-size: 20px; font-family: Inika; font-weight: 400; line-height: 44px; word-wrap: break-word">Email          : GlowKoang@gmail.com<br/>Ig                 : @GlowKoang<br/>Telp/WA    :  +62 251 882 512 933</div>
  <div class="Footer" style="width: 1442px; height: 90px; left: -1px; top: 934px; position: absolute; background: #E1CFBD; border-top: 1px rgba(255, 255, 255, 0.17) solid">
    <div class="Copyright2024JoyfullCrunchDesignByJoyfullCrunch" style="width: 443.35px; height: 19.50px; left: 320px; top: 39.25px; position: absolute; color: #FDFCE8; font-size: 13px; font-family: DM Sans; font-weight: 400; line-height: 19.50px; word-wrap: break-word">Copyright © 2024 Joyfull Crunch, Design by Joyfull Crunch</div>
    
    <!-- Icon 1 (Link 1) -->
    <div class="Link" style="width: 32px; height: 32px; left: 1218px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/link.png" alt="Icon 1" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>

    <!-- Icon 2 (Link 2) -->
    <div class="Link" style="width: 32px; height: 32px; left: 1255px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/twitter.png" alt="Icon 2" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>

    <!-- Icon 3 (Link 3) -->
    <div class="Link" style="width: 32px; height: 32px; left: 1292px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/instagram.png" alt="Icon 3" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>

    <!-- Icon 4 (Link 4) -->
    <div class="Link" style="width: 32px; height: 32px; left: 1329px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/youtube.png" alt="Icon 4" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>
</div>

  <div class="KontakGlowkoang" style="left: 592px; top: 158px; position: absolute"><span style="color: white; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Kontak </span><span style="color: #FF7B00; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">GlowKoang</span></div>
  <div class="Group113" style="width: 164px; height: 44px; left: 972px; top: 853px; position: absolute">
    <div class="Rectangle84" style="width: 164px; height: 43px; left: 0px; top: 1px; position: absolute; background: #EDB27A; border-radius: 13px"></div>
    <div class="KirimPesan" style="left: 27px; top: 0px; position: absolute; color: black; font-size: 20px; font-family: Inika; font-weight: 400; line-height: 44px; word-wrap: break-word">Kirim Pesan</div>
  </div>
  <div class="Rectangle85" style="width: 335px; height: 54px; left: 703px; top: 337px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div>
  <div class="Rectangle87" style="width: 335px; height: 54px; left: 703px; top: 418px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div>
  <div class="Rectangle88" style="width: 697px; height: 317px; left: 703px; top: 499px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div>
  <div class="Rectangle86" style="width: 335px; height: 54px; left: 1069px; top: 337px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div>
  <div class="YourName" style="left: 717px; top: 342px; position: absolute; color: black; font-size: 20px; font-family: Inika; font-weight: 400; line-height: 44px; word-wrap: break-word">Your name</div>
  <div class="YourEmail" style="left: 1084px; top: 342px; position: absolute; color: black; font-size: 20px; font-family: Inika; font-weight: 400; line-height: 44px; word-wrap: break-word">Your Email</div>
  <div class="Subject" style="left: 720px; top: 423px; position: absolute; color: black; font-size: 20px; font-family: Inika; font-weight: 400; line-height: 44px; word-wrap: break-word">Subject</div>
  <div class="Pesan" style="left: 720px; top: 504px; position: absolute; color: black; font-size: 20px; font-family: Inika; font-weight: 400; line-height: 44px; word-wrap: break-word">Pesan</div>
</div>
</body>
</html>