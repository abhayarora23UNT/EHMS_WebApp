<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_basic_test (
        visit_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Email VARCHAR(255) NOT NULL,
        Temp VARCHAR(30) NOT NULL,
        Pressure VARCHAR(255) NOT NULL,
        Weight VARCHAR(255) NOT NULL,
        Height VARCHAR(255) NOT NULL,
        Sugar VARCHAR(255) NOT NULL,
        Visit_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table_basic_test created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
