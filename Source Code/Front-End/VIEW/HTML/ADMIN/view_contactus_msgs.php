<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../admin_login.php?error=$error");
	}
	$Msg_id=$_GET['msgid'];
	$Status_msg="Seen";
	if(isset($Msg_id)){
	 $sql = "UPDATE table_contactus SET Msg_status = '$Status_msg' WHERE Msg_id='$Msg_id'";
	 $query=mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | View Contact us Msgs</title>
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
            <h1>Admin | View Contact us Msgs</h1>
        </section>
        <?php
	$Msg_id=$_GET['msgid'];
	$sql="SELECT * FROM table_contactus WHERE Msg_id='$Msg_id'";
	$query=mysqli_query($conn,$sql);
	while($data=mysqli_fetch_array($query)){
	$date=date("d-F-yy,h:i:s a",strtotime($data['Send_date']));
	$Name=strtolower($data['Name']);
  $Email=$data['Email'];
	$Phone=$data['Phone'];
  $Message=$data['Message'];
?>
        <table>
            <tr>
                <td><b>Name:</b> <?php echo $Name; ?></td>
            </tr>
            <tr>
                <td><b>Email:</b> <?php echo $Email; ?></td>
            </tr>
            <tr>
                <td><b>Phone:</b> <?php echo $Phone; ?></td>
            </tr>
            <tr>
                <td><b>Send Date:</b> <?php echo $date; ?></td>
            </tr>
            <tr>
                <td><b>Message:</b> <?php echo $Message; ?></td>
            </tr>
            <tr>
                <td><a href="patient_queries.php?">Go Back to all Messages</a></td>
            </tr>
        </table>
        <?php } ?>
    </div>
</body>

</html>