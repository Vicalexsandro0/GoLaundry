<?php

$conn = mysqli_connect("localhost", "root", "", "golaundry"); 

$category = $_GET["category"]; // Get the selected category from URL parameter

$sql = "SELECT item FROM kiloan WHERE category = '$category'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $item = $row["item"];
    echo "<option value='$item'>$item</option>";
  }
} else {
  echo "No items found for this category";
}

mysqli_close($conn);

