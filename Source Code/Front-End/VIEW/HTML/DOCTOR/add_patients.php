<?php
session_start();
if (!isset($_SESSION['Doctor']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: doctor_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor | Add Patients</title>
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
            <h2 style="padding-left:15px">Doctor | Add Patients</h2>
        </section>
        <div class="adddoctor__main" style="display:flex;justify-content:center">
            <div class="adddoctor__content">
                <div class="adddoctor__title">
                    <h5>Add Patients</h5>
                </div>
                <form class="" action="../../../CONTROL/DOCTOR/add_patient_contr.php" method="post">
                    <div class="form__inputs">
                        <div class="usericon">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="text" name="Name" placeholder="Full Name" required style="color:black;"><br>
                        <div class="passicon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name="Phone" placeholder="Phone" required style="color:black;"><br>
                        <div class="usericon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" name="Email" placeholder="Email" required style="color:black;"><br>
                        <div class="passicon">
                            <i class="far fa-building"></i>
                        </div>
                        <input type="text" name="City" placeholder="City" required style="color:black;"><br>

                        <div class="passicon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <input type="text" name="Address" placeholder="Address" required style="color:black;">
                        <div class="passicon">
                            <i class="fa fa-calendar-check"></i>
                        </div>
                        <input type="date" name="dob" placeholder="D.O.B" required style="color:black;"><br>
                        <label class="gender_lable"> Gender</label>
                        <div class="gender">
                            <label>Male</label>
                            <input type="radio" name="Gender" value="Male">
                            <label>Female</label>
                            <input type="radio" name="Gender" value="Female">
                        </div>
                        <p style="color:red;font-size:1em;">
                            <?php
			if (isset($_GET['error'])) {
				echo $_GET['error'];
			}
			 ?>
                        </p>
                        <p style="color:green;font-size:1.2em;">
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
    </div>
</body>

</html>