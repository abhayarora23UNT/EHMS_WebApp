<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_contactus (
        Msg_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(30) NOT NULL,
        Phone VARCHAR(255) NOT NULL,
        Email VARCHAR(255) NOT NULL,
        Message VARCHAR(100) NOT NULL,
        Msg_status VARCHAR(20) NOT NULL,
        Send_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table_contactus created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
?>
