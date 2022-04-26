<?php
session_start();
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Pass1']) && !empty($_POST['Pass2'])) {

$Newpassword=$_POST['Pass1'];
$Confirmnewpassword=$_POST['Pass2'];
$Useremail=$_SESSION['Useremail'];
$Username=$_SESSION['Username'];

if (strlen($Newpassword) < 6 ) {
  $error = "New Password must be atleast 6 characters";
  header("Location: ../../VIEW/HTML/LAB_TECHNICIAN/password_reset.php?error=$error");
  exit();
}
else if ($Newpassword != $Confirmnewpassword) {
  $error = "Password confirmation does not match new password";
  header("Location: ../../VIEW/HTML/LAB_TECHNICIAN/password_reset.php?error=$error");
 exit();
}
  else{
//Insert
$Password_hash=md5($Newpassword);
$sql = "UPDATE table_lab_technician SET Password = '$Password_hash' WHERE Email='$Useremail'";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Useremail);
  $success="$Userinput, Password reset success please login with your new password.";
  header("Location: ../../VIEW/HTML/LAB_TECHNICIAN/lab_technician_login.php?success=$success");
}
}
}
else{
  $error ="Fill all the fields";
  header("Location: ../../VIEW/HTML/LAB_TECHNICIAN/password_reset.php?error=$error");
}




 ?>
