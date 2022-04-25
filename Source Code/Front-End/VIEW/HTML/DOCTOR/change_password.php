<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Doctor']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: doctor_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | Change Password</title>
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
 </head>
	<body>
<?php include('../DOCTOR/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Doctor | Change Password</h1>
	</section>
  <div class="adddoctor__main">
  <div class="adddoctor__content">
    <div class="adddoctor__title">
      <h5>Change Password</h5>
    </div>
    <form class="contactus__form" action="../../../CONTROL/DOCTOR/change_pass_contr.php" method="post">
           <div class="contactusform__inputs contactusform__inputs--adddoctor">
              <div class="passicon">
              <i class="fas fa-lock"></i>
                </div>
                <input type="password" name="Currentpassword"  placeholder="Current Password" required><br>
                <div class="passicon">
                <i class="fa fa-lock"></i>
                </div>
                <input type="password"  name="Newpassword" placeholder="New Password" required><br>
                <div class="passicon">
                <i class="fa fa-lock"></i>
                </div>
                <input type="password"  name="Confirmnewpassword" placeholder="Confirm New Password" required><br>
								<p style="color:red;font-size:0.8em;">
									<?php
									if (isset($_GET['error'])) {
										echo $_GET['error'];
									}
									 ?>
								</p>
								<p style="color:green;font-size:0.8em;">
									<?php
									if (isset($_GET['success'])) {
										echo $_GET['success'];
									}
									 ?>
								</p>
           <div class="submit__btn">
             <button type="submit" name="submit">
               Submit <i class="fa fa-arrow-circle-right"></i>
             </button>
           </div>
             </div>
       </form>
  </div>
</div>
</div>
	</body>
</html>
