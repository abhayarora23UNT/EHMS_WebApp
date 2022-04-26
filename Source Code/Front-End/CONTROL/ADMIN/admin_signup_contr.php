<?php
include_once '../../../DATABASE/connection.php';
$password='12345';
$password_hash=md5($password);
$username="Admin";

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
