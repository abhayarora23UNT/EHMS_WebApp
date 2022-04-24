<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Doctor']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: doctor_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<left><a href ="#"><img src="hlogo.jpg" height="55" width="100" alt="Image resize"></a></center><br>
ELECTRONIC HOSPITAL MANAGEMENT SYSTEM
		<title>Doctor  | Dashboard</title>
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
<?php include('../DOCTOR/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Doctor | Dashboard</h1>
	</section>
	<div class="admin__overview">
		<h4>Overview</h4>
		<div class="first__row first__row">
			<div class="Doctors__overview Doctors__overview--Appointment">
				<a href="appointment_history.php">
				<div class="Doctors__overview__content">
				<div class="total__docs">
					<?php
					$sql="SELECT * FROM table_appointment_history WHERE Doctor_Name='".$_SESSION['Doctor']."' ";
					$query=mysqli_query($conn,$sql);
          $total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="doc__icon">
					<i class="fas fa-stethoscope"></i>
				</div>
				<h6>My appointments</h6>
			</div>
			</a>
			</div>
			<div class="death__report death__report--appointment">
				<div class="death__report__overview__content">
				<div class="total__deaths">
					<?php
					echo date("d-m-Y");
					?>
				</div>
				<div class="death__icon">
					<i class="fas fa-clock"></i>
				</div>
				<h6>Date</h6>
			</div>
			</div>
		</div>
	</div>
</div>
	</body>
</html>
