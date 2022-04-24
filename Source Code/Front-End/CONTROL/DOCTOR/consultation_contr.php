<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Temp']) && !empty($_POST['Pressure']) && !empty($_POST['Weight']) && !empty($_POST['Sugar'])
&& !empty($_POST['Prescription'])) {

$Temp         =$_POST['Temp'];
$Pressure     = $_POST['Pressure'];
$Weight       = $_POST['Weight'];
$Sugar        = $_POST['Sugar'];
$Prescription = $_POST['Prescription'];

if (!empty($_POST['Temp']) && !empty($_POST['Pressure']) && !empty($_POST['Weight']) && !empty($_POST['Sugar'])
&& !empty($_POST['Prescription'])) {
$Email=$_GET['Email'];
$Temp         =$_POST['Temp'];
$Pressure     = $_POST['Pressure'];
$Weight       = $_POST['Weight'];
$Sugar        = $_POST['Sugar'];
$Prescription = $_POST['Prescription'];


//Insert
$sql="INSERT INTO table_medical_history(Temp,Pressure,Weight,Sugar,Prescription) VALUES('$Temp','$Pressure','$Weight','$Sugar','$Prescription') WHERE Email='$Email'";
}$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Name);
  $success="Patient $Userinput added successfuly";
  header("Location: ../../VIEW/HTML/DOCTOR/add_patients.php?success=$success");


 ?>
