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
</head>
	<body>
<?php include('../ADMIN/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>

<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1 style="margin-left:20px">Admin | Dashboard</h1>
	</section>
	<div class="admin__overview">
		<h4></h4>
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
					<i class="fas fa-stethoscope" style='color:black'></i>
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
					<i class="fas fa-user-md" style='color:black'></i>
				</div>
				<h6 style='color:black'>Nurses</h6>
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
					<i class="fas fa-users" style='color:black'></i>
				</div>
				<h6 style="color:black">Patients</h6>
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
				<div class="birth__icon" style="color:black">
					<i class="fas fa-users" style="color:black"></i>
				</div>
				<h6 style="color:black">Lab Technician</h6>
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
				<div class="death__icon" style='color:black'>
					<i class="fas fa-users" style='color:black'></i>
				</div>
				<h6 style='color:black'>MEDICINE</h6>
			</div>
			</a>
			</div>
			<div class="calender" >
				<a href="manage_payments.php">
				<div class="calender__overview__content">
				<div class="current__date" style='color:black !important'>
					<?php
					$sql="SELECT * FROM table_finance";
					$query=mysqli_query($conn,$sql);
					$total_number = mysqli_num_rows($query);
					echo $total_number;
					?>
				</div>
				<div class="date__icon" style='color:black'>
					<i class="fas fa-clock" style='color:black'></i>
				</div>
				<h6 style='color:black'>PAYMENT</h6>
			</div>
			</div>
			</a>
			</div>
		</div>
	</div>
</div>
	</body>
</html>
