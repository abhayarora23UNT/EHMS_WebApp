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
    <title>Admin | View Infant</title>
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
    <style>
    .view_patient_table {
        width: 100%;
        height: 300px;
        background-color: inherit;
        margin-top: 30px;
        padding: 0.5px;
    }

    h5 {
        margin-left: 50px;
    }

    table {
        width: 90%;
        height: 100px;
        margin: 0 auto;
        border-color: silver;
        border-collapse: collapse;
        background-color: #ffffff;
        font-family: lucida, sans-serif;
    }

    td {
        padding: 10px;
    }
    </style>
</head>

<body>
    <?php include('../ADMIN/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h2 style="padding-left:15px">Admin | View Infant</h2>
        </section>
        <?php
	$Motherphone=$_GET['infant_id'];
	$sql="SELECT * FROM table_birth WHERE Mothers_Phone='$Motherphone'";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$Name=strtoupper($data['Infant_Name']);
	$Fatherphone=$data['Fathers_Phone'];
  $Mothername=$data['Mothers_Name'];
  $Fathername=$data['Fathers_Name'];
	$City=$data['City_of_Birth'];
	$Dob=date("d-F-Y",strtotime($data['Birth_date']));
	$Gender=$data['Gender'];
	$Age=date("Y") - date("Y",strtotime($Dob));
?>
        <div class="view_patient_table">
            <table border="1">
                <tr align="center">
                    <td colspan="4" style="font-size:20px;color:black">Patient Details</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Infant Name</td>
                    <td><?php echo $Name; ?></td>
                    <td style="font-weight:bold;">Mother Name</td>
                    <td><?php echo $Mothername; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Fathers Name</td>
                    <td><?php echo $Fathername; ?></td>
                    <td style="font-weight:bold;">Mothers Phone</td>
                    <td><?php echo $Motherphone; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Fathers Phone</td>
                    <td><?php echo $Fatherphone; ?></td>
                    <td style="font-weight:bold;">D.O.B</td>
                    <td><?php echo $Dob; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Gender</td>
                    <td><?php echo $Gender; ?></td>
                    <td style="font-weight:bold;">Infant Age</td>
                    <td><?php echo $Age; ?> Year ('s)</td>
                </tr>
                <?php } ?>
                </tr>
            </table>
        </div>
</body>

</html>