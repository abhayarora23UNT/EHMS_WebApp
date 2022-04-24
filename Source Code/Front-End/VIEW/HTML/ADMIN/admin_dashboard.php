<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: admin_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<left><a href ="#"><img src="hlogo.jpg" height="55" width="100" alt="Image resize"></a></center><br>
ELECTRONIC HOSPITAL MANAGEMENT SYSTEM
	<title>Admin  | Dashboard</title>
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
	<style media="screen">
	</style>
</head>
	<body>
<?php include('../ADMIN/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>

<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Admin | Dashboard</h1>
	</section>
	<div class="admin__overview">
		<h4>Overview</h4>
		<div class="first__row">
			<div class="Doctors__overview">
				<a href="manage_doctor.php">
				<div class="Doctors__overview__content">
				<div class="total__docs">
					<?php
					$sql="SELECT * FROM table_doctor ";
					$query=mysqli_query($conn,$sql);
          $total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="doc__icon">
					<i class="fas fa-stethoscope"></i>
				</div>
				<h6>Doctors</h6>
			</div>
			</a>
			</div>
			<div class="Nurses__overview">
				<a href="manage_nurse.php">
				<div class="Nurses__overview__content">
				<div class="total__nurses">
					<?php
					$sql="SELECT * FROM table_nurse ";
					$query=mysqli_query($conn,$sql);
					$total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="nurse__icon">
					<i class="fas fa-user-md"></i>
				</div>
				<h6>Nurses</h6>
			</div>
			</a>
			</div>
			<div class="Patients__overview">
				<a href="manage_patients.php">
				<div class="Patients__overview__content">
				<div class="total__patients">
					<?php
					$sql="SELECT * FROM table_patients ";
					$query=mysqli_query($conn,$sql);
					$total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="Patients__icon">
					<i class="fas fa-users"></i>
				</div>
				<h6>Patients</h6>
			</div>
      </a>
			</div>

		</div>
		<div class="second__row">
			<div class="birth__report">
				<a href="manage_lab_technician.php">
				<div class="birth__report__overview__content">
				<div class="total__births">
					<?php
					$sql="SELECT * FROM table_lab_technician ";
					$query=mysqli_query($conn,$sql);
					$total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="birth__icon">
					<i class="fas fa-users"></i>
				</div>
				<h6>Lab Technician</h6>
			</div>
			</a>
			</div>
			<div class="death__report">
				<a href="manage_pharmacist.php">
				<div class="death__report__overview__content">
				<div class="total__deaths">
					<?php
					$sql="SELECT * FROM table_pharmacist ";
					$query=mysqli_query($conn,$sql);
					$total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="death__icon">
					<i class="fas fa-users"></i>
				</div>
				<h6>MEDICINE</h6>
			</div>
			</a>
			</div>
			<div class="calender">
				<a href="manage_payments.php">
				<div class="calender__overview__content">
				<div class="current__date">
					<?php
					$sql="SELECT * FROM table_finance";
					$query=mysqli_query($conn,$sql);
					$total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="date__icon">
					<i class="fas fa-clock"></i>
				</div>
				<h6>PAYMENT</h6>
			</div>
			</div>
			</a>
			</div>
		</div>
	</div>
</div>
	</body>
</html>
