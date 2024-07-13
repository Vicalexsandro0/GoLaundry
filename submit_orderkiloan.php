<?php
include 'config.php';
$conn = getConnection();

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$category = $_POST['category'];
$item = $_POST['item'];
$quantity = $_POST['quantity']; 

$member_number = isset($_POST['member_number']) ? $_POST['member_number'] : null;

// Calculate total_payment based on price (fetch from satuan table)
$sql_price = "SELECT price_per_kg FROM kiloan WHERE category='$category' AND item='$item'";
$result_price = $conn->query($sql_price);
if ($result_price->num_rows > 0) {
    $row_price = $result_price->fetch_assoc();
    $price = $row_price['price_per_kg'];
    $total_payment = $quantity * $price;
} else {
    $total_payment = 0; // Handle error case
}

// Insert into orders table
$sql_insert = "INSERT INTO orders (member_id, first_name, last_name, phone_number, address, category, item, quantity, total_payment)
               VALUES ('$member_number', '$first_name', '$last_name', '$phone_number', '$address', '$category', '$item', '$quantity', '$total_payment')";

if ($conn->query($sql_insert) === TRUE) {
    header("Location:sukses_pesan.php");
} else {
    header("Location:gagal_pesan.php");
}

$conn->close();

