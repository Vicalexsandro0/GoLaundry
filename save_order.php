<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $memberNumber = $_POST['memberNumber'];
    $totalPayment = $_POST['totalPayment'];
    $category = $_POST['category'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];



    $response = [
        'success' => true,
        'message' => 'Pesanan Berhasil!'
    ];
    echo json_encode($response);
}

mysqli_close($koneksi);
