<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk1</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            width: 100%;
            max-width: 1442px;
            margin: 0 auto;
            position: relative;
            background-color: white;
            height: 1006px;
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
        .ellipse {
            width: 367px;
            height: 452px;
            background-color: #D8CBC4;
            border-radius: 50%;
            position: absolute;
            top: 349px;
            left: 80px;
        }
        .product-image {
            position: absolute;
            top: 391px;
            left: 154px;
            width: 258px;
            height: 369px;
            border-radius: 25px;
        }
        .product-title {
            position: absolute;
            top: 376px;
            left: 590px;
            font-size: 45px;
            color: black;
        }
        .product-description {
            position: absolute;
            top: 480px;
            left: 551px;
            width: 500px; /* Set a fixed width for better alignment */
            font-size: 30px;
            color: black;
            text-align: justify;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 90px;
            background-color: #E1CFBD;
            border-top: 1px solid rgba(255, 255, 255, 0.17);
            display: flex;
            justify-content: space-between; /* Align items in footer */
            align-items: center; /* Center vertically */
            padding: 0 20px; /* Padding for spacing */
        }
        .copyright {
            font-size: 13px;
            color: #FDFCE8;
        }
        .social-links {
            display: flex;
        }
        .social-links img {
            width: 32px; /* Set width for social icons */
            height: 32px; /* Set height for social icons */
            margin-left: 10px; /* Spacing between icons */
            border-radius: 16px; /* Optional: round the corners */
        }
        .navbar {
            position: absolute;
            top: 0;
            right: 0;
            left: 539px;
            display: flex;
            justify-content: space-between;
            width: 820px;
            margin-top: 20px; /* Adding margin-top for spacing */
        }
        .navbar div {
            font-size: 20px;
            color: black;
            cursor: pointer;
        }
        .logo {
            position: absolute;
            top: 3px;
            left: 152px;
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 56px;
            height: 45px;
        }
        .logo span {
            font-size: 25px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="uploads/Group 65.png" alt="">
        <div class="header-overlay"></div>
    </div>

    <div class="ellipse"></div>

    <img class="product-image" src="uploads/2449009337-removebg-preview.png" alt="Product Image">

    <div class="product-title">Citra Body Lotion</div>
    <div class="product-description">
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
    </div>

    <div class="footer">
        <div class="copyright">
            Copyright © 2024 GlowKoang, Design by GlowKoang
        </div>
        <div class="social-links">
            <img src="uploads/Link.png" alt="Facebook Icon">
            <img src="uploads/instagram.png" alt="Instagram Icon">
            <img src="uploads/twitter.png" alt="Twitter Icon">
            <img src="uploads/youtube.png" alt="Youtube Icon">
        </div>
    </div>

    <div class="navbar">
        <div>Beranda</div>
        <div>Tentang</div>
        <div>Artikel</div>
        <div>Produk</div>
        <div>Aktivitas</div>
        <div>Kontak</div>
        <div>Bahasa</div>
    </div>

    <div class="logo">
        <img src="uploads/logo.png" alt="Logo">
        <span>GlowKoang</span>
    </div>
</div>

</body>
</html>
