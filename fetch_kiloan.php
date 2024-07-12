<?php
// Establish database connection
include 'config.php';
$conn = getConnection();

// Query to fetch category and items
$sql = "SELECT category, item FROM kiloan";
$result = $conn->query($sql);

// Array to hold categories and items
$items = array();

// Fetch data and format it
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $category = $row['category'];
        $item = $row['item'];
        // Group items under their respective categories
        $items[$category][] = $item;
    }
}

// Close database connection
$conn->close();

// Send response as JSON
header('Content-Type: application/json');
echo json_encode($items);

