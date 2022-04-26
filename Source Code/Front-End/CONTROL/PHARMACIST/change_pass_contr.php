<?php
session_start();
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Currentpassword']) && !empty($_POST['Newpassword'])
&& !empty($_POST['Confirmnewpassword'])) {

$Currentpassword     =md5($_POST['Currentpassword']);
$Newpassword         = $_POST['Newpassword'];
$Confirmnewpassword  =  $_POST['Confirmnewpassword'];
$username            =$_SESSION['Pharmacist_Email'];
$Password            =$_SESSION['password'];

$sql="SELECT Password FROM table_pharmacist WHERE Name='$username'";
$query=mysqli_query($sql);
$Oldpassword=mysqli_fetch_row($query);

if (strlen($Newpassword) < 6 ) {
  $error = "New Password must be atleast 6 characters";
  header("Location:  ../../VIEW/HTML/PHARMACISTS/change_password.php?error=$error");
  exit();
}
else if ($Newpassword != $Confirmnewpassword) {
  $error = "Password confirmation does not match new password";
  header("Location: ../../VIEW/HTML/PHARMACIST/change_password.php?error=$error");
 exit();
}
else if($Password == md5($Newpassword)){
  $error = "New password and current password cannot be the same";
  header("Location:  ../../VIEW/HTML/PHARMACIST/change_password.php?error=$error");
  exit();
}
else if($Password != $Currentpassword  ){
  $error ="Your current password is incorrect!";
  header("Location:  ../../VIEW/HTML/PHARMACIST/change_password.php?error=$error");
  exit();
}

  else{
//Insert
$password_hash=md5($Newpassword);
$sql = "UPDATE table_pharmacist SET Password = '$password_hash' WHERE Name='$username'";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($username);
  $success="$Userinput, Your password has been updated successfully.";
  header("Location: ../../VIEW/HTML/PHARMACIST/change_password.php?success=$success");
}
}
}
else{
  $error ="Fill all the fields";
  header("Location: ../../VIEW/HTML/PHARMACIST/change_password.php?error=$error");
}




 ?>
