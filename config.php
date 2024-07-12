<?php
function getConnection() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "golaundry";  // Sesuaikan nama database sesuai kebutuhan Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
return $conn;
}

