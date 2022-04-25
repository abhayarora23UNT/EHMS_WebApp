<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Technician_Email']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../lab_technician_login.php?error=$error");
	}
   ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Technician | Update Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fa-brands.css">
    <link rel="stylesheet" href="../../fontawesome/css/fa-regular.css">
    <link rel="stylesheet" href="../../fontawesome/css/fa-regular.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.min.css">
    <style media="screen">
      .choose_image{
        height: 0px;
        overflow:hidden;
      }
      .avatar{
        margin-left: 23px;
      }
      .choose_image_btn{
        width: 10%;
        height: 85px;
        border-radius: 45%;
        outline: none;
      }
    </style>
 </head>
	<body>
<?php include('../LAB_TECHNICIAN/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Technician | Update Profile</h1>
	</section>
  <div class="adddoctor__main" style="display:flex;justify-content:center">
  <div class="adddoctor__content">
    <div class="adddoctor__title">
      <h5>Update Profile</h5>
    </div>
    <form action="../../../CONTROL/LAB_TECHNICIAN/update_profile_contr.php" enctype="multipart/form-data" method="post">
								<p style="color:red;font-size:1em;">
									<?php
									if (isset($_GET['error'])) {
										echo $_GET['error'];
									}
									 ?>
								</p>
								<p style="color:green;font-size:1em;">
									<?php
									if (isset($_GET['success'])) {
										echo $_GET['success'];
									}
									 ?>
								</p>
                <div class="choose_image">
                  <input class="avatar"type="file" id="Avatar" name="Avatar">
                </div>
                <button class="choose_image_btn"type="button" onclick="ChooseAvatar();">choose profile</button>
           <div class="submit__btn">
             <button type="submit" name="submit">
               Update <i class="fa fa-arrow-circle-right"></i>
             </button>
           </div>
       </form>
  </div>
</div>
</div>
<script type="text/javascript">
function ChooseAvatar(){
document.getElementById("Avatar").click();
}
</script>
	</body>
</html>
