<?php
include_once '../../../DATABASE/connection.php';

if (!empty($_POST['Email']) && !empty($_POST['Consultation_fee']) && !empty($_POST['Lab_test_fee']) && !empty($_POST['Pharmacy_fee'])
&& !empty($_POST['Treatment_fee'])) {
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Consultation_fee        =$_POST['Consultation_fee'];
$Lab_test_fee            = $_POST['Lab_test_fee'];
$Pharmacy_fee            = $_POST['Pharmacy_fee'];
$Treatment_fee           = $_POST['Treatment_fee'];
$Payments_status='Not Paid';
$Total_amount=$Consultation_fee+$Lab_test_fee +$Pharmacy_fee +$Treatment_fee;
$Send_date=date('Y-m-d');
//Insert
$sql="INSERT INTO table_payments(Name,Email,Consultation_fee,Lab_test_fee,Pharmacy_fee,Treatment_fee,Status,Total_amount,Send_date) VALUES('$Name','$Email','$Consultation_fee','$Lab_test_fee','$Pharmacy_fee','$Treatment_fee','$Payments_status','$Total_amount','$Send_date')";
$query = mysqli_query($conn,$sql);
if ($query) {
	$success="Patient Send to Finance successfuly";
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
