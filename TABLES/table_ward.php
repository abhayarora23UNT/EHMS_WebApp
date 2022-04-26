<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_ward (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Patient_Name VARCHAR(30) NOT NULL,
        Disease VARCHAR(255) NOT NULL,
        Ward_Name VARCHAR(255) NOT NULL,
        Bed_No VARCHAR(255) NOT NULL,
        Next_of_Kin_Phone VARCHAR(255) NOT NULL,
        Date_of_Admission DATETIME DEFAULT CURRENT_TIMESTAMP,
        Gender VARCHAR(25) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
  echo "table ward created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
