<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laundry</title>
    <link rel="stylesheet" href="css/Pemesanan.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body background="assets/foto/Gelombang.png">
    <section class="header">

    <a href="index.php" class = "logo"><img src="assets/Group 2.png" alt="GoLaundry"></a>

    <nav class="navbar">
        <a href="index.php">beranda</a>
        <a href="contact.php">kontak</a>
        <a href="member.php">member</a>
        <a href="about.php">tentang kami</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="login">
        <img src="Logo Login.png" alt="">
        <h3>Silakan Login member Anda</h3>
        <form action="">
              <label for="email">
                    Email:
              </label>
              <input type="email" 
                     id="email" 
                     name="email" 
                     placeholder="Masukkan Email" required>

              <label for="password">
                    Password:
              </label>
              <input type="password"
                     id="password" 
                     name="password"
                     placeholder="Masukkan password" required>

              <div class="wrap">
                    <button type="submit"
                            onclick="solve()">
                          Submit
                    </button>
              </div>
        </form>
        <p>Belum memiliki member?
              <a href="member.php"
                 style="text-decoration: none;">
                    Dapatkan member sekarang!
              </a>
        </p>
  </div>

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
<script src="js/script.js"></script>

</body>
</html>