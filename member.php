<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laundry</title>
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<style>
    body {
      background-image: url("assets/foto/Gelombang.png"), url("assets/foto/b3e0ff.png");
  }
  </style>
<body>
    <section class="header">

    <a href="index.php" class = "logo"><img src="assets/Group 2.png" alt="GoLaundry"></a>

    <nav class="navbar">
        <a href="index.php">beranda</a>
        <a href="harga.php">harga</a>
        <a href="pemesanan.php">pemesanan</a>
        <a href="member.php">member</a>
        <a href="about.php">tentang kami</a>
        <a class='fas fa-bell'Notification Icon id="notif-icon">
        </a>
        <a class="promo-dropdown" id="promo-dropdown">
            <span class="close-btn">&times;</span>
            <h2>Promo Spesial!</h2>
            <p>Dapatkan diskon hingga 50% untuk pelanggan member baru   </p>
        </a>
    </nav>


    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="heading" style="background:url(assets/foto/Header\ Page\ Member.png) no-repeat">
        <h1>Dapatkan Promo Menarik Menggunakan Member Card</h1>
    </div>
    
    <section class="member">

        <h1 class="heading-title">Formulir Join Member Go Laundry</h1>
        <form action="mysqlmember.php" method="post" class="member-form">
        <div class="flex">
            <div class="inputBox">
                <span>nama depan:</span>
                <input type="text" name="nama_depan" placeholder="isi nama depanmu" required>
                <div class="error-message"></div>
            </div>
            <div class="inputBox">
                <span>nama belakang:</span>
                <input type="text" name="nama_belakang" placeholder="isi nama belakangmu" required>
                <div class="error-message"></div>
            </div>
            <div class="inputBox">
                <span>NIK :</span>
                <input type="tel" id="nik" name="nik" placeholder="isi NIKmu" pattern="[0-9]{16}" required>
                <div id="nik-error" class="error-message"></div>
            </div>
            <div class="inputBox">
                <span>no. hp :</span>
                <input type="tel" name="no_hp" id="phone" placeholder="isi no.hpmu" pattern="[0-9]{12}" required>
                <div class="error-message"></div>
            </div>
            <div class="inputBox">
                <span>alamat :</span>
                <input type="text" name="alamat" placeholder="isi alamatmu" required>
                <div class="error-message"></div>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" name="email" placeholder="email" required>
                <div class="error-message"></div>
            </div>
            <div class="inputBox">
                <span>upload KTP :</span>
                <input type="file" name="ktp" required>
                <div class="error-message"></div>
            </div>
        </div>

        <input type="submit" value="Kirim" class="btn" name="submit">
    </form>
    </section>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>menu</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i>beranda</a>
                <a href="contact.php"><i class="fas fa-angle-right"></i>kontak</a>
                <a href="member.php"><i class="fas fa-angle-right"></i>member</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>tentang kami</a>
            </div>

            <div class="box">
                <h3>contact us</h3>
                <a href="https://www.instagram.com/golaundry.ptk/"><i class="fab fa-instagram"></i>GoLaundryPtk</a>
                <a href="https://wa.me/628999826888"><i class="fas fa-phone"></i>+62-899-982-6888</a>
                <a href="https://maps.app.goo.gl/PbD49EBBFokFCxwm7"><i class="fas fa-location-dot"></i>Jl. Budi Karya No. B3 </a>
            </div>
        </div>

        <div class="copyright">
            <span>copyright &copy; Go Laundry</span>
        </div>
    </section>    
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/member.js"></script>

</body>
</html>
