<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Doctor']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: doctor_login.php?error=$error");
	}
	if (!empty($_POST['Name']) && !empty($_POST['Phone']) && !empty($_POST['Symptoms']) && !empty($_POST['Test'])
  && !empty($_POST['Email'])) {
	$Email=$_POST['Email'];
	$Name         =$_POST['Name'];
	$Phone     = $_POST['Phone'];
	$Symptoms       = $_POST['Symptoms'];
	$Test        = $_POST['Test'];
	$Status='Not Tested';

	//Insert
  $sql="INSERT INTO table_lab_report(Name,Phone,Email,Symptoms,Test,Status) VALUES('$Name','$Phone','$Email','$Symptoms','$Test','$Status')";
	$query = mysqli_query($conn,$sql);
	if ($query) {
	  $success="Patient Send to lab successfuly";
	  header("Location: manage_patients.php?success=$success");
		exit();
	}
	else {
		$error="error in insertion!!!";
		header("Location: manage_patients.php?error=$error");
		exit();
	}
}



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | Patient Consultation</title>
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
		<style>
    .view_patient_table{
      width: 100%;
      height: auto;
      background-color: inherit;
			margin-top: 30px;
			margin-bottom: 20px;
      padding: 0.5px;
    }
    h5{
      margin-left: 50px;
    }
    table{
      width: 90%;
      height: auto;
      margin: 0 auto;
      border-color: silver;
      border-collapse: collapse;
      background-color: #ffffff;
      font-family: lucida, sans-serif;
    }
    td{
      padding: 10px;
    }
		.Patientdetails_bottom{
			width: 90%;
			height: 200px;
			margin: 0 auto;
		}
		.medical__history__form{
			width: 100%;
			height: 100px;
			background-color: inherit;
			padding: 0.5px;
			margin-bottom: 70px;
		}
    .patient__medical__history{
      width: 100%;
      height: 100px;
      background-color: inherit;
			padding: 0.5px;
    }
    form input{
      width: 100%;
      height: auto;
      border-style:none;
      outline: none;
      background-color: #ffffff;
    }
    .save__btn{
      position:;
    }
		textarea .Prescription{
			border: none
		}
		</style>
 </head>
	<body>
<?php include('../DOCTOR/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Doctor | Patient Consultation</h1>
	</section>
	<?php
	$Email= $_GET['Email'];
	$sql="SELECT * FROM table_patients WHERE Email='$Email'";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$date=date("d-F-yy,h:i:s a",strtotime($data['Visit_date']));
	$Name=strtolower($data['FullName']);
	$Phone=$data['Phone'];
	$Address=$data['Address'];
	$City=$data['City'];
	$Dob=date("d-F-Y",strtotime($data['DOB']));
	$Gender=$data['Gender'];
	$Age=date("Y") - date("Y",strtotime($Dob));
?>
	<?php } ?>
	<h3>Lab Form</h3>
<form action="consultation.php" method="post">
  <div class="medical__history__form">
    <table border="1">
                        <thead>
                          <tr>
                            <th>#</th>
														<th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
														<th>Symptoms(Additional Details of Patient</th>
                            <th>Test('s)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
														<td><input type="text" name="Email" value="<?php echo $Email; ?>" required readonly></td>
                            <td> <input type="text" name="Name" value="<?php echo $Name; ?>" required> </td>
                            <td><input type="text" name="Phone" value="<?php echo $Phone; ?>" required></td>
														<td><textarea class="Symptoms" name="Symptoms" rows="auto" cols="auto" maxlength="100" required></textarea></td>
                            <td><textarea class="Test" name="Test" rows="auto" cols="auto" maxlength="100" required></textarea></td>
                          </tr>
                        </tbody>
</table>
<div class="save__btn">
  <button type="submit" class="btn btn-primary pull-right" name="submit">
    Lab <i class="fa fa-arrow-circle-right"></i>
  </button>
</div>
  </div>
  </form>


	<h3>Finance Form</h3>
	<?php $Consultation_fee='1000' ?>
<form action="../../../CONTROL/DOCTOR/payments_contr.php" method="post">
  <div class="medical__history__form">
    <table border="1">
                        <thead>
                          <tr>
                            <th>#</th>
														<th>Email</th>
														<th>Name</th>
														<th>Phone</th>
                            <th>Consultation fee</th>
                            <th>Lab test fee</th>
														<th>Pharmacy fee</th>
                            <th>Treatment fee</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
														<td><input type="text" name="Email" value="<?php echo $Email; ?>" required readonly></td>
														<td><input type="text" name="Name" value="<?php echo $Name; ?>" required readonly></td>
														<td><input type="text" name="Phone" value="<?php echo $Phone; ?>" required readonly></td>
                            <td> <input type="text" name="Consultation_fee" value="<?php echo $Consultation_fee; ?>" required readonly> </td>
                            <td> <input type="text" name="Lab_test_fee" value="" required> </td>
														<td> <input type="text" name="Pharmacy_fee" value="" required> </td>
														<td> <input type="text" name="Treatment_fee" value="" required> </td>

                          </tr>
                        </tbody>
</table>
<div class="save__btn">
  <button type="submit" class="btn btn-primary pull-right" name="submit">
    Finance <i class="fa fa-arrow-circle-right"></i>
  </button>
</div>
  </div>
  </form>





	<h3>Pharmacy Form</h3>
	<?php $Consultation_fee='1000' ?>
	<form action="../../../CONTROL/DOCTOR/Pharmacy_contr.php" method="post">
	<div class="medical__history__form">
		<table border="1">
												<thead>
													<tr>
														<th>#</th>
														<th>Email</th>
														<th>Name</th>
														<th>Phone</th>
														<th>Medical Prescription</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td><input type="text" name="Email" value="<?php echo $Email; ?>" required readonly></td>
														<td><input type="text" name="Name" value="<?php echo $Name; ?>" required readonly></td>
														<td><input type="text" name="Phone" value="<?php echo $Phone; ?>" required readonly></td>
														<td><textarea class="" name="Prescription" rows="auto" cols="auto" maxlength="100" required></textarea></td>
													</tr>
												</tbody>
	</table>
	<div class="save__btn">
	<button type="submit" class="btn btn-primary pull-right" name="submit">
		Pharmacy <i class="fa fa-arrow-circle-right"></i>
	</button>
	</div>
</div>
</form>






	<?php
	$Email=$_GET['Email'];
	$sql="SELECT * FROM table_basic_test WHERE Email='$Email' ORDER BY Visit_date DESC";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$date=date("d-F-yy,h:i:s a",strtotime($data['Visit_date']));
	$count=1;
?>
<div class="patient__medical__history">
	<table border="1">
											<thead>
												<tr>
													<th>#</th>
													<th>Body Temperature</th>
													<th>Blood Pressure</th>
													<th>Weight</th>
													<th>Height</th>
													<th>Blood Sugar</th>
													<th>Visit Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><?php echo $count ?></td>
													<td><?php echo $data['Temp']; ?></td>
													<td><?php echo $data['Pressure']; ?></td>
													<td><?php echo $data['Weight']; ?></td>
													<td><?php echo $data['Height']; ?></td>
													<td><?php echo $data['Sugar']; ?></td>
													<td><?php echo $date; ?></td>
												</tr>
											</tbody>
</table>
</div>
	<?php $count=$count+1;} ?>


	</body>
</html>
