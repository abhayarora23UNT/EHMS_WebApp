<?php
session_start();
unset($_SESSION["Nurse"]);
unset($_SESSION["password"]);
$error="logged-out successfuly";
header("Location: nurse_login.php?error= $error");
?>
