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
    <title>Admin | View Patient</title>
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
            <h2 style="padding-left:15px">Admin | View Patient</h2>
        </section>
        <?php
	$Email=$_GET['patient_view_id'];
	$sql="SELECT * FROM table_patients WHERE Email='$Email'";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$date=date("d-F-yy,h:i:s a",strtotime($data['Visit_date']));
	$Name=strtolower($data['FullName']);
	$Phone=$data['Phone'];
	$Address=$data['Address'];
	$City=$data['City'];
	$Dob=date("d-F-Y",strtotime($data['DOB']));
	$Gender=$data['Gender'];
	$Age=date("Y") - date("Y",strtotime($Dob));
?>
        <div class="view_patient_table">
            <table border="1">
                <tr align="center">
                    <td colspan="4" style="font-size:20px;color:black">Patient Details</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Patient Name</td>
                    <td><?php echo $Name; ?></td>
                    <td style="font-weight:bold;">Patient Email</td>
                    <td><?php echo $Email; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Patient Phone</td>
                    <td><?php echo $Phone; ?></td>
                    <td style="font-weight:bold;">Patient Address</td>
                    <td><?php echo $Address; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">City</td>
                    <td><?php echo $City; ?></td>
                    <td style="font-weight:bold;">D.O.B</td>
                    <td><?php echo $Dob; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Gender</td>
                    <td><?php echo $Gender; ?></td>
                    <td style="font-weight:bold;">Patient Age</td>
                    <td><?php echo $Age; ?> Year ('s)</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Registration Date</td>
                    <td><?php echo $date; ?></td>
                    <td style="font-weight:bold;">Last Visit Date</td>
                    <td><?php echo Date("d-F-yy,h:i:s a"); ?></td>
                    <?php } ?>
                </tr>
            </table>
        </div>
</body>

</html>