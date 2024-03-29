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
    <title>Admin | Add Death</title>
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
            <h2 style="padding-left:15px">Admin | Add Death</h2>
        </section>
        <div class="adddoctor__main" style="display:flex;justify-content:center">
            <div class="adddoctor__content">
                <div class="adddoctor__title">
                    <h5>Add Death</h5>
                </div>
                <form class="" action="../../../CONTROL/ADMIN/add_death.contr.php" method="post">
                    <div class="form__inputs">
                        <div class="usericon">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="text" name="Name" placeholder="Full Name" required style="color:black;"><br>
                        <div class="passicon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <input type="text" name="Nextofkinname" placeholder="Next of kin name" required
                            style="color:black;">
                        <div class="passicon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name="Nextofkinphone" placeholder="Next of kin phone" required
                            style="color:black;"><br>
                        <div class="passicon">
                            <i class="far fa-building"></i>
                        </div>
                        <input type="text" name="City" placeholder="City" required><br>
                        <textarea class="death__reason" name="Deathreason" rows="3" cols="73.9" maxlength="100" required
                            placeholder="Cause of the death" style="color:black;"></textarea><br>
                        <label class="gender_lable"> Gender</label>
                        <div class="gender">
                            <label>Male</label>
                            <input type="radio" name="Gender" value="Male">
                            <label>Female</label>
                            <input type="radio" name="Gender" value="Female">
                        </div>
                        <div class="login__btn login__btn--Patients">
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