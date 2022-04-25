<?php
session_start();
unset($_SESSION["Technician"]);
unset($_SESSION["password"]);
$error="logged-out successfuly";
header("Location: lab_technician_login.php?error= $error");
?>