<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Nurse']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: nurse_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nurse  | Allocate Ward</title>
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
		</style>
 </head>
	<body>
<?php include('../NURSE/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Nurse | Allocate Ward</h1>
	</section>
  <div class="adddoctor__main adddoctor__main--emptybeds">
  <div class="adddoctor__content adddoctor__content--nurse">
    <div class="adddoctor__title">
      <h5>Allocate Ward</h5>
    </div>
		<form class="" action="../../../CONTROL/NURSE/allocate_ward_contr.php" method="post">
    <div class="form__inputs">
      <div class="usericon">
      <i class="fas fa-user"></i>
        </div>
        <input type="text" name="Name"  placeholder="Name of the Patient" required style="color:black;"><br>
        <div class="passicon">
        <i class="fas fa-circle"></i>
        </div>
        <input type="text"  name="Disease" placeholder="Disease suffering from" required style="color:black;">
        <div class="passicon">
        <i class="far fa-building"></i>
          </div>
          <input type="text" name="Wardname"  placeholder="Ward Name" required style="color:black;"><br>
          <div class="usericon">
          <i class="fa fa-bed"></i>
          </div>
          <input type="text"  name="Bedno" placeholder="Bed Number" required style="color:black;"><br>
					<div class="usericon">
          <i class="fa fa-phone"></i>
          </div>
					<input type="text" name="NextofKinPhone"  placeholder="Next of Kin Phone" required style="color:black;"><br>
            <label class="gender_lable">Gender</label>
      <div class="gender">
        <label>Male</label>
        <input type="radio" name="Gender" value="Male">
        <label>Female</label>
        <input type="radio" name="Gender" value="Female" >
      </div>
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
    <div class="login__btn login__btn--Patients">
      <button type="submit" name="submit">
        Save <i class="fa fa-arrow-circle-right"></i>
      </button>
    </div>
		</form>
  </div>
</div>
<div class="unoccupied_beds">
	<table>
		<thead>
			<th>Un-Occupied Beds</th>
		</thead>
		<tbody>
			<tr>
				<td class="one">25</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
	</body>
</html>
