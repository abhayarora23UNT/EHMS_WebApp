<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_images (
        Image_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Avatar VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
  echo "table created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
?>
