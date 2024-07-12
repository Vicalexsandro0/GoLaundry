<?php

include 'config.php'; // Include database connection
$conn = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $memberNumber = $_POST['member_number'];
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $phoneNumber = $_POST['phone_number'];
  $address = $_POST['address'];

  // Extract order details from POST data (loop through if multiple items)
  $orderDetails = [];
  foreach ($_POST as $key => $value) {
    if (strpos($key, 'category_') === 0) {
      $categoryId = substr($key, strlen('category_'));
      $orderDetails[] = [
        'category_id' => $categoryId,
        'item' => $_POST['item_' . $categoryId],
        'quantity' => $_POST['quantity_' . $categoryId],
      ];
    }
  }

  $totalPrice = 0; // Accumulate total price

  // Prepare and execute insert query for order
  $stmt = $conn->prepare("INSERT INTO orders (member_number, first_name, last_name, phone_number, address) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $memberNumber, $firstName, $lastName, $phoneNumber, $address);
  $stmt->execute();
  $orderId = $conn->insert_id;

  // Loop through order details and insert them with price calculations
  foreach ($orderDetails as $detail) {
    $categoryId = $detail['category_id'];
    $item = $detail['item'];
    $quantity = $detail['quantity'];

    // Fetch price from database

    function getPrice($category, $item) {
      global $conn; // Access global database connection
    
      $stmt = $conn->prepare("SELECT price FROM satuan WHERE category = ? AND item = ?");
      $stmt->bind_param("ss", $category, $item);
      $stmt->execute();
      $stmt->bind_result($price);
      $stmt->fetch();
      $stmt->close();
    
      return $price;
    }
  }
}  