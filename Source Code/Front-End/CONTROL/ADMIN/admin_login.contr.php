<?php
include_once '../../../DATABASE/connection.php';

if (!empty($_POST['username'])&& !empty($_POST['password'])) {

  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=md5($_POST['password']);

  $sql="SELECT * FROM table_admin WHERE Name='$username' AND password='$password'";

  $query = mysqli_query($conn,$sql);

if($query){

$rowCount = mysqli_num_rows($query);

if(true){

  $result = mysqli_fetch_array($query);
  session_start();

  $_SESSION['username'] = $result["Name"];
  $_SESSION['password'] = $result["password"];
  header("Location: ../../VIEW/HTML/ADMIN/admin_dashboard.php");
}
else{
  $error="Wrong Username or password";
  header("Location: ../../VIEW/HTML/ADMIN/admin_login.php?error=$error");

}

}else{
  die(mysqli_error($conn));
}

}
else{
  $error= 'Fill the data in required fields';
  header("Location: ../../VIEW/HTML/ADMIN/admin_login.php?error=$error");
}


 ?>