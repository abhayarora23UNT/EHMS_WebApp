<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Mothername']) && !empty($_POST['Fathername']) && !empty($_POST['Motherphone']) && !empty($_POST['Fatherphone'])
&& !empty($_POST['City'])&& !empty($_POST['Infantname']) &&  !empty($_POST['Gender'])) {

$Mothername    = strtoupper($_POST['Mothername']);
$Fathername    =strtoupper($_POST['Fathername']);
$Motherphone   =$_POST['Motherphone'];
$Fatherphone   =$_POST['Fatherphone'];
$City          =strtoupper($_POST['City']);
$Infantname    =strtoupper($_POST['Infantname']);
$Gender        =$_POST['Gender'];


//Insert
$sql = "INSERT INTO table_birth(Mothers_Name,Fathers_Name,Mothers_phone,Fathers_phone,City_of_Birth,Infant_Name,Gender) VALUES('$Mothername','$Fathername ','$Motherphone','$Fatherphone','$City','$Infantname','$Gender')";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Infantname);
  $success="Baby $Userinput added successfully";
  header("Location: ../../VIEW/HTML/ADMIN/add_birth.php?success=$success");
  exit();
}
}

else{
  $error = 'Fill all fields';
  header("Location:  ../../VIEW/HTML/ADMIN/add_birth.php?error=$error");
}


 ?>
