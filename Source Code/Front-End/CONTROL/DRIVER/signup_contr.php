<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Address'])&& !empty($_POST['City']) && !empty($_POST['Pass1'])
&& !empty($_POST['Pass2']) && !empty($_POST['Gender'])&& !empty($_POST['Agree_terms'])) {

$Name     = $_POST['Name'];
$Email    = $_POST['Email'];
$Address  = $_POST['Address'];
$City     = $_POST['City'];
$Password = $_POST['Pass1'];
$Gender   =$_POST['Gender'];

$sql="SELECT * FROM table_patients2 WHERE Email='$Email'";
$query=mysqli_query($conn,$sql);
$check_rows=mysqli_num_rows($query);

if ($Password != $_POST['Pass2']) {

 $error = "password do not match";
 header("Location: ../../VIEW/HTML/PATIENT/signup.php?error=$error");
exit();
}
 else if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){

  $error = "$Email is an invalid email format";
  header("Location:  ../../VIEW/HTML/PATIENT/signup.php?error=$error");
exit();
}
else if (strlen($Password) < 6 ) {

  $error = "Password must be atleast 6 characters";
  header("Location:  ../../VIEW/HTML/PATIENT/signup.php?error=$error");

exit();
}
else if ($check_rows > 0) {
  $error = "User with '$Email' already exist";
  header("Location:  ../../VIEW/HTML/PATIENT/signup.php?error=$error");
  exit();
}
  else{
//Insert
$password_hash = md5($Password);
$sql = "INSERT INTO table_patients2(FullName,Email,Address,City,Password,Gender) VALUES('$Name','$Email','$Address','$City','$password_hash','$Gender')";
$query = mysqli_query($conn,$sql);
if ($query) {
  $sql = "SELECT * FROM table_patients2 WHERE Email = '$Email' AND Password = '$password_hash'";
  $query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_array($query);
        session_start();
  $_SESSION['Email'] = $result["Email"];
  $_SESSION['Password'] = $result["Password"];

  header("Location: ../../VIEW/HTML/PATIENT/dashboard.php?");
}
}
}

else{
  $error = "Fill all fields";
  header("Location: ../../VIEW/HTML/PATIENT/signup.php?error=$error");
}




 ?>
