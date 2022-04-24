<?php
include_once '../../../DATABASE/connection.php';

if (!empty($_POST['Email'])&& !empty($_POST['Password'])) {

  $Email=mysqli_real_escape_string($conn,$_POST['Email']);
  $Password=md5($_POST['Password']);

  $sql="SELECT * FROM table_patients2 WHERE Email='$Email' AND Password='$Password'";

  $query = mysqli_query($conn,$sql);

if($query){

$rowCount = mysqli_num_rows($query);

if($rowCount != 0){

  $result = mysqli_fetch_array($query);
  session_start();

  $_SESSION['Email'] = $result["Email"];
  $_SESSION['Password'] = $result["Password"];


header("Location: ../../VIEW/HTML/PATIENT/dashboard.php");
}
else{
  $error =  "Wrong Username or password";
  header("Location: ../../VIEW/HTML/PATIENT/patient_login.php?error=$error");

}

}else{
  die(mysqli_error($conn));
}

}
else{

  $error = 'Fill all fields';
  header("Location: ../../VIEW/HTML/PATIENT/patient_login.php?error=$error");
}


 ?>
