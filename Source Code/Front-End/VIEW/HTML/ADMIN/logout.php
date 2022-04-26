<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
$error="logged-out successfuly";
header("Location:../Patient/admin_login.php?error= $error");
?>