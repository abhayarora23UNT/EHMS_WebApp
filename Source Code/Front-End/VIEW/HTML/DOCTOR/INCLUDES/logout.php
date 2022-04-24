<?php
session_start();
unset($_SESSION["Doctor"]);
unset($_SESSION["password"]);
$error="logged-out successfuly";
header("Location: doctor_login.php?error= $error");
?>
