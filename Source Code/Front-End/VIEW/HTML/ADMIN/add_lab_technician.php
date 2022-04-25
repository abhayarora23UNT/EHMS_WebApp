<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../admin_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Add Lab Technician</title>
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
    <?php include('../ADMIN/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Admin | Add Lab Technician</h1>
        </section>
        <div class="adddoctor__main" style="display:flex;justify-content:center">
            <div class="adddoctor__content">
                <div class="adddoctor__title">
                    <h5>Add Lab Technician</h5>
                </div>
                <form class="contactus__form" action="../../../CONTROL/ADMIN/add_lab_technician_contr.php"
                    method="POST">
                    <div class="contactusform__inputs contactusform__inputs--adddoctor">
                        <div class="usericon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" name="Name" placeholder="Name" required style="color:black;"><br>
                        <div class="passicon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" name="Email" placeholder="Email" required style="color:black;">
                        <div class="passicon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name="Phone" placeholder="Phone" required style="color:black;">
                        <div class="passicon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="Pass1" placeholder="Password" required style="color:black;"><br>
                        <div class="passicon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" name="Pass2" placeholder="Confirm Password" required
                            style="color:black;"><br>
                        <p style="color:red;font-size:1.2em;">
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
                        <div class="submit__btn">
                            <button type="submit" name="submit">
                                Save <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>