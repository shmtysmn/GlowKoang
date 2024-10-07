<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas</title>
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
<div class="Aktivitas" style="width: 1440px; height: 1072px; position: relative; background: white">
  <div class="Group65" style="width: 1440px; height: 231px; left: 0px; top: 87px; position: absolute">
    <img class="Image4" style="width: 1440px; height: 226.75px; left: 0px; top: 0px; position: absolute" src="uploads/Group 117.png" />
    <div class="Rectangle58" style="width: 1440px; height: 231px; left: 0px; top: 0px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
  <div class="Rectangle69" style="width: 1440px; height: 585px; left: 0px; top: 346px; position: absolute; background: white"></div>
  <div class="Footer" style="width: 1442px; height: 90px; left: 0px; top: 982px; position: absolute; background: #DECAB6; border-top: 1px rgba(255, 255, 255, 0.17) solid">
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
  <div class="Frame306" style="width: 876px; height: 37px; left: 510px; top: 19px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
    </div>
  </div>
  <div class="AktifitasGlowkoang" style="left: 578px; top: 176px; position: absolute"><span style="color: white; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Aktifitas </span><span style="color: #FF7B00; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">GlowKoang</span></div>
  <div class="Group103" style="width: 1361px; height: 494px; left: 40px; top: 423px; position: absolute">
    <div class="Rectangle72" style="width: 314px; height: 494px; left: 0px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <div class="Rectangle70" style="width: 306px; height: 494px; left: 721px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <div class="Rectangle73" style="width: 306px; height: 494px; left: 1055px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <img class="Aab93f910e6f016124db5586bf2" style="width: 200px; height: 285px; left: 767px; top: 27px; position: absolute" src="uploads/testi.png" />
    <img class="Fa4842d167b8bee223fba7a7b97c25d81" style="width: 236px; height: 300px; left: 49px; top: 28px; position: absolute" src="uploads/uji.png" />
    <div class="Testimoni" style="left: 74px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">TESTIMONI</div>
    <div class="Rectangle71" style="width: 335px; height: 494px; left: 344px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
    <div class="UjiKelayakanProduk" style="width: 311px; height: 49px; left: 357px; top: 345px; position: absolute; text-align: justify; color: black; font-size: 27px; font-family: Petrona; font-weight: 400; line-height: 30px; word-wrap: break-word">UJI KELAYAKAN PRODUK</div>
    <div class="Influencer" style="left: 788px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">INFLUENCER</div>
    <img class="F2456811df1ae74ff667976a1825eb591" style="width: 230px; height: 277px; left: 398px; top: 39px; position: absolute" src="uploads/influe.png" />
    <img class="Cdcd0e8947fa3e57ce6d68a617dd5071" style="width: 231px; height: 265px; left: 1092px; top: 27px; position: absolute" src="uploads/promo.png" />
    <div class="Promo" style="left: 1148px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">PROMO</div>
  </div>
</div>
</body>
</html>