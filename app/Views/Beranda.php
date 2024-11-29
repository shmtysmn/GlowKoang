<!DOCTYPE html>
<lang lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda</title>
        <meta name="title" content="GlowKoang - Beranda">
        <meta name="description" content="">

        <!-- Canonical Tag -->
        <link rel="canonical" href="<?= current_url() ?>">
        <style>
            /* Resetting some default styles */
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: 'Petrona', sans-serif;
                padding-top: 60px;
                /* Adjusted to avoid content hiding behind the navbar */
            }

            /* Navbar styling */
            .navbar {
                width: 100%;
                height: 60px;
                position: absolute;
                /* Navbar tetap berada di atas */
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
                right: 0;
                /* Geser dropdown ke kiri dari sisi kanan */
                background-color: white;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
                min-width: 120px;
                /* Atur lebar minimum dropdown supaya tidak mepet */
                padding: 12px 0;
                /* Tambahkan padding pada konten dropdown */
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

            .hamburger {
                display: none;
                /* Sembunyikan hamburger di desktop */
                cursor: pointer;
                font-size: 24px;
                margin-left: auto;
                /* Pindahkan hamburger ke kanan */
            }

            .nav-links {
                display: flex;
                /* Menampilkan menu dalam baris */
            }

            .nav-links a {
                margin-left: 20px;
                /* Jarak antar link */
            }

            /* Media query untuk tampilan mobile */
            @media (max-width: 768px) {
                .hamburger {
                    display: block;
                    /* Tampilkan hamburger di mobile */
                }

                .nav-links {
                    display: none;
                    /* Sembunyikan menu di mobile secara default */
                    flex-direction: column;
                    /* Tampilkan menu dalam kolom */
                    position: absolute;
                    /* Posisi menu relatif terhadap navbar */
                    top: 60px;
                    /* Sesuaikan dengan tinggi navbar */
                    left: 0;
                    background-color: white;
                    /* Warna latar belakang menu */
                    width: 100%;
                    /* Lebar menu */
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    /* Bayangan untuk menu */
                }

                .nav-links.active {
                    display: flex;
                    /* Tampilkan menu saat aktif */
                }

                .nav-links a {
                    margin: 10px 0;
                    /* Jarak antar link di menu mobile */
                    padding: 10px;
                    /* Padding untuk link */
                }
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

            /* Logo styles */
            .logo {
                position: absolute;
                top: 15px;
                left: 5%;
                display: flex;
                align-items: center;
            }

            /* Responsive logo size */
            .logo img {
                width: 40px;
                height: 30px;
            }

            /* Text center styles */
            .text-center {
                text-align: center;
                color: black;
                font-size: 1.2rem;
                line-height: 1.5;
                margin: 20px 0;
            }

            /*desk tampilan awal*/
            .Image6 {
                width: 100%;
                height: 826px;
                position: absolute;
                left: 0px;
                top: 0px;
            }

            .Rectangle47 {
                width: 100%;
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

            .desk {
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

            /* bagian footer */
            .Group100 {
                width: 100%;
                height: 335px;
                left: 0px;
                top: 4129px;
                position: absolute;
            }

            .Group99 {
                width: 100%;
                height: 335px;
                position: relative;
            }

            .Rectangle73 {
                width: 100%;
                height: 335px;
                left: 0px;
                top: 0px;
                position: absolute;
                opacity: 0.90;
                background: #DBC5AE;
            }

            .ContactUs {
                width: 123px;
                left: 1043px;
                top: 0px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 25px;
                font-family: Petrona;
                font-weight: 600;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .PhoneNumber {
                width: 220px;
                height: 58px;
                left: 1083px;
                top: 40px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 20px;
                font-family: Petrona;
                font-weight: 300;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .GlowkoangEmail {
                width: 202px;
                left: 1092px;
                top: 116px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 20px;
                font-family: Petrona;
                font-weight: 300;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .Telp,
            .Pesan,
            .Twitter,
            .Facebook,
            .Instagram,
            .Youtube {
                position: absolute;
            }

            .Telp {
                width: 28px;
                height: 19px;
                left: 1029px;
                top: 109px;
            }

            .Pesan {
                width: 28px;
                height: 19px;
                left: 1029px;
                top: 141px;
            }

            .Twitter {
                width: 45px;
                height: 40px;
                left: 1102px;
                top: 265px;
            }

            .Facebook {
                width: 45px;
                height: 40px;
                left: 1057px;
                top: 265px;
            }

            .Instagram {
                width: 45px;
                height: 40px;
                left: 1147px;
                top: 265px;
            }

            .Youtube {
                width: 45px;
                height: 40px;
                left: 1192px;
                top: 265px;
            }

            .TandaAir {
                width: 443.35px;
                height: 19.50px;
                left: 586px;
                top: 285px;
                position: absolute;
                color: white;
                font-size: 13px;
                font-family: DM Sans;
                font-weight: 400;
                line-height: 19.50px;
                word-wrap: break-word;
            }

            .Glowkoangfooter {
                width: 199px;
                height: 42px;
                left: 25px;
                top: 20px;
                position: absolute;
                color: white;
                font-size: 25px;
                font-family: Poppins;
                font-weight: 600;
                word-wrap: break-word;
            }

            .SubscribeNow {
                width: 210px;
                height: 34px;
                left: 25px;
                top: 180px;
                position: absolute;
                color: white;
                font-size: 25px;
                font-family: Poppins;
                font-weight: 600;
                word-wrap: break-word;
            }

            .Rectangle74 {
                width: 133px;
                height: 47px;
                left: 17px;
                top: 270px;
                position: absolute;
                background: white;
                border-radius: 10px;
            }

            .Subscribe {
                width: 109px;
                height: 47px;
                left: 29px;
                top: 265px;
                position: absolute;
                text-align: justify;
                color: #B6A99B;
                font-size: 25px;
                font-family: Petrona;
                font-weight: 300;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .HomeAboutUsProductAktifitas {
                width: 124px;
                height: 42px;
                left: 779px;
                top: 80px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 20px;
                font-family: Poppins;
                font-weight: 275;
                line-height: 35px;
                word-wrap: break-word;
            }

            .HomeAboutUsProductAktifitas1 {
                width: 124px;
                height: 42px;
                left: 550px;
                top: 80px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 20px;
                font-family: Poppins;
                font-weight: 275;
                line-height: 35px;
                word-wrap: break-word;
            }

            .OurServices {
                width: 143px;
                left: 753px;
                top: 0px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 25px;
                font-family: Petrona;
                font-weight: 600;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .Information {
                width: 139px;
                left: 538px;
                top: 0px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 25px;
                font-family: Petrona;
                font-weight: 600;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .Description {
                width: 426px;
                height: 53px;
                left: 25px;
                top: 70px;
                position: absolute;
                color: white;
                font-size: 17px;
                font-family: Poppins;
                font-weight: 275;
                word-wrap: break-word;
            }

            .EnterYourEmail {
                width: 243px;
                height: 54px;
                left: 50px;
                top: 205px;
                position: absolute;
                text-align: justify;
                color: white;
                font-size: 20px;
                font-family: Petrona;
                font-weight: 300;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .Letter {
                width: 28px;
                height: 19px;
                left: 20px;
                top: 225px;
                position: absolute;
            }

            .Line9 {
                width: 210px;
                height: 0px;
                left: 16px;
                top: 250px;
                position: absolute;
                border: 1px white solid;
            }

            /* nama produk glowkoang */
            .produk-glowkoang {
                width: 392px;
                height: 52.54px;
                position: absolute;
                left: 70%;
                top: 1803px;
            }

            .produk,
            .glowkoang {
                font-size: 40px;
                font-family: Poppins, sans-serif;
                font-weight: 500;
                line-height: 57.60px;
                word-wrap: break-word;
            }

            .produk {
                color: black;
            }

            .glowkoang {
                color: #FF7B00;
            }

            /* box baca selengkapnya */
            .Group110,
            .Group112,
            .Group111 {
                width: 339px;
                height: 73px;
                position: absolute;
            }

            .Group110 {
                left: 210px;
                top: 2572px;
            }

            .Group112 {
                left: 891px;
                top: 3035px;
            }

            .Group111 {
                width: 339px;
                height: 310px;
                left: 876px;
                top: 2159px;
            }

            .Rectangle83 {
                width: 300px;
                height: 73px;
                position: absolute;
                background: #EDB27A;
                border-radius: 30px;
                left: 20px;
            }

            .Group110 .Rectangle83 {
                top: 130px;
            }

            .Group112 .Rectangle83 {
                top: 60px;
            }

            .Group111 .Rectangle83 {
                top: 100px;
            }

            .BacaSelengkapnya2,
            .BacaSelengkapnya3,
            .BacaSelengkapnya1 {
                position: absolute;
                color: black;
                font-size: 25px;
                font-family: Poppins, sans-serif;
                font-weight: 400;
                word-wrap: break-word;
                left: 58px;
            }

            .BacaSelengkapnya2 {
                top: 150px;
            }

            .BacaSelengkapnya3 {
                top: 80px;
            }

            .BacaSelengkapnya1 {
                top: 120px;
            }
            .Group103 {
            height: 494px;
            left: 84px;
            top: 3403px;
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
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
            <!-- Hamburger Menu -->
            <div class="hamburger" id="hamburger" onclick="toggleMenu()">
                &#9776; <!-- Simbol hamburger -->
            </div>


            <!-- Navigation Links -->
            <div id="nav-links" class="nav-links">
                <a href="/">Beranda</a>
                <a href="/tentang">Tentang</a>
                <a href="/artikel">Artikel</a>
                <a href="/produk">Produk</a>
                <a href="/aktivitas">Aktivitas</a>
                <a href="/kontak">Kontak</a>


            </div>
        </div>

        <div class="Rectangle80"
            style="width: 196px; height: 64px; left: 514px; top: 3813px; position: absolute; background: #E4D6CF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 15px">
        </div>
        <div class="bgluar"
            style="width: 1439px; height: 912px; left: 0px; top: 3209px; position: absolute; background: white"></div>
        <div class="Rectangle46"
            style="width: 1440px; height: 69px; left: 0px; top: 0px; position: absolute; background: white"></div>
        <div class="Ellipse5"
            style="width: 478px; height: 389px; left: -183px; top: 1581px; position: absolute; background: #D9D9D9; border-radius: 9999px">
        </div>
        <div class="Rectangle48"
            style="width: 1437px; height: 1433px; left: 0px; top: 1776px; position: absolute; background: white"></div>
        <div class="Vector produk"
            style="width: 100%; height: 250px; left: 0px; top: 3000px; position: absolute; background: rgba(250, 229, 198, 0.80)">
        </div>
        <div class="desk1"
            style="width: 693px; height: 183px; left: 500px; top: 2000px; position: absolute; text-align: center; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. </div>
        <div class="desk2"
            style="width: 675px; height: 180px; left: 282px; top: 2420px; position: absolute; text-align: center; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</div>
        <div class="desk3"
            style="width: 690px; height: 157px; left: 572px; top: 2820px; position: absolute; text-align: center; color: black; font-size: 33px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.</div>
        <div class="bg1"
            style="width: 298px; height: 303px; left: 151px; top: 1939px; position: absolute; background: #D8CBC4; border-radius: 9999px">
        </div>
        <img class="citra"
            style="width: 259px; height: 300px; left: 210px; top: 1959px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"
            alt="gambar cintra" src="uploads/citra.png" />
        <div class="Group109" style="width: 310px; height: 344px; left: 1010px; top: 2335px; position: absolute">
            <div class="bg2"
                style="width: 298px; height: 303px; left: 12px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 9999px">
            </div>
            <img class="ovale"
                style="width: 267px; height: 300px; left: 0px; top: 44px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"
                alt="gambar ovale" src="uploads/ovale.png" />
        </div>
        <div class="Group108" style="width: 326px; height: 374px; left: 163px; top: 2767px; position: absolute">
            <div class="bg3"
                style="width: 298px; height: 295px; left: 0px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 9999px">
            </div>
            <img class="pelembab"
                style="width: 277px; height: 300px; left: 49px; top: 29px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px"
                alt="gambar pelembab" src="uploads/pelembab.png" />
        </div>
        <div class="Group80" style="width: 100%; height: 881px; left: -3px; top: 895px; position: absolute">
            <div class="strip"
                style="width: 100%; height: 881px; left: 0px; top: 0px; position: absolute; background: rgba(255, 255, 255, 0.90)">
            </div>
            <div class="Group62" style="width: 406px; height: 291.77px; left: 151px; top: 324px; position: absolute">
                <img class="gdesk1"
                    style="width: 308.94px; height: 170.08px; left: 0px; top: 0px; position: absolute; border-radius: 15px"
                    alt="gambar desk1" src="uploads/gambardes1.png" />
                <img class="gdesk2"
                    style="width: 261.32px; height: 190.82px; left: 144.68px; top: 100.94px; position: absolute; border-radius: 15px"
                    alt="gambar desk2" src="uploads/gambardes2.png" />
            </div>
            <div class="penjelasan"
                style="width: 728px; height: 517px; left: 617px; top: 276px; position: absolute; text-align: justify; color: black; font-size: 20px; font-family: Petrona; font-weight: 300; line-height: 30px; word-wrap: break-word">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddo eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
                <br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </div>

            <div class="Vector"
                style="width: 100%; height: 100px; left: 3px; top: -69px; position: absolute; background: #B6A99B">
            </div>

            <!-- Membuat Tombol "Tentang Kami" -->
            <a href="/tentang" style="text-decoration: none;">
                <div class="TentangKami"
                    style="width: 257px; height: 52.97px; left: 880px; top: 120px; position: absolute; color: black; font-size: 38px; font-family: Inika; font-weight: 400; line-height: 57.60px; word-wrap: break-word;">
                    Tentang Kami
                    <div class="Line11"
                        style="width: 146px; height: 0px; left: 35px; top: 60px; position: absolute; border: 5px black solid">
                    </div>
                </div>
            </a>

        </div>
        <div class="Rectangle76"
            style="width: 400px; height: 100px; left: 68%; top: 1785px; position: absolute; background: #EDB27A; border-radius: 30px">
        </div>

        <div class="produk-glowkoang">
            <span class="produk">Produk</span>
            <span class="glowkoang">GlowKoang</span>
        </div>

        <div class="bgAktifitas"
            style="width: 90%; height: 392px; left: 80px; top: 3295px; position: absolute; background: #E2CEB1; border-radius: 25px">
        </div>
        <div class="Group103">
            <div class="Rectangle72"
                style="width: 314px; height: 494px; left: 0px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px">
            </div>
            <div class="Rectangle70"
                style="width: 306px; height: 494px; left: 721px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px">
            </div>
            <div class="Rectangle73"
                style="width: 306px; height: 494px; left: 1055px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px">
            </div>
            <div class="Rectangle71"
                style="width: 335px; height: 494px; left: 344px; top: 0px; position: absolute; background: #D8CBC4; border-radius: 30px">
            </div>
            <img class="FtInflue" style="width: 200px; height: 285px; left: 767px; top: 27px; position: absolute"
                src="uploads/influe.png" />
            <img class="FtTesti" style="width: 236px; height: 300px; left: 49px; top: 28px; position: absolute"
                src="uploads/testi.png" />
            <img class="FtPromo" style="width: 231px; height: 265px; left: 1092px; top: 27px; position: absolute"
                src="uploads/promo.png" />
            <img class="FtUji" style="width: 230px; height: 277px; left: 398px; top: 39px; position: absolute"
                src="uploads/uji.png" />
            <div class="btn4"
                style="width: 311px; height: 53px; left: 357px; top: 341px; position: absolute; background: #D8CBC4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
            </div>
            <div class="UjiKelayakanProduk"
                style="width: 355px; height: 49px; left: 374px; top: 345px; position: absolute; text-align: justify; color: black; font-size: 23px; font-family: Petrona; font-weight: 400; line-height: 30px; word-wrap: break-word">
                <a href="/aktivitas2" style="color: black; text-decoration: none;">UJI KELAYAKAN PRODUK</div>
            <div class="btn3"
                style="width: 203px; height: 49px; left: 771px; top: 345px; position: absolute; background: #D8CBC4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
            </div>
            <div class="Influencer"
                style="left: 788px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 25px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">
                <a href="/aktivitas3" style="color: black; text-decoration: none;">INFLUENCER</div>
            <div class="btn2"
                style="width: 195px; height: 49px; left: 1102px; top: 345px; position: absolute; background: #D8CBC4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
            </div>
            <div class="Promo"
                style="left: 1148px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 25px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">
                <a href="/aktivitas4" style="color: black; text-decoration: none;">PROMO</div>
            <div class="btn1"
                style="width: 160px; height: 49px; left: 68px; top: 345px; position: absolute; background: #D8CBC4; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
            </div>
            <div class="Testimoni"
                style="left: 80px; top: 341px; position: absolute; text-align: justify; color: black; font-size: 25px; font-family: Petrona; font-weight: 300; line-height: 57.60px; word-wrap: break-word">
                <a href="/aktivitas1" style="color: black; text-decoration: none;">TESTIMONI</div>
        </div> 
        <div class="Group110">
            <a href="/produk1">
                <div class="Rectangle83"></div>
                <div class="BacaSelengkapnya2">Baca selengkapnya ....</div>
            </a>
        </div>

        <div class="Group112">
            <a href="/produk1">
                <div class="Rectangle83"></div>
                <div class="BacaSelengkapnya3">Baca selengkapnya ....</div>
            </a>
        </div>

        <div class="Group111">
            <a href="/produk1">
                <div class="Rectangle83"></div>
                <div class="BacaSelengkapnya1">Baca selengkapnya ....</div>
            </a>
        </div>



        <div class="AktivitasGlowkoang"
            style="display: flex; justify-content: center; align-items: center; position: absolute; top: 3381px; left: 800px; transform: translate(-50%, -50%); font-size: 35px; font-family: Poppins;">
            <span style="color: black;">Aktivitas &nbsp;</span><span style="color: #FF7B00;">GlowKoang</span>
        </div>


        <div class="Vector"
            style="width: 14px; height: 9px; left: 57px; top: 16px; position: absolute; background: black"></div>
        </div>
        </div>
        </div>
        <img class="Image6" src="uploads/bg.png" alt="Background Image">
        <div class="Rectangle47"></div>
        <div class="Group63">
            <div class="desk">Selamat datang di Glowkoang, di mana rahasia kecantikan alami bertemu dengan inovasi
                modern. Terinspirasi dari keajaiban bengkoang, kami hadirkan rangkaian produk kecantikan yang tidak
                hanya merawat, tetapi juga mencerahkan kulit Anda dengan cara alami. Temukan kilau alami Anda bersama
                Glowkoang</div>
            <div class="WelcomeTo">Welcome to</div>
            <div class="Glowkoang">GlowKoang</div>
        </div>
        </div>
        <div class="Group100">
            <div class="Group99">
                <div class="Rectangle73"></div>
                <div class="ContactUs">Contact Us</div>
                <div class="PhoneNumber">+62 852 253 734 374</div>
                <div class="GlowkoangEmail">GlowKoang@gmail.com</div>
                <img class="Telp" alt="gambar telp" src="uploads/Ringer Volume.png" />
                <img class="Pesan" alt="gambar pesan" src="uploads/letter.png" />
                <img class="Twitter" alt="gambar twitter" src="uploads/twitter.png" />
                <img class="Facebook" alt="gambar fb" src="uploads/link.png" />
                <img class="Instagram" alt="gambar ig" src="uploads/instagram.png" />
                <img class="Youtube" alt="gambar ytb" src="uploads/youtube.png" />
                <div class="TandaAir">Copyright © 2024 GlowKoang, Design by GlowKoang</div>
                <div class="Glowkoangfooter">GlowKoang</div>
                <div class="SubscribeNow">Subscribe Now</div>
                <div class="Rectangle74"></div>
                <div class="Subscribe">Subscribe</div>
                <div class="HomeAboutUsProductAktifitas">Home<br />About Us<br />Product<br />Aktifitas</div>
                <div class="OurServices">Our Services</div>
                <div class="HomeAboutUsProductAktifitas1">Home<br />About Us<br />Product<br />Aktifitas</div>
                <div class="Information">Information</div>
                <div class="Description">Dapatkan Kulit Glowing dan Sehat dengan Manfaat Alami Bengkoang. Cerahkan Kulit
                    Secara Alami, Percaya Diri Bersinar Setiap Hari</div>
                <div class="EnterYourEmail">Enter your Email</div>
                <img class="Letter" alt="gambar pesan" src="uploads/Letter.png" />
                <div class="Line9"></div>
            </div>
        </div>
        <script>
            function toggleMenu() {
                var navLinks = document.getElementById("nav-links");
                navLinks.classList.toggle("active");
            }
        </script>
    </body>
</lang>