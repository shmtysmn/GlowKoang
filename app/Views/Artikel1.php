<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
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
<div class="Artikel1" style="width: 1440px; height: 2019px; position: relative; background: white">
  <div class="Group65" style="width: 1440px; height: 272px; left: 0px; top: 61px; position: absolute">
    <img class="Image4" style="width: 1440px; height: 267px; left: 0px; top: 0px; position: absolute" src="uploads/Group 117.png" />
    <div class="Rectangle58" style="width: 1440px; height: 272px; left: 0px; top: 0px; position: absolute; background: rgba(0, 0, 0, 0.40)"></div>
  </div>
  <div class="Rectangle59" style="width: 880px; height: 1354px; left: 72px; top: 467px; position: absolute; background: white; border-radius: 15px; border: 5px rgba(61, 37, 30, 0.80) solid"></div>
  <div class="BeginiCaraMencerahkanKulitSecaraAlamiBerikutIni" style="width: 824px; height: 130px; left: 112px; top: 1053px; position: absolute; text-align: center; color: black; font-size: 40px; font-family: Poppins; font-weight: 600; line-height: 57.60px; word-wrap: break-word">Begini cara mencerahkan kulit secara alami berikut ini!</div>
  <img class="Image" style="width: 869px; height: 505px; left: 77px; top: 475px; position: absolute; border-radius: 15px" src="uploads/foto1.png" />
  <div class="Group66" style="width: 158px; height: 58px; left: 991px; top: 475px; position: absolute">
    <div class="Rectangle60" style="width: 158px; height: 56px; left: 0px; top: 2px; position: absolute; background: white; border: 1px #64514B solid"></div>
    <div class="BacaJuga" style="left: 24px; top: 0px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">Baca Juga</div>
  </div>
  <div class="Text" style="left: 139px; top: 995px; position: absolute; text-align: center"></div>
  <div class="Rectangle61" style="width: 401px; height: 369px; left: 991px; top: 587px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 1px #734128 solid"></div>
  <div class="Line8" style="width: 413.01px; height: 0px; left: 993px; top: 557px; position: absolute; border: 4px #734128 solid"></div>
  <img class="Screenshot202408260829533" style="width: 146px; height: 90px; left: 1031px; top: 618px; position: absolute; border-radius: 15px" src="uploads/foto2.png" />
  <div class="Rectangle62" style="width: 193px; height: 77px; left: 1174px; top: 624px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div>
  <div class="Agust2024" style="width: 135px; height: 39px; left: 1187px; top: 614px; position: absolute; color: black; font-size: 15px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">02 Agust 2024</div>
  <div class="UntukMencerahkanKulitSecaraAlamiAdaBeberapaMetodeYangBisaDilakukanTanpaMenggunakanBahanKimiaBerbahayaPertamaMenjagaKebersihanKulitDenganRutinMembersihkanWajahAgarKotoranDanMinyakTidakMenumpukDanMenyebabkanKulitKusamKeduaGunakanBahanBahanAlamiSepertiBengkoangLemonAtauMaduYangDiketahuiMemilikiManfaatUntukMencerahkanKulitSelainItuMenjagaPolaMakanYangSehatDenganBanyakMengonsumsiBuahDanSayuranSertaCukupMinumAirPutihJugaBerperanPentingDalamMenjagaKulitTetapCerahDanSehatJanganLupaUntukSelaluMenggunakanTabirSuryaSaatBeraktivitasDiLuarRuanganUntukMelindungiKulitDariPaparanSinarUvYangDapatMenyebabkanKulitGelap" style="width: 806px; height: 586px; left: 108px; top: 1204px; position: absolute; text-align: justify; color: black; font-size: 30px; font-family: Poppins; font-weight: 300; line-height: 30px; word-wrap: break-word">Untuk mencerahkan kulit secara alami, ada beberapa metode yang bisa dilakukan tanpa menggunakan bahan kimia berbahaya. Pertama, menjaga kebersihan kulit dengan rutin membersihkan wajah, agar kotoran dan minyak tidak menumpuk dan menyebabkan kulit kusam. Kedua, gunakan bahan-bahan alami seperti bengkoang, lemon, atau madu yang diketahui memiliki manfaat untuk mencerahkan kulit. Selain itu, menjaga pola makan yang sehat dengan banyak mengonsumsi buah dan sayuran, serta cukup minum air putih, juga berperan penting dalam menjaga kulit tetap cerah dan sehat. Jangan lupa untuk selalu menggunakan tabir surya saat beraktivitas di luar ruangan untuk melindungi kulit dari paparan sinar UV yang dapat menyebabkan kulit gelap.</div>
  <div class="Agust2024" style="left: 108px; top: 995px; position: absolute; text-align: justify; color: black; font-size: 20px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">10 Agust 2024</div>
  <div class="Group68" style="width: 336px; height: 105px; left: 1031px; top: 789px; position: absolute">
    <img class="Image6" style="width: 146px; height: 105px; left: 0px; top: 0px; position: absolute; border-radius: 20px" src="uploads/foto3.png" />
    <div class="Rectangle63" style="width: 193px; height: 86px; left: 143px; top: 10px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)"></div>
  </div>
  <div class="Footer" style="width: 1442px; height: 105px; left: 0px; top: 1914px; position: absolute; background: #E3D2C0; border-top: 1px rgba(255, 255, 255, 0.17) solid">
    <div class="Copyright2024JoyfullCrunchDesignByJoyfullCrunch" style="width: 443.35px; height: 19.50px; left: 320px; top: 39.25px; position: absolute; color: #FDFCE8; font-size: 13px; font-family: DM Sans; font-weight: 400; line-height: 19.50px; word-wrap: break-word">Copyright © 2024 GlowKoang,  Design by GlowKoang</div>
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
  <div class="BeginiUrutanDan" style="width: 186px; height: 26px; left: 1187px; top: 842px; position: absolute; text-align: center; color: black; font-size: 17px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">“Begini Urutan dan....</div>
  <div class="Agust2024" style="width: 135px; height: 39px; left: 1187px; top: 789px; position: absolute; color: black; font-size: 15px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">24 Agust 2024</div>

  </div>
  <div class="TernyataIni7Keg" style="width: 193px; height: 26px; left: 1180px; top: 660px; position: absolute; text-align: center; color: black; font-size: 17px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">“Ternyata, Ini 7 Keg....</div>
  <div class="ArtikelGlowkoang" style="left: 563px; top: 168px; position: absolute"><span style="color: white; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Artikel </span><span style="color: #FF7B00; font-size: 35px; font-family: Poppins; font-weight: 400; line-height: 57.60px; word-wrap: break-word">GlowKoang</span></div>
  <div class="Frame306" style="width: 876px; height: 37px; left: 530px; top: 7px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
    </div>
  </div>
</div>
</body>
</html>