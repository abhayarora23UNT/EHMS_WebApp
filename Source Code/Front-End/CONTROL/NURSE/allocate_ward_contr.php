<?php
include_once '../../../DATABASE/connection.php';
session_start();
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Disease']) && !empty($_POST['Wardname'])&& !empty($_POST['Bedno']) && !empty($_POST['NextofKinPhone'])
&& !empty($_POST['Gender'])) {

$Name            =strtoupper($_POST['Name']);
$Disease         =$_POST['Disease'];
$Wardname        =$_POST['Wardname'];
$Bedno           = $_POST['Bedno'];
$Nextofkinphone  =$_POST['NextofKinPhone'];
$Gender          = $_POST['Gender'];

$sql="SELECT * FROM table_ward WHERE Bed_No='$Bedno'";
$query=mysqli_query($conn,$sql);
$check_rows=mysqli_num_rows($query);

if ($check_rows== $_POST['Bedno']) {
  $error = "Bed number '$Bedno' is already occupied by a patient";
  header("Location: ../../VIEW/HTML/NURSE/allocate_ward.php?error=$error");
  exit();
}
elseif ($Bedno >= 101) {
  $error="All beds are occupied";
  header("Location: ../../VIEW/HTML/NURSE/allocate_ward.php?error=$error");
}
  else{
//Insert
$Status="Admitted";
$Nurse=$_SESSION['Nurse'];
$sql = "INSERT INTO table_ward(Nurse,Status,Patient_Name,Disease,Ward_Name,Bed_No,Next_of_Kin_Phone,Gender) VALUES('$Nurse','$Status','$Name','$Disease','$Wardname','$Bedno','$Nextofkinphone','$Gender')";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Name);
  $success="Patient $Userinput allocated bed/ward successfully";
  header("Location: ../../VIEW/HTML/NURSE/allocate_ward.php?success=$success");
}
}
}
else{
  $error = 'Fill all fields';
  header("Location: ../../VIEW/HTML/NURSE/allocate_ward.php?error=$error");
}




 ?>
