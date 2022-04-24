<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_payments (
        Id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Email VARCHAR(255) NOT NULL,
        Name VARCHAR(30) NOT NULL,
        Consultation_fee VARCHAR(30) NOT NULL,
        Lab_test_fee VARCHAR(30) NOT NULL,
        Treatment_fee VARCHAR(30) NOT NULL,
        Pharmacy_fee VARCHAR(30) NOT NULL,
        Other_charges VARCHAR(30) NOT NULL,
        Total_amount  VARCHAR(255) NOT NULL,
        Status VARCHAR(30) NOT NULL,
        Send_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table_payments created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
