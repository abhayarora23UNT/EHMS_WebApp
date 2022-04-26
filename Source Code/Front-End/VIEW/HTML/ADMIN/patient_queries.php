<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../admin_login.php?error=$error");
	}
	if(isset($_GET['Msg_id'])){
		$Messagee=$_GET['Msg_id'];
		$sql="DELETE FROM table_contactus WHERE Msg_id='$Messagee'";
		$query=mysqli_query($conn,$sql);

		if($query){
			$success="Message deleted from the system successfully";
			header("Location: Patient_queries.php?success=$success");
			exit();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Patient Queries</title>
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
    .table {
        width: 100%;
        height: auto;
        font-size: 0.9em;
        border-bottom: 1px solid silver;
    }

    .action i {
        color: #00B3AD;
    }

    .action i:hover {
        color: dodgerblue;
    }

    tr:hover {
        background-color: #2dace3;
    }
    </style>
</head>

<body>
    <?php include('../ADMIN/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Patients | Queries</h1>
        </section>
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
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Send Date</th>
                    <th>Status</th>
                    <th class="action">View or Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
											$sql="SELECT* FROM table_contactus ORDER BY Send_date DESC";
											$query=mysqli_query($conn,$sql);
											$count=1;
											while($row=mysqli_fetch_array($query))
											{
													$date=date("d-F-Y h:i:s a", strtotime($row['Send_date']));
											?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo strtoupper($row['Name']); ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Message'];?></td>
                    <td><?php echo $date;?></td>
                    <td id="status"> <?php echo $row['Msg_status']; ?></td>
                    <td class="action">
                        <a href="view_contactus_msgs.php?msgid=<?php echo $row['Msg_id'];?>"
                            onclick="Status_color();"><i class="fa fa-eye"></i></a>
                        <a href="patient_queries.php?Msg_id=<?php echo $row['Msg_id']?>&del=delete"
                            onClick="return confirm('Are you sure you want to delete this msg from <?php echo $row['Name']; ?>')">
                            <i class="fa fa-times fa fa-white"></i></a>
                    </td>
                </tr>
                <?php $count=$count+1;
										}
											?>
            </tbody>
        </table>
</body>

</html>