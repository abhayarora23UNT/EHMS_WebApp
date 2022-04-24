<?php
include_once '../../../DATABASE/connection.php';

if (!empty($_POST['email'])&& !empty($_POST['password'])) {

  $Email=mysqli_real_escape_string($conn,$_POST['email']);
  $Password=md5($_POST['password']);

  $sql="SELECT * FROM table_finance WHERE Email='$Email' AND Password='$Password'";

  $query = mysqli_query($conn,$sql);

if($query){

$rowCount = mysqli_num_rows($query);

if($rowCount != 0){

  $result = mysqli_fetch_array($query);
  session_start();

  $_SESSION['Finance'] = $result["Name"];
  $_SESSION['Finance_Email'] = $result["Email"];
  $_SESSION['password'] = $result["Password"];
  setcookie("username",$_SESSION['username'], time()+86400*30);
  setcookie("password",$_SESSION['password'], time()+86400*30);

header("Location: ../../VIEW/HTML/FINANCE/dashboard.php");
}
else{
  $error =  "Wrong Username or password";
  header("Location: ../../VIEW/HTML/FINANCE/finance_login.php?error=$error");

}

}else{
  die(mysqli_error($conn));
}

}
else{

  $error = 'Fill all fields';
  header("Location: ../../VIEW/HTML/FINANCE/finance_login.php?error=$error");
}


 ?>
