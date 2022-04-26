<?php
include_once '../../../DATABASE/connection.php';

if (!empty($_POST['email'])&& !empty($_POST['password'])) {

  $Email    =mysqli_real_escape_string($conn,$_POST['email']);
  $Password =md5($_POST['password']);

  $sql="SELECT * FROM table_nurse WHERE Email='$Email' AND Password='$Password'";

  $query = mysqli_query($conn,$sql);

if($query){

$rowCount = mysqli_num_rows($query);

if($rowCount != 0){

  $result = mysqli_fetch_array($query);
  session_start();

  $_SESSION['Nurse'] = $result["Name"];
  $_SESSION['Nurse_Email']=$result["Email"];
  $_SESSION['password'] = $result["Password"];

header("Location: ../../VIEW/HTML/NURSE/dashboard.php");
}
else{
  $error =  "Wrong Username or password";
  header("Location: ../../VIEW/HTML/NURSE/nurse_login.php?error=$error");

}

}else{
  die(mysqli_error($conn));
}

}
else{

  $error = 'Fill the data in required fields';
  header("Location: ../../VIEW/HTML/DOCTOR/nurse_login.php?error=$error");
}


 ?>
