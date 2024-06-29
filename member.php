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

    <div class="heading" style="background:url(assets/foto/Header\ Page\ Member.png) no-repeat">
        <h1>Dapatkan Promo Menarik Menggunakan Member Card</h1>
    </div>
    
    <section class="member">

        <h1 class="heading-title">Formulir Join Member Go Laundry</h1>
        <form action="form_member.php" method="post" class="member-form">
            <div class="flex">
                <div class="inputBox">
                    <span>nama depan:</span>
                    <input type="text" placeholder="isi nama depanmu">
                </div>
                <div class="inputBox">
                    <span>nama belakang:</span>
                    <input type="text" placeholder="isi nama belakangmu">
                </div>
                <div class="inputBox">
                    <span>NIK :</span>
                    <input type="text" placeholder="isi NIKmu">
                </div>
                <div class="inputBox">
                    <span>no. hp :</span>
                    <input type="email" placeholder="isi no.hpmu">
                </div>
                <div class="inputBox">
                    <span>alamat :</span>
                    <input type="email" placeholder="isi alamatmu">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="number" placeholder="email">
                </div>
                <div class="inputBox">
                    <span>password :</span>
                    <input type="text" placeholder="password">
                </div>
                <div class="inputBox">
                    <span>confirm password :</span>
                    <input type="text" placeholder="confirm password">
                </div>
                <div class="inputBox">
                    <span>upload KTP :</span>
                    <input type="file" placeholder="">
                </div>
            </div>

            <input type="submit" value="Kirim" class="btn" name="Kirim">
        </form>
    </section>


</body>
</html>