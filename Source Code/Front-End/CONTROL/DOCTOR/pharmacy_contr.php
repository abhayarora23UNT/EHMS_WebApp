<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Email']) && !empty($_POST['Name']) && !empty($_POST['Phone'])
&& !empty($_POST['Prescription'])) {

$Email         =$_POST['Email'];
$Name     = $_POST['Name'];
$Phone       = $_POST['Phone'];
$Prescription = $_POST['Prescription'];
$Status        = 'Not Prescribed';

//Insert
$sql="INSERT INTO table_pharmacy(Email,Name,Phone,Prescription,Status) VALUES('$Email','$Name','$Phone','$Prescription','$Status')";
$query = mysqli_query($conn,$sql);
if ($query) {
	$success="Patient Send to Pharmacy successfuly";
	header("Location: ../../VIEW/HTML/DOCTOR/manage_patients.php?success=$success");
	exit();
}
else {
	$error="error in insertion!!!";
	  header("Location: ../../VIEW/HTML/DOCTOR/manage_patients.php?error=$error");
	exit();
}
}
else{

  $error = 'Fill the data in required fields';
  header("Location: ../../VIEW/HTML/DOCTOR/manage_patients.php?error=$error");
}

 ?>
