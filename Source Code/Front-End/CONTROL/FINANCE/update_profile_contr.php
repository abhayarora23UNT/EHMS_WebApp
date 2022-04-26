<?php
include_once '../../../DATABASE/connection.php';
session_start();
$target_dir = "../../../../images/";
$target_file = $target_dir . basename($_FILES["Avatar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["Avatar"]["tmp_name"]);
  if(!$check) {

    $error= "Invalid image format - " . $check["mime"] . ".";
    header("Location: ../../VIEW/HTML/FINANCE/update_profile.php?error=$error");
    exit();
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["Avatar"]["size"] > 500000) {
  $error= "Sorry, your image is too large select atleast 500kb.";
  header("Location: ../../VIEW/HTML/FINANCE/update_profile.php?error=$error");
  $uploadOk = 0;
  exit();
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
  $error="Sorry, only JPG, JPEG,& PNG photos are allowed";
  header("Location: ../../VIEW/HTML/FINANCE/update_profile.php?error=$error");
  $uploadOk = 0;
  exit();
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $error="Sorry, there was an error while uploading your profile";
  header("Location: ../../VIEW/HTML/FINANCE/update_profile.php?error=$error");
  exit();
// if everything is ok, try to upload file
} else {
  $User=$_SESSION['Finance_Email'];
  $sql = "UPDATE table_finance SET Avatar='$target_file' WHERE Email='$User'";
  $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
  if (move_uploaded_file($_FILES["Avatar"]["tmp_name"], $target_file)) {
    $success="Profile has been updated successfully";
    header("Location: ../../VIEW/HTML/FINANCE/update_profile.php?success=$success");
    exit();
  } else {
    $error="Sorry, there was an error while uploading your profile";
    header("Location: ../../VIEW/HTML/FINANCE/update_profile.php?error=$error");
    exit();
  }
}
 ?>
