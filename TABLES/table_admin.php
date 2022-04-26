<?php
include_once '../DATABASE/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS table_admin (
        user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(30) NOT NULL,
        password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn,$sql)) {
  echo "table created successfuly .<br>";
}
else {
  echo "error in creation of table .<br>";
}

$password='12345';
$password_hash=md5($password);
$username="admin";

$sql="SELECT * FROM table_admin WHERE Name='$username' AND password='$password_hash'";
$query=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($query);
if($rows > 0){
  echo "user already exist...please login .<br>";
  exit();
}
else{
$sql = "INSERT INTO table_admin(Name,password) VALUES('$username','$password_hash')";
if (mysqli_query($conn,$sql)==TRUE) {
  echo "successfuly inserted .<br>";
}
else{
  echo "error in insertion .<br>";
}
}

 ?>
