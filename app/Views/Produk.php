<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
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
<body>
    <div class="Produk" style="width: 1440px; height: 1143px; position: relative; background: white;">
        <div class="Group61" style="width: 1440px; height: 1024px; position: absolute;">
            <div class="Rectangle50" style="width: 1440px; height: 1024px; background: white;"></div>
            <img class="Image4" style="width: 1440px; height: 267px; position: absolute; top: 83px;" src="uploads/Group 117.png" />
            <div class="Rectangle51" style="width: 1440px; height: 272px; position: absolute; top: 78px; background: rgba(0, 0, 0, 0.40);"></div>
        </div>

        <div class="Group75" style="width: 1239px; height: 454.37px; position: absolute; top: 485px; left: 100px;">
    <div class="Group71" style="width: 269px; height: 454.37px; position: absolute; top: 0; left: 970px;">
        <div class="Rectangle16" style="width: 269px; height: 131.05px; position: absolute; top: 323.32px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;"></div>
        <img class="Image" style="width: 269px; height: 366.36px; position: absolute; top: 0;" src="uploads/pelembab.png" />
        <div class="Rectangle17" style="width: 189.22px; height: 68.87px; position: absolute; top: 331.93px; left: 39.89px; background: white; border-radius: 15px; border: 5px #F8EDE3 solid; display: flex; justify-content: center; align-items: center;">
            <div class="CitraBodyLotion" style="color: black; font-size: 15px; font-family: Inter; font-weight: 400; text-align: center;">Citra Body Lotion</div>
        </div>
    </div>

    <div class="Group73" style="width: 345px; height: 454.37px; position: absolute; top: 0;">
        <div class="Rectangle10" style="width: 345px; height: 131.05px; position: absolute; top: 323.32px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;"></div>
        <img class="Image" style="width: 345px; height: 374.02px; position: absolute; top: 0; border-radius: 20px;" src="uploads/citra.png" />
        <div class="Rectangle11" style="width: 185px; height: 68.87px; position: absolute; top: 331.93px; left: 80px; background: white; border-radius: 15px; border: 5px #F8EDE3 solid; display: flex; justify-content: center; align-items: center;">
            <div class="VivaPelembab" style="color: rgba(8, 0, 94, 0.70); font-size: 16px; font-family: Inter; font-weight: 500; text-align: center;">Viva Pelembab</div>
        </div>
    </div>

    <div class="Group72" style="width: 311px; height: 454.37px; position: absolute; top: 0; left: 502px;">
        <div class="Rectangle12" style="width: 311px; height: 131.05px; position: absolute; top: 323.32px; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;"></div>
        <img class="Image" style="width: 311px; height: 366.36px; position: absolute; top: 0;" src="uploads/ovale.png" />
        <div class="Rectangle14" style="width: 185px; height: 68.87px; position: absolute; top: 331.93px; left: 63px; background: white; border-radius: 15px; border: 5px #F8EDE3 solid; display: flex; justify-content: center; align-items: center;">
            <div class="OvaleFacialLotion" style="color: black; font-size: 14px; font-family: Inter; font-weight: 400; text-align: center;">Ovale Facial Lotion</div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="Footer" style="width: 1442px; height: 90px; left: 0px; top: 1046px; position: absolute; background: rgba(222, 202, 182, 0.90); border-top: 1px rgba(255, 255, 255, 0.17) solid">
    <div class="Copyright2024JoyfullCrunchDesignByJoyfullCrunch" style="width: 443.35px; height: 19.50px; left: 320px; top: 39.25px; position: absolute; color: #FDFCE8; font-size: 13px; font-family: DM Sans; font-weight: 400; line-height: 19.50px; word-wrap: break-word">
        Copyright © 2024 GlowKoang, Design by GlowKoang
    </div>
    
    <div class="Link" style="width: 32px; height: 32px; left: 1218px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/link.png" alt="Icon 1" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>
    
    <div class="Link" style="width: 32px; height: 32px; left: 1255px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/twitter.png" alt="Icon 2" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>
    
    <div class="Link" style="width: 32px; height: 32px; left: 1292px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/instagram.png" alt="Icon 3" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>
    

    <div class="Link" style="width: 32px; height: 32px; left: 1329px; top: 33px; position: absolute; justify-content: center; align-items: center;">
        <img src="uploads/youtube.png" alt="Icon 4" style="width: 100%; height: 100%; border-radius: 16px;">
    </div>
</div>


        <div class="ProdukGlowkoang" style="position: absolute; top: 185px; left: 574px; font-size: 35px; font-family: Poppins;">
            <span style="color: white;">Produk </span><span style="color: #FF7B00;">GlowKoang</span>
        </div>

      
    </div>
</body>
</html>
