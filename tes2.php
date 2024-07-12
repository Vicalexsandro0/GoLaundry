<?php

include 'config.php';

$conn = getConnection();

$member_number = $_POST['member_number'];
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$category = $_POST['category'];
$item = $_POST['item'];



// Insert new member data
$query = "INSERT INTO orders (member_number, first_name, last_name, nik, phone_number, address, category, item) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssssss", $nama_depan, $nama_belakang, $nik, $no_hp, $alamat, $email, $ktp);

if ($stmt->execute()) {
    header("Location:index.php");
    echo '<script>alert("Registrasi Berhasil!")</script>';
} else {
    echo json_encode(["error" => "Error: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
