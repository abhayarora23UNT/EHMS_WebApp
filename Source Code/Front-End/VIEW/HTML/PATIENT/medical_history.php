<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Email']) && !isset($_SESSION['Password'])) {
	$error="You must log-in first";
		header("location: ../patient_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient | Medical History</title>
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
    table {
        width: 90%;
        height: auto;
        margin: 0 auto;
        border-color: silver;
        border-collapse: collapse;
        background-color: #ffffff;
        font-family: lucida, sans-serif;
    }

    td {
        padding: 10px;
    }

    .patient__medical__history {
        width: 100%;
        height: 100px;
        background-color: inherit;
        padding: 0.5px;
    }
    </style>
</head>

<body>
    <?php include('../PATIENT/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Patient | Medical History</h1>
        </section>
        <?php
	$Email=$_SESSION['Email'];
	$sql="SELECT * FROM table_medical_history WHERE Email='$Email' ORDER BY Visit_date DESC";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$date=date("d-F-yy,h:i:s a",strtotime($data['Visit_date']));
	$count=1;
?>
        <div class="patient__medical__history">
            <table border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Body Temperature</th>
                        <th>Blood Pressure</th>
                        <th>Weight</th>
                        <th>Blood Sugar</th>
                        <th>Medical Prescription</th>
                        <th>Visit Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $data['Temp']; ?></td>
                        <td><?php echo $data['Pressure']; ?></td>
                        <td><?php echo $data['Weight']; ?></td>
                        <td><?php echo $data['Sugar']; ?></td>
                        <td><?php echo $data['Prescription']; ?></td>
                        <td><?php echo $date; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php $count=$count+1;} ?>

</body>

</html>