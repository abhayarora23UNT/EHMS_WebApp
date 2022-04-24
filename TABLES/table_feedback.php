<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_feedback (
        feedback_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Rate VARCHAR(10) NOT NULL,
        Services VARCHAR(10) NOT NULL,
        Complain VARCHAR(10) NOT NULL,
        Suggestion VARCHAR(255) NOT NULL,
        Send_date DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn,$sql)) {
  echo "table birth created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}
 ?>
