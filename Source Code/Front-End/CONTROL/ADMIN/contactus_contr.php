<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Phone']) && !empty($_POST['Email'])
&& !empty($_POST['Message'])) {

$Name     = strtolower($_POST['Name']);
$Phone    = $_POST['Phone'];
$Email    = strtolower($_POST['Email']);
$Message  = strtolower($_POST['Message']);

if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){

  $error = "$Email is an invalid email format";
  header("Location:  ../../VIEW/HTML/contactus.php?error=$error");
exit();
}
else if (strlen($Phone) < 10 ) {

  $error = "Phone must be atleast 10 characters";
  header("Location:  ../../VIEW/HTML/contactus.php?error=$error");

exit();
}
  else{
//Insert
$Status="unseen";
$sql = "INSERT INTO table_contactus(Name,Phone,Email,Message,Msg_status) VALUES('$Name','$Phone','$Email','$Message','$Status')";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Name);
  $success="Hi? $Userinput, your message has been sent successfully,We will reply as soon as possible.<br>You can still reach us through social links below.";
  header("Location: ../../VIEW/HTML/contactus.php?success=$success");
  exit();
}
}
}

else{
  $error = "Fill all fields";
  header("Location: ../../VIEW/HTML/contactus.php?error=$error");
}




 ?>
