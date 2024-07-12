<?php

include 'config.php';

$conn = getConnection();

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$ktp = $_POST['ktp'];

// Check if NIK is exactly 16 digits
if (strlen($nik) !== 16) {
    echo json_encode(["error" => "NIK harus tepat 16 digit."]);
    exit();
}

// Check if NIK already exists
$query = "SELECT * FROM members WHERE nik = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $nik);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    
    echo '<script>alert("NIK sudah digunakan")</script>';
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();

// Insert new member data
$query = "INSERT INTO members (first_name, last_name, nik, phone_number, address, email, ktp) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssssss", $nama_depan, $nama_belakang, $nik, $no_hp, $alamat, $email, $ktp);

if ($stmt->execute()) {
    header("Location:sukses.php");
    echo '<script>alert("Registrasi Berhasil!")</script>';
} else {
    echo json_encode(["error" => "Error: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
