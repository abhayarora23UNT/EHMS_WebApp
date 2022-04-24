<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_nurse (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(30) NOT NULL,
        Email VARCHAR(255) NOT NULL,
        Specialization VARCHAR(255) NOT NULL,
        Phone VARCHAR(255) NOT NULL,
        Entry_date DATETIME DEFAULT CURRENT_TIMESTAMP,
        Password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
  echo "table nurse created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
