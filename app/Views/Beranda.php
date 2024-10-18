<!DOCTYPE html>
<lang lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
        
        /*desk tampilan awal*/
        .Image6 {
    width: 1530px;
    height: 826px;
    position: absolute;
    left: 0px;
    top: 0px;
}

.Rectangle47 {
    width: 1530px;
    height: 826px;
    position: absolute;
    left: 0px;
    top: 0px;
    background: rgba(0, 0, 0, 0.25);
}

.Group63 {
    width: 637px;
    height: 227.03px;
    position: absolute;
    left: 237px;
    top: 359px;
}

.desk{
    width: 637px;
    height: 163px;
    position: absolute;
    left: 0px;
    top: 64.03px;
    text-align: justify;
    color: white;
    font-size: 20px;
    font-family: Poppins;
    font-weight: 500;
    line-height: 24px;
    word-wrap: break-word;
}

.WelcomeTo {
    width: 288.18px;
    height: 23.59px;
    position: absolute;
    left: 0px;
    top: 0px;
    color: black;
    font-size: 40px;
    font-family: Poppins;
    font-weight: 500;
    line-height: 24px;
    word-wrap: break-word;
}

.Glowkoang {
    width: 200px;
    height: 23.59px;
    position: absolute;
    left: 230px;
    top: 0.03px;
    color: #FF7B00;
    font-size: 40px;
    font-family: Poppins;
    font-weight: 500;
    line-height: 24px;
    word-wrap: break-word;
}
    </style>
    </head>
    <body>
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
<div class="HalamanBeranda" style="width: 1440px; height: 4464px; position: relative">
  <div class="Rectangle80" style="width: 196px; height: 64px; left: 514px; top: 3813px; position: absolute; background: #E4D6CF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px"></div>
  <div class="bgluar" style="width: 1439px; height: 912px; left: 0px; top: 3209px; position: absolute; background: white"></div>
  <div class="Rectangle46" style="width: 1440px; height: 69px; left: 0px; top: 0px; position: absolute; background: white"></div>
  <div class="bgAktifitas" style="width: 1450px; height: 392px; left: 39px; top: 3295px; position: absolute; background: #E2CEB1; border-radius: 25px"></div>
  <div class="Ellipse5" style="width: 478px; height: 389px; left: -183px; top: 1581px; position: absolute; background: #D9D9D9; border-radius: 9999px"></div>
  <div class="Rectangle48" style="width: 1437px; height: 1433px; left: 0px; top: 1776px; position: absolute; background: white"></div>
  <div class="Vector produk" style="width: 1530px; height: 250px; left: 0px; top: 3000px; position: absolute; background: rgba(250, 229, 198, 0.80)"></div>
  <div class="desk1" style="width: 693px; height: 183px; left: 500px; top: 2000px; position: absolute; text-align: center; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
  <div class="desk2" style="width: 675px; height: 180px; left: 282px; top: 2420px; position: absolute; text-align: center; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
  <div class="desk3" style="width: 690px; height: 157px; left: 572px; top: 2820px; position: absolute; text-align: center; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
  <div class="bg1" style="width: 298px; height: 303px; left: 151px; top: 1939px; position: absolute; background: #D8CBC4; border-radius: 9999px"></div>
  <img class="citra" style="width: 259px; height: 300px; left: 210px; top: 1959px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px" alt="gambar cintra" src="uploads/citra.png" />
  <div class="Group109" style="width: 310px; height: 344px; left: 1010px; top: 2335px; position: absolute">
    <div class="bg2" style="width: 298px; height: 303px; left: 12px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 9999px"></div>
    <img class="ovale" style="width: 267px; height: 300px; left: 0px; top: 44px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px" alt="gambar ovale" src="uploads/ovale.png" />
  </div>
  <div class="Group108" style="width: 326px; height: 374px; left: 163px; top: 2767px; position: absolute">
    <div class="bg3" style="width: 298px; height: 295px; left: 0px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 9999px"></div>
    <img class="pelembab" style="width: 277px; height: 300px; left: 49px; top: 29px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px" alt="gambar pelembab" src="uploads/pelembab.png" />
  </div>
  <div class="Group80" style="width: 1443px; height: 881px; left: -3px; top: 895px; position: absolute">
    <div class="strip" style="width: 1440px; height: 881px; left: 0px; top: 0px; position: absolute; background: rgba(255, 255, 255, 0.90)"></div>
    <div class="Group62" style="width: 406px; height: 291.77px; left: 151px; top: 324px; position: absolute">
      <img class="gdesk1" style="width: 308.94px; height: 170.08px; left: 0px; top: 0px; position: absolute; border-radius: 15px" alt="gambar desk1" src="uploads/gambardes1.png" />
      <img class="gdesk2" style="width: 261.32px; height: 190.82px; left: 144.68px; top: 100.94px; position: absolute; border-radius: 15px" alt="gambar desk2" src="uploads/gambardes2.png" />
    </div>
    <div class="penjelasan" style="width: 728px; height: 517px; left: 617px; top: 276px; position: absolute; text-align: justify; color: black; font-size: 20px; font-family: Petrona; font-weight: 300; line-height: 30px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<br/>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</div>
    <div class="Vector" style="width: 1530px; height: 150px; left: 4px; top: -150px; position: absolute; background: #B6A99B"></div>
    <div class="TentangKami" style="width: 257px; height: 52.97px; left: 880px; top: 120px; position: absolute; color: black; font-size: 38px; font-family: Inika; font-weight: 400; line-height: 57.60px; word-wrap: break-word">Tentang Kami</div>
  </div>
  
    </div>
  </div>
  <div class="Rectangle76" style="width: 400px; height: 100px; left: 800px; top: 1785px; position: absolute; background: #EDB27A; border-radius: 30px"></div>
  <div class="ProdukGlowkoang" style="width: 392px; height: 52.54px; left: 850px; top: 1803px; position: absolute"><span style="color: black; font-size: 40px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">Produk</span><span style="color: #FF7B00; font-size: 40px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word"> GlowKoang</span></div>
  <div class="Rectangle72" style="width: 314px; height: 494px; left: 38px; top: 3465px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
  <div class="Rectangle70" style="width: 306px; height: 494px; left: 755px; top: 3465px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
  <div class="Rectangle73" style="width: 306px; height: 494px; left: 1093px; top: 3465px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
  <div class="Rectangle82" style="width: 196px; height: 64px; left: 1146px; top: 3813px; position: absolute; background: #E4D6CF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px"></div>
  <img class="influencer" style="width: 200px; height: 285px; left: 805px; top: 3492px; position: absolute" alt="gambar influe" src="uploads/influe.png" />
  <img class="Testi" style="width: 266px; height: 296px; left: 60px; top: 3485px; position: absolute" alt="gambar testi" src="uploads/testi.png" />
  <div class="Rectangle71" style="width: 335px; height: 494px; left: 382px; top: 3465px; position: absolute; background: #D8CBC4; border-radius: 30px"></div>
  <div class="Rectangle79" style="width: 309px; height: 64px; left: 395px; top: 3813px; position: absolute; background: #E4D6CF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px"></div>
  <div class="UjiKelayakanProduk" style="width: 288px; height: 49px; left: 411px; top: 3821px; position: absolute; text-align: justify; color: black; font-size: 30px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">Uji  Kelayakan Produk</div>
  <div class="Rectangle81" style="width: 223px; height: 64px; left: 805px; top: 3813px; position: absolute; background: #E4D6CF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px"></div>
  <div class="Influencer" style="left: 820px; top: 3817px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">INFLUENCER</div>
  <img class="uji" style="width: 230px; height: 277px; left: 436px; top: 3504px; position: absolute" alt="gambar uji" src="uploads/uji.png" />
  <img class="promo" style="width: 231px; height: 265px; left: 1130px; top: 3492px; position: absolute" alt="gambar promo" src="uploads/promo.png" />
  <div class="Promo" style="left: 1185px; top: 3817px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">PROMO</div>
  <div class="Line11" style="width: 146px; height: 0px; left: 906px; top: 1145px; position: absolute; border: 5px black solid"></div>
  <div class="Rectangle78" style="width: 196px; height: 64px; left: 100px; top: 3813px; position: absolute; background: #E4D6CF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px"></div>
  <div class="Testimoni" style="left: 105px; top: 3813px; position: absolute; text-align: justify; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">TESTIMONI</div>
  <div class="Group110" style="width: 339px; height: 73px; left: 210px; top: 2572px; position: absolute">
    <div class="Rectangle83" style="width: 300px; height: 73px; left: 20px; top: 130px; position: absolute; background: #EDB27A; border-radius: 30px"></div>
    <div class="BacaSelengkapnya2" style="left: 58px; top: 150px; position: absolute; color: black; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Baca selengkapnya ....</div>
  </div>
  <div class="Group112" style="width: 339px; height: 73px; left: 891px; top: 3035px; position: absolute">
    <div class="Rectangle83" style="width: 300px; height: 73px; left: 20px; top: 60px; position: absolute; background: #EDB27A; border-radius: 30px"></div>
    <div class="BacaSelengkapnya3" style="left:58px; top: 80px; position: absolute; color: black; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Baca selengkapnya ....</div>
  </div>
  <div class="Group111" style="width: 339px; height:310px73px; left: 876px; top: 2159px; position: absolute">
    <div class="Rectangle83" style="width: 300px; height: 73px; left: 20px; top: 100px; position: absolute; background: #EDB27A; border-radius: 30px"></div>
    <div class="BacaSelengkapnya1" style="left: 58px; top: 120px; position: absolute; color: black; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Baca selengkapnya ....</div>
  </div>
  <div class="Group114" style="left: 531px; top: 3322px; position: absolute">
    <div class="Glowkoang" style="left: 173px; top: 50px; position: absolute; text-align: justify; color: #FF7B00; font-size: 35px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">GlowKoang</div>
    <div class="Aktivitas" style="left: 0px; top: 50px; position: absolute; text-align: justify; color: black; font-size: 35px; font-family: Poppins; font-weight: 500; line-height: 57.60px; word-wrap: break-word">Aktivitas</div>
  </div>
          <div class="Vector" style="width: 14px; height: 9px; left: 57px; top: 16px; position: absolute; background: black"></div>
        </div>
      </div>
    </div>
    <img class="Image6" src="uploads/bg.png" alt="Background Image">
    <div class="Rectangle47"></div>
    <div class="Group63">
      <div class="desk">Selamat datang di Glowkoang, di mana rahasia kecantikan alami bertemu dengan inovasi modern. Terinspirasi dari keajaiban bengkoang, kami hadirkan rangkaian produk kecantikan yang tidak hanya merawat, tetapi juga mencerahkan kulit Anda dengan cara alami. Temukan kilau alami Anda bersama Glowkoang</div>
      <div class="WelcomeTo">Welcome to</div>
      <div class="Glowkoang">GlowKoang</div>
    </div>
  </div>
  <div class="Group100" style="width: 1440px; height: 335px; left: 0px; top: 4129px; position: absolute">
    <div class="Frame307" style="width: 1530px; height: 335px; left: 0px; top: 0px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
      <div class="Group99" style="width: 1530px; height: 335px; position: relative">
        <div class="Rectangle73" style="width: 1440px; height: 335px; left: 0px; top: 0px; position: absolute; opacity: 0.90; background: #DBC5AE"></div>
        <div class="ContactUs" style="width: 123px; left: 1043px; top: 24px; position: absolute; text-align: justify; color: white; font-size: 25px; font-family: Petrona; font-weight: 600; line-height: 57.60px; word-wrap: break-word">Contact Us</div>
        <div class="62852253734374" style="width: 220px; height: 58px; left: 1083px; top: 87px; position: absolute; text-align: justify; color: white; font-size: 20px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">+62 852 253 734 374</div>
        <div class="GlowkoangGmailCom" style="width: 202px; left: 1092px; top: 116px; position: absolute; text-align: justify; color: white; font-size: 20px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">GlowKoang@gmail.com</div>
        <img class="Telp" style="width: 28px; height: 19px; left: 1029px; top: 109px; position: absolute" alt="gambar telp" src="uploads/Ringer Volume.png" />
        <img class="Pesan" style="width: 28px; height: 19px; left: 1029px; top: 141px; position: absolute" alt="gambar pesan" src="uploads/letter.png" />
        <img class="Twitter" style="width: 45px; height: 40px; left: 1102px; top: 205px; position: absolute" alt="gambar twitter" src="uploads/twitter.png" />
        <img class="Facebook" style="width: 45px; height: 40px; left: 1057px; top: 206px; position: absolute" alt="gambar fb" src="uploads/link.png" />
        <img class="Instagram" style="width: 45px; height: 40px; left: 1147px; top: 206px; position: absolute" alt="gambar ig" src="uploads/instagram.png" />
        <img class="Youtube" style="width: 45px; height: 40px; left: 1192px; top: 206px; position: absolute" alt="gambar ytb" src="uploads/youtube.png" />
        <div class="TandaAir" style="width: 443.35px; height: 19.50px; left: 586px; top: 299px; position: absolute; color: white; font-size: 13px; font-family: DM Sans; font-weight: 400; line-height: 19.50px; word-wrap: break-word">Copyright © 2024 GlowKoang,  Design by GlowKoang</div>
      </div>
    </div>
    <div class="Group99" style="width: 903px; height: 263px; left: 68px; top: 23px; position: absolute">
      <div class="Glowkoang" style="width: 199px; height: 42px; left: 17px; top: 5px; position: absolute; color: white; font-size: 25px; font-family: Poppins; font-weight: 600; word-wrap: break-word">GlowKoang</div>
      <div class="SubscribeNow" style="width: 210px; height: 34px; left: 16px; top: 120px; position: absolute; text-align: justify; color: white; font-size: 25px; font-family: Petrona; font-weight: 500; line-height: 57.60px; word-wrap: break-word">Subscribe Now</div>
      <div class="Rectangle74" style="width: 133px; height: 47px; left: 17px; top: 216px; position: absolute; background: white; border-radius: 10px"></div>
      <div class="Subscribe" style="width: 109px; height: 47px; left: 29px; top: 216px; position: absolute; text-align: justify; color: #B6A99B; font-size: 25px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">Subscribe</div>
      <div class="HomeAboutUsProductAktifitas" style="width: 124px; height: 42px; left: 779px; top: 117px; position: absolute; text-align: justify; color: white; font-size: 20px; font-family: Poppins; font-weight: 275; line-height: 35px; word-wrap: break-word">Home<br/>About Us<br/>Product<br/>Aktifitas</div>
      <div class="OurServices" style="width: 143px; left: 753px; top: 0px; position: absolute; text-align: justify; color: white; font-size: 25px; font-family: Petrona; font-weight: 600; line-height: 57.60px; word-wrap: break-word">Our Services</div>
      <div class="HomeAboutUsProductAktifitas" style="width: 124px; height: 42px; left: 545px; top: 117px; position: absolute; text-align: justify; color: white; font-size: 20px; font-family: Poppins; font-weight: 275; line-height: 35px; word-wrap: break-word">Home<br/>About Us<br/>Product<br/>Aktifitas</div>
      <div class="Information" style="width: 139px; left: 538px; top: 0px; position: absolute; text-align: justify; color: white; font-size: 25px; font-family: Petrona; font-weight: 600; line-height: 57.60px; word-wrap: break-word">Information</div>
      <div class="DapatkanKulitGlowingDanSehatDenganManfaatAlamiBengkoangCerahkanKulitSecaraAlamiPercayaDiriBersinarSetiapHari" style="width: 426px; height: 53px; left: 16px; top: 53px; position: absolute; color: white; font-size: 13px; font-family: Poppins; font-weight: 275; word-wrap: break-word">Dapatkan Kulit Glowing dan Sehat dengan Manfaat Alami Bengkoang. Cerahkan Kulit Secara Alami,      Percaya Diri Bersinar Setiap Hari</div>
      <div class="EnterYourEmail" style="width: 243px; height: 54px; left: 50px; top: 148px; position: absolute; text-align: justify; color: white; font-size: 20px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">Enter your Email</div>
      <img class="Letter" style="width: 28px; height: 19px; left: 20px; top: 170px; position: absolute" alt="gambar pesan" src="uploads/Letter.png" />
      <div class="Line9" style="width: 210px; height: 0px; left: 16px; top: 198px; position: absolute; border: 1px white solid"></div>
    </div>
  </div>
</div>
</body>
</lang>