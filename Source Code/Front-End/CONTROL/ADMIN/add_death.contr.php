<?php
include_once '../../../DATABASE/connection.php';
//Validate
if (!empty($_POST['Name']) && !empty($_POST['Nextofkinname']) && !empty($_POST['Nextofkinphone']) && !empty($_POST['Deathreason'])
&&  !empty($_POST['Gender'])) {

$Name            =$_POST['Name'];
$Nextofkinname   =$_POST['Nextofkinname'];
$Nextofkinphone  =$_POST['Nextofkinphone'];
$Death_reason    =$_POST['Deathreason'];
$Gender          =$_POST['Gender'];


//Insert
$sql = "INSERT INTO table_death(FullName,Next_of_kin_name,Next_of_kin_phone,Reason_of_death,Gender) VALUES('$Name','$Nextofkinname','$Nextofkinphone','$Death_reason','$Gender')";
$query = mysqli_query($conn,$sql);
if ($query) {
  $Userinput= strtolower($Name);
  $success="Death for $Userinput added successfully";
  header("Location: ../../VIEW/HTML/ADMIN/add_death.php?success=$success");
  exit();
}
}

else{
  $error = 'Fill all fields';
  header("Location:  ../../VIEW/HTML/ADMIN/add_death.php?error=$error");
}


 ?>
