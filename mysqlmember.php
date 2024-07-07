<?php
$koneksi = mysqli_connenct("localhost", "root", "", "member");

$nama_lengkap = $_POST['nama_lengkap'];
$nama_belakang = $_POST['nama_belakang'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$ktp = $_POST['ktp'];
$submit = $_POST['submir'];

$query = "INSERT INTO member VALUES('$nama_lengkap', '$nama_belakang', '$nik','$no_hp', '$alamat', '$email', '$password', '$confirm_password', '$ktp', '$submit')";

mysqli_query($koneksi, $query);

?>