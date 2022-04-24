<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_patients2 (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        FullName VARCHAR(30) NOT NULL,
        Email VARCHAR(255) NOT NULL,
        Address VARCHAR(255) NOT NULL,
        City VARCHAR(255) NOT NULL,
        Gender VARCHAR(255) NOT NULL,
        Password VARCHAR(255) NOT NULL,
        Signup_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table patients2 created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
