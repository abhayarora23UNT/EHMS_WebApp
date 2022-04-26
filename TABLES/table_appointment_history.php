<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_appointment_history (
        Appointment_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Doctor_Name VARCHAR(30) NOT NULL,
        Patient_Name VARCHAR(30) NOT NULL,
        Specialization VARCHAR(255) NOT NULL,
        Appointment_creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
        Appointment_date VARCHAR(255) NOT NULL,
        Appointment_time VARCHAR(255) NOT NULL,
        Action VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
  echo "table_appointment_history created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}







?>
