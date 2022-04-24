<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Specialization'])&& !empty($_POST['Phone'])){

$Name            =strtoupper($_POST['Name']);
$Email           =$_POST['Email'];
$Specialization  =$_POST['Specialization'];
$Phone           = $_POST['Phone'];

//Update
  $sql = "UPDATE  table_nurse SET Name='$Name',Email='$Email',Specialization='$Specialization',Phone='$Phone' WHERE Email='$Email'";
  $query = mysqli_query($conn,$sql);
  if ($query) {
    $Userinput= strtolower($Name);
    $success="Nurse $Userinput details updated successfully";
    header("Location: ../../VIEW/HTML/ADMIN/manage_nurse.php?success=$success");
  }
}
else{
  $error = "Fill the data in required fields";
  header("Location: ../../VIEW/HTML/ADMIN/edit_nurse.php?error=$error");
}




 ?>
