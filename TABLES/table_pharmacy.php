<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_pharmacy (
        Id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Email VARCHAR(255) NOT NULL,
        Name VARCHAR(30) NOT NULL,
        Phone VARCHAR(30) NOT NULL,
        Prescription VARCHAR(250) NOT NULL,
        Status VARCHAR(30) NOT NULL,
        Send_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table_pharmacy created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
