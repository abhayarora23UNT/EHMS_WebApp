<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_lab_results (
        Id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name  VARCHAR(255) NOT NULL,
        Email VARCHAR(255) NOT NULL,
        Phone VARCHAR(255) NOT NULL,
        Results VARCHAR(255) NOT NULL,
        Send_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table_lab_results created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
