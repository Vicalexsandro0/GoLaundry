<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laundry</title>
    <link rel="stylesheet" href="Pemesanan.css">
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

    <div class="Login">
        <img src="Logo Login.png" alt="">
        <h3>Silakan Login Akun Anda</h3>
        <form action="">
              <label for="first">
                    Username:
              </label>
              <input type="text" 
                     id="first" 
                     name="first" 
                     placeholder="Enter your Username" required>

              <label for="password">
                    Password:
              </label>
              <input type="password"
                     id="password" 
                     name="password"
                     placeholder="Enter your Password" required>

              <div class="wrap">
                    <button type="submit"
                            onclick="solve()">
                          Submit
                    </button>
              </div>
        </form>
        <p>Belum memiliki akun?
              <a href="#"
                 style="text-decoration: none;">
                    Dapatkan Akun!
              </a>
        </p>
  </div>


  
</body>
</html>