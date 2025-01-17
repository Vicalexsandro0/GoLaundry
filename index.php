<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Laundry</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body background="assets/foto/Gelombang.png">
    <section class="header">

    <a href="index.php" class = "logo"><img src="assets/Group 2.png" alt="GoLaundry"></a>
    <nav class="navbar">
        <a href="index.php">beranda</a>
        <a href="harga.php">harga</a>
        <a href="pemesanan.php">pemesanan</a>
        <a href="member.php">member</a>
        <a href="kontak.php">kontak</a>
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

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide" style="background:url(assets/foto/Header\ Page\ Utama.png) no-repeat">
                    <div class="content">
                        <span>F A S T & C L E A N</span>
                        <h3>Go Laundry</h3>
                        <a href="pemesanan.php" class="btn">pick up</a>
                        <a href="harga.php" class="btn">cek harga</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(assets/foto/Header\ Page\ Utama.png) no-repeat">
                    <div class="content">
                        <span></span>
                        <h3>GoLaundry</h3>
                        <a href="harga.php" class="btn">cek harga</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(assets/foto/Header\ Page\ Utama.png) no-repeat">
                    <div class="content">
                        <span></span>
                        <h3>GoLaundry</h3>
                        <a href="harga.php" class="btn">cek harga</a>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="about">
        <div class="image">
            <img src="assets/foto/Menu-Tentang Kami.png" alt="">
        </div>
        <div class="content">
            <h3>tentang kami</h3>
            <p>Go Laundry adalah layanan laundry profesional yang didedikasikan untuk menyediakan solusi kebersihan pakaian yang cepat, efisien, dan terpercaya. Kami mengerti bahwa waktu Anda sangat berharga, oleh karena itu, kami menawarkan layanan terbaik untuk memastikan pakaian Anda bersih, harum, dan tertata rapi tanpa perlu repot.</p>
        </div>
    </section>

    <section class="services">
        <h1 class="head-title">jasa kami</h1>

        <div class="box-container">
            <div class="box">
                <img src="assets/icon/Timbangan.png" alt="">
                <h3>laundry kiloan</h3>
            </div>


            <div class="box">
                <img src="assets/icon/Baju.png" alt="">
                <h3>laundry satuan</h3>
            </div>

            <div class="box">
                <img src="assets/icon/Motor Putih.png" alt="">
                <h3>antar jemput</h3>
            </div>

            <div class="box">
                <img src="assets/icon/Karpet.png" alt="">
                <h3>cuci karpet</h3>
            </div>

            <div class="box">
                <img src="assets/icon/Sepatu.png" alt="">
                <h3>cuci sepatu</h3>
            </div>
        </div>
        <a href="Pemesanan.php" class="btn">Selengkapnya</a>
    </section>

    <section class="operational-hours">
        <h1>Jam Operasional</h1>
        <div class="box-container">
            <div>
                <span>&nbsp; Senin - Sabtu &nbsp;</span> <p>08.00 - 21.00</p>
            </div>
            <div>
                <span>&nbsp; Minggu &nbsp;</span> <p>08.00 - 15.00</p>
            </div>
        </div>
    </section>

    <section class="about">
        
        <div class="content">
            <h3>keunggulan kami</h3>
            <ul>
                <li>Pelayanan Cepat: Proses laundry yang cepat dengan tetap menjaga kualitas.</li>
                <li>Harga Terjangkau: Tarif kompetitif yang sesuai dengan kantong Anda.</li>
                <li>Kualitas Terjamin: Menggunakan deterjen berkualitas dan peralatan modern untuk hasil optimal.</li>
                <li>Ramah Lingkungan: Menggunakan produk yang aman dan ramah lingkungan.</li>
                <li>Staf Profesional: Tim kami berpengalaman dan terlatih dalam menangani berbagai jenis kain dan noda.</li>
            </ul>

        </div>
        <div class="image">
            <img src="assets/foto/Menu-Keunggulan Kami.png" alt="">
        </div>
    </section>

    <section class="work-process">
        <h1>Cara Kerja</h1>
        <div class="steps">
            <div class="step">
                <img src="assets/icon/Laptop.png" alt="Pesan">
                <p>Pesan</p>
            </div>
            <div class="step">
                <img src="assets/icon/Motor.png" alt="Jemput">
                <p>Jemput</p>
            </div>
            <div class="step">
                <img src="assets/icon/Mesin Cuci.png" alt="Proses">
                <p>Proses</p>
            </div>
            <div class="step">
                <img src="assets/icon/Motor.png" alt="Antar">
                <p>Antar</p>
            </div>
        </div>
    </section>
        
    </div>

    
       <section class="warning">
        <h3>PERINGATAN !!!</h3>
        <div class="warning2">
            <p>Sebelum laundry diserahkan, pastikan TIDAK ADA BARANG</p>
            <p>YANG KETINGGALAN di semua saku pakaian.</p>
            <p>KAMI TIDAK BERTANGGUNG JAWAB:</p>
            <p>Luntur - Sobek Bahan - Susut Bahan - Kerusakan Lainnya</p>
        </div>
    </section>
    


    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>menu</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i>beranda</a>
                <a href="harga.php"><i class="fas fa-angle-right"></i>harga</a>
                <a href="pemesanan.php"><i class="fas fa-angle-right"></i>pemesanan</a>
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