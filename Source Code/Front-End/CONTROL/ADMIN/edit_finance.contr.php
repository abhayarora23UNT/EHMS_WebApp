<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Phone'])){

$Name            =strtoupper($_POST['Name']);
$Email           =$_POST['Email'];
$Phone           = $_POST['Phone'];

//Update
  $sql = "UPDATE  table_finance SET Name='$Name',Email='$Email',Phone='$Phone' WHERE Email='$Email'";
  $query = mysqli_query($conn,$sql);
  if ($query) {
    $Userinput= strtolower($Name);
    $success="Technician $Userinput details updated successfully";
    header("Location: ../../VIEW/HTML/ADMIN/manage_finance.php?success=$success");
  }
}
else{
  $error = "Fill the data in required fields";
  header("Location: ../../VIEW/HTML/ADMIN/edit_finance.php?error=$error");
}




 ?>
