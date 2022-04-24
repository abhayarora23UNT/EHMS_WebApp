<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../nurse_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nurse | Appointment History</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">.
    <link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fa-brands.css">
    <link rel="stylesheet" href="../../fontawesome/css/fa-regular.css">
    <link rel="stylesheet" href="../../fontawesome/css/fa-regular.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.min.css">
 </head>
	<body>
<?php include('../NURSE/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Nurse | Appointment History</h1>
	</section>
  <div class="manage__doctor">
  <div class="manage__doctors__content">
    <div class="__top">
      <div class="id__appointment">
        <h6>#</h6>
      </div>
      <div class="name__appointment">
        <h6>Doctor Name</h6>
      </div>
      <div class="patient__appointment">
        <h6>Patient Name</h6>
      </div>
      <div class="specialization__appointment">
        <h6>Specialization</h6>
      </div>
      <div class="Appointment__appointment">
        <h6>Appointment Date</h6>
      </div>
      <div class="Appointment__creationdate">
        <h6>Appointment Creation Date</h6>
      </div>
      <div class="action__appointment">
        <h6>Action</h6>
      </div>
    </div>
  </div>
  </div>
	</body>
</html>
