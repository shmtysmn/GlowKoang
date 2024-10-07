<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo</title>
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
<div class="Aktifitas" style="width: 1440px; height: 1178px; position: relative; background: white">
  <div class="Group65" style="width: 1440px; height: 272px; left: 0px; top: 74px; position: absolute">
    <img class="Image4" style="width: 1440px; height: 267px; left: 0px; top: 0px; position: absolute" src="https://via.placeholder.com/1440x267" />
    <div class="Rectangle58" style="width: 1440px; height: 272px; left: 0px; top: 0px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
  <div class="Rectangle68" style="width: 1400px; height: 635px; left: 17px; top: 372px; position: absolute; background: white"></div>
  <div class="NisiUtAliquipExEaCommodoConsequatDuisAuteIrureDolorInReprehenderitInVoluptateVelitEsseCillumDoloreEuFugiatNullaPariaturExcepteurSintOccaecatCupidatatNonProidentSuntInCulpaQuiOfficia" style="width: 795px; left: 57px; top: 651px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia </div>
  <div class="Footer" style="width: 1442px; height: 105px; left: -2px; top: 1073px; position: absolute; background: #E1CFBD; border-top: 1px rgba(255, 255, 255, 0.17) solid">
    <div class="Copyright2024JoyfullCrunchDesignByJoyfullCrunch" style="width: 443.35px; height: 19.50px; left: 320px; top: 39.25px; position: absolute; color: #FDFCE8; font-size: 13px; font-family: DM Sans; font-weight: 400; line-height: 19.50px; word-wrap: break-word">Copyright © 2024 Joyfull Crunch,  Design by Joyfull Crunch</div>
    <div class="Link" style="width: 32px; height: 32px; padding: 8px; left: 1218px; top: 33px; position: absolute; background: rgba(255, 255, 255, 0.17); border-radius: 16px; justify-content: center; align-items: center; display: inline-flex">
      <div class="Svg" style="flex: 1 1 0; align-self: stretch; padding-left: 3.72px; padding-right: 3.72px; justify-content: center; align-items: center; display: inline-flex">
        <div class="Vector" style="width: 8.57px; height: 16px; background: white"></div>
      </div>
    </div>
    <div class="Link" style="width: 32px; height: 32px; padding: 8px; left: 1255px; top: 33px; position: absolute; background: rgba(255, 255, 255, 0.17); border-radius: 16px; justify-content: center; align-items: center; display: inline-flex">
      <div class="Svg" style="flex: 1 1 0; align-self: stretch; padding-top: 1.50px; padding-bottom: 1.50px; justify-content: center; align-items: center; display: inline-flex">
        <div class="Vector" style="width: 16px; height: 12.99px; background: white"></div>
      </div>
    </div>
    <div class="Link" style="width: 32px; height: 32px; padding: 8px; left: 1292px; top: 33px; position: absolute; background: rgba(255, 255, 255, 0.17); border-radius: 16px; justify-content: center; align-items: center; display: inline-flex">
      <div class="Svg" style="flex: 1 1 0; align-self: stretch; padding-top: 0.99px; padding-bottom: 1px; padding-left: 1px; padding-right: 0.99px; justify-content: center; align-items: center; display: inline-flex">
        <div class="Vector" style="width: 14.01px; height: 14px; background: white"></div>
      </div>
    </div>
    <div class="Link" style="width: 32px; height: 32px; padding: 8px; left: 1329px; top: 33px; position: absolute; background: rgba(255, 255, 255, 0.17); border-radius: 16px; justify-content: center; align-items: center; display: inline-flex">
      <div class="Svg" style="flex: 1 1 0; align-self: stretch; padding-left: 0.41px; padding-right: 0.41px; padding-top: 2.67px; padding-bottom: 2.67px; justify-content: center; align-items: center; display: inline-flex">
        <div class="Vector" style="width: 15.17px; height: 10.67px; background: white"></div>
      </div>
    </div>
  </div>
  <img class="F2456811df1ae74ff667976a1825eb591" style="width: 317px; height: 408px; left: 989px; top: 536px; position: absolute" src="https://via.placeholder.com/317x408" />
  <div class="UjiKelayakanProduk" style="width: 536px; height: 58px; left: 159px; top: 536px; position: absolute; text-align: justify; color: black; font-size: 45px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">Uji  Kelayakan Produk</div>
  <div class="Frame306" style="width: 876px; height: 37px; left: 527px; top: 9px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
    </div>
  </div>
  <div class="Group93" style="width: 167px; height: 45px; left: 140px; top: 12px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
    <img class="ChildrenBookIllustrationVectorHdPngImagesFlatIllustrationBengkoangFruitIsolatedOnPlainBackgroundSuitableForWallpaperBannerChildrenBookIllustrationCardInvitationFlyerWebDesig1" style="width: 56px; height: 45px" src="https://via.placeholder.com/56x45" />
    <div class="Glowkoang" style="color: black; font-size: 25px; font-family: Port Lligat Slab; font-weight: 400; word-wrap: break-word">GlowKoang</div>
  </div>
  <div class="AktifitasGlowkoang" style="left: 537px; top: 166px; position: absolute"><span style="color: white; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Aktifitas</span><span style="color: #FF7B00; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word"> GlowKoang</span></div>
</div>
</body>
</html>