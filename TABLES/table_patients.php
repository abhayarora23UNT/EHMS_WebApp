<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_patients (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        FullName VARCHAR(30) NOT NULL,
        Phone VARCHAR(20) NOT NULL,
        Email VARCHAR(100) NOT NULL,
        City VARCHAR(20) NOT NULL,
        Address VARCHAR(20) NOT NULL,
        DOB DATE NOT NULL,
        Visit_date DATETIME DEFAULT CURRENT_TIMESTAMP,
        Gender VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
  echo "table patients created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}




 ?>
