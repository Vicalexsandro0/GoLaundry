<?php
include 'config.php';

$sql = "SELECT * FROM satuan";
$result = $conn->query($sql);

$prices = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $prices[] = $row;
    }
} 

$conn->close();

header('Content-Type: application/json');
echo json_encode($prices);
?>
