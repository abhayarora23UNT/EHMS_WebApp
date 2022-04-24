<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_birth (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Mothers_Name VARCHAR(30) NOT NULL,
        Fathers_Name VARCHAR(255) NOT NULL,
        Mothers_Phone VARCHAR(255) NOT NULL,
        Fathers_Phone VARCHAR(255) NOT NULL,
        City_of_Birth VARCHAR(255) NOT NULL,
        Infant_Name VARCHAR(255) NOT NULL,
        Gender VARCHAR(20) NOT NULL,
        Birth_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table birth created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
