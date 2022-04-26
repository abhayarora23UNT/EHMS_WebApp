<?php
session_start();
unset($_SESSION["Finance_Email"]);
unset($_SESSION["password"]);
$error="logged-out successfuly";
header("Location:finance_login.php?error= $error");
?>