<?php
session_start();
unset($_SESSION["Pharmacist_Email"]);
unset($_SESSION["password"]);
$error="logged-out successfuly";
header("Location:pharmacist_login.php?error= $error");
?>
