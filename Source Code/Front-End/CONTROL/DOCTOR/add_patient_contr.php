<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Phone']) && !empty($_POST['Email']) && !empty($_POST['City'])
&& !empty($_POST['Address'])&& !empty($_POST['dob']) &&  !empty($_POST['Gender'])) {

$Name    =strtoupper($_POST['Name']);
$Phone   = $_POST['Phone'];
$Email   = $_POST['Email'];
$City    = strtoupper($_POST['City']);
$Address = $_POST['Address'];
$Dob     = $_POST['dob'];
$Gender  = $_POST['Gender'];

$sql="SELECT * FROM table_patients WHERE Email='$Email' OR Phone ='$Phone'";
$query=mysqli_query($conn,$sql);
$check_rows=mysqli_num_rows($query);

if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){

  $error = "$Email is an invalid email format";
  header("Location:  ../../VIEW/HTML/DOCTOR/add_patients.php?error=$error");
exit();
}

else if ($check_rows > 0) {
  $error = "Patient '$Name' already exist";
  header("Location:  ../../VIEW/HTML/DOCTOR/add_patients.php?error=$error");
  exit();
}
  else{
//Insert
$sql = "INSERT INTO table_patients(FullName,Phone,Email,City,Address,DOB,Gender) VALUES('$Name','$Phone','$Email','$City','$Address','$Dob','$Gender')";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Name);
  $success="Patient $Userinput added successfuly";
  header("Location: ../../VIEW/HTML/DOCTOR/add_patients.php?success=$success");
  exit();
}
}
}

else{
  $error = 'Fill all fields';
  header("Location: ../../VIEW/HTML/DOCTOR/add_patients.php?error=$error");
}


 ?>
