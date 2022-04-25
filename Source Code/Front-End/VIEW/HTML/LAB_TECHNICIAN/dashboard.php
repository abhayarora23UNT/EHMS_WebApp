<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Technician']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: lab_technician_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab Technician | Dashboard</title>
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
    <?php include('../LAB_TECHNICIAN/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Lab Technician | Dashboard</h1>
        </section>
        <div class="admin__overview">
            <h4></h4>
            <div class="first__row first__row">
                <div class="Doctors__overview Doctors__overview--Appointment">
                    <a href="manage_patients.php">
                        <div class="Doctors__overview__content">
                            <div class="total__docs">
                                <?php
					/*$sql="SELECT * FROM table_appointment_history WHERE Doctor_Name='".$_SESSION['Doctor']."' ";
					$query=mysqli_query($conn,$sql);
          $total_number = mysqli_num_rows($query);
					echo $total_number;
					*/
					?>
                            </div>
                            <div class="doc__icon">
                                <i class="fas fa-stethoscope" style='color:black'></i>
                            </div>
                            <h6>Lab Reports</h6>
                        </div>
                    </a>
                </div>
                <div class="death__report death__report--appointment">
                    <div class="death__report__overview__content">
                        <div class="total__deaths">
                            <?php
					echo date("d-m-Y");
					?>
                        </div>
                        <div class="death__icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h6>Date</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>