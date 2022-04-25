<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Email']) && !isset($_SESSION['Password'])) {
	$error="You must log-in first";
		header("location: ../patient_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient  | Book Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<link href="../../bootstrap-datepicker\bootstrap-datepicker.min.js" rel="stylesheet" media="screen">
		<link href="../../bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<style media="screen">
			.book__appointment__box{
				width: 70%;
				height: 400px;
				background-color: inherit;
				border: 1px solid silver;
				margin-top: 40px;
				margin-left: 40px;
			}
			.book__appointment__content{
				width:70%;
				height: auto;
				margin-left: 30px;
				background-color: inherit;


			}
			form,input{
				width: 100%;
				height: 30px;
			}
			input{
				border: 2px solid silver;
			}
			select,option{
				width: 100%;
				height: 30px;
			}
		</style>
		<script>
	function getdoctor(str) {
	  if (str=="") {
	    document.getElementById("Doctor").innerHTML="";
	    return;
	  }
	  if (window.XMLHttpRequest) {
	    xmlhttp=new XMLHttpRequest();
	  }
	  xmlhttp.onreadystatechange=function() {
	    if (this.readyState==4 && this.status==200) {
	      document.getElementById("Doctor").innerHTML=this.responseText;
	    }
	  }
	  xmlhttp.open("GET","get_doctor.php?Doctor="+str,true);
	  xmlhttp.send();
	}
	</script>
 </head>
	<body>
<?php include('../PATIENT/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Patient  | Book Appointment</h1>
	</section>
<div class="book__appointment__box">
<div class="book__appointment__content">
<label>Book Appointment</label> as user...'<b> <u> <?php echo $_SESSION['Email']; ?></u></b>'
<p style="color:red;font-size:1.2em;">
	<?php
	if (isset($_GET['error'])) {
		echo $_GET['error'];
	}
	 ?>
</p>
<p style="color:green;font-size:1.2em;">
	<?php
	if (isset($_GET['success'])) {
		echo $_GET['success'];
	}
	 ?>
</p>
<form action="get_doctor.php"  method="POST" >
	<label>Doctor Specialization</label>
		<select name="Specialization" onChange="getdoctor(this.value);" required>
			<option value="">Specialization</option>
			<option value="Dermatologist">Dermatologist</option>
			<option value="Gynecologist">Gynecologist</option>
			<option value="Dentist">Dentist</option>
			<option value="Clinical Officer">Clinical Officer</option>
			<option value="Orthopaedic">Orthopaedic</option>
			<option value="Optician">Optician</option>
			<option value="Pediatrician">Pediatrician</option>
			<option value="Neurologist">Neurologist</option>
			<option value="Psychiatrist">Psychiatrist</option>
		</select><br>
		<label>Doctor</label>
		<select name="Doctor" id="Doctor" required>
		<option value="">Select Doctor</option>
	</select><br>
		<label>Consulation fees</label>
		<select name="Fees"><br>
		<option value="1000">1000</option>
		</select>
		<label>Date</label>
		<input type="date" name="Date"  required="required"><br>
		<label>Time</label>
		<input type="time" name="Time" required><br>
		<div class="submit__btn">
			<button type="submit" name="submit">
				Book <i class="fa fa-arrow-circle-right"></i>
			</button>
		</div>
</form>
</div>
</div>
</div>
	</body>
</html>
