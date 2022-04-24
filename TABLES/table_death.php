<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_death (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        FullName VARCHAR(30) NOT NULL,
        Next_of_kin_name VARCHAR(255) NOT NULL,
        Next_of_kin_phone VARCHAR(255) NOT NULL,
        Reason_of_death VARCHAR(255) NOT NULL,
        Gender VARCHAR(20) NOT NULL,
        Death_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table death created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
