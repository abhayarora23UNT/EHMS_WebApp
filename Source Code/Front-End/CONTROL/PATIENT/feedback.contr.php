<?php
include_once '../../../DATABASE/connection.php';
//Validate
session_start();
if (!empty($_POST['r']) && !empty($_POST['s']) && !empty($_POST['c']) &&!empty($_POST['sg'])){

$Rate         = $_POST['r'];
$Services     = $_POST['s'];
$Complains    = $_POST['c'];
$Suggestion   = $_POST['sg'];


$User=$_SESSION['Email'];
$sql="INSERT INTO table_feedback(User,Rate,Services,Complain,Suggestion) VALUES('$User','$Rate','$Services','$Complains','$Suggestion')";
$query=mysqli_query($conn,$sql);
if($query){
  echo "feedback sent";
}
else{
  echo "error!!,try again";
}
}
else{
  echo "fill all the fields";
}





 ?>
