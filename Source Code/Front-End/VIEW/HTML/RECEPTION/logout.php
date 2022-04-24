<?php
session_start();
$Email=$_SESSION["Email"];
unset($_SESSION["Email"]);
unset($_SESSION["Password"]);
session_start();
$error=" $Email, logged-out successfuly";
header("Location: patient_login.php?error= $error");
?>
