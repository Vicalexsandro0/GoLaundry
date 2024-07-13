<?php
include 'config.php';
$conn = getConnection();

$sql = "SELECT DISTINCT category FROM kiloan"; // Get distinct categories
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<option value=''>Pilih Kategori</option>"; // Add a default option
  while($row = mysqli_fetch_assoc($result)) {
    $category = $row["category"];
    echo "<option value='$category'>$category</option>";
  }
} else {
  echo "No categories found";
}

mysqli_close($conn);
?>
