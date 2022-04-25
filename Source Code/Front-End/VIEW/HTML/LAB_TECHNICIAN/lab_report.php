<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Technician']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: lab_technician_login.php?error=$error");
	}
	if (!empty($_POST['Email']) && !empty($_POST['Name']) && !empty($_POST['Phone'])&& !empty($_POST['Results'])) {
	$Email           =$_POST['Email'];
	$Name           =$_POST['Name'];
	$Phone           =$_POST['Phone'];
	$Results         =$_POST['Results'];
	//Insert
  $sql="INSERT INTO table_lab_results(Email,Name,Phone,Results) VALUES('$Email','$Name','$Phone ','$Results')";
	$query = mysqli_query($conn,$sql);
	if ($query) {
	  $success="Patient Results added successfuly";
	  header("Location: manage_patients.php?success=$success");
		exit();
	}
	else {
		$error="error in insertion!!!";
		header("Location: manage_patients.php?error=$error");
		exit();
	}
}
if(isset($_GET['Id'])){
	$Report_Id=$_GET['Id'];
	$sql="UPDATE table_lab_report SET Status='Tested' WHERE Id='$Report_Id'";
	$query=mysqli_query($conn,$sql);
	if($query){

	}
	else{

	}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Lab Technician  | Patient Lab Report</title>
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
      position: fixed;
    }
		textarea .Prescription{
			width: 100%;
			height: 70px;
			border: none
		}
		</style>
 </head>
	<body>
	<?php include('../LAB_TECHNICIAN/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Lab Technician | Patient Lab Report </h1>
	</section>
	<?php
	$Id= $_GET['Id'];
		$sql="SELECT * FROM table_lab_report WHERE Id='$Id'";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query))
			{
				$Email=$row['Email'];
?>
	<h3>Test Form</h3>
<form action="lab_report.php" method="post">
  <div class="medical__history__form">
    <table border="1">
                        <thead>
                          <tr>
														<th>#</th>
														<th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Results(Additional Information)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
														<td><input type="text" name="Email" value="<?php echo $Email; ?>" required readonly></td>
                            <td> <input type="text" name="Name" value="<?php echo $row['Name']; ?>" required> </td>
                            <td><input type="text" name="Phone" value="<?php echo $row['Phone']; ?>" required></td>
                            <td><textarea class="Results" name="Results" rows="auto" cols="auto" maxlength="100"></textarea></td>
                          </tr>
												<?php } ?>
                        </tbody>
</table>
<div class="save__btn">
  <button type="submit" class="btn btn-primary pull-right" name="submit">
    Send <i class="fa fa-arrow-circle-right"></i>
  </button>
</div>
  </div>
  </form>
	<?php
	$sql="SELECT * FROM table_lab_report WHERE Email='$Email' ORDER BY Send_date DESC";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$date=date("d-F-yy,h:i:s a",strtotime($data['Send_date']));
	$count=1;
?>
<div class="patient__medical__history">
	<table border="1">
											<thead>
												<tr>
													<th>#</th>
													<th>Test('s)</th>
													<th>Send date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><?php echo $count ?></td>
													<td><?php echo $data['Test']; ?></td>
													<td><?php echo $data['Send_date']; ?></td>
												</tr>
											</tbody>
</table>
</div>
	<?php $count=$count+1;} ?>


	</body>
</html>
