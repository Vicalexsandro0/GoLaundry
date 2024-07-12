<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laundry</title>
    <link rel="stylesheet" href="css/satuan.css">
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

    <div class="container">
        <section class="customer-data">
            <h1>Order Form</h1>
            <form id="orderForm">
            <label for="memberNumber">Member Number:</label>
            <input type="text" id="memberNumber" name="memberNumber">
            <button type="button" id="checkMember">Check Member</button><br><br>
    
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required><br><br>
    
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required><br><br>
    
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required><br><br>
    
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4"></textarea><br><br>
        </section>
    
    
        <section class="order-section">
            <label for="category">kategori:</label>
            <select id="category" name="category">
                <option value="clothing">pakaian</option>
                <option value="bedroom">boneka, selimut dll</option>
                <option value="sajadah">sajadah</option>
                <option value="sepatu">tas & sepatu</option>
            </select><br>
            <select id="item" name="item">
            </select><br>
    
            <label for="quantity">kuantitas:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1"><br><br>
    
            <button type="button" id="addItem">Add Item</button><br><br>
    
            <div id="orderItems" class="order-items"></div>
            
        </section>
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