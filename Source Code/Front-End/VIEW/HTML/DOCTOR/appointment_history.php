<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Doctor']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: doctor_login.php?error=$error");
	}
	if(isset($_GET['Appointment__id'])){
		$Appointment_id=$_GET['Appointment__id'];
		$sql="UPDATE table_appointment_history SET Action='Approved' WHERE Appointment_id='$Appointment_id'";
		$query=mysqli_query($conn,$sql);

		if($query){
			$success="Approved successfully";
			header("Location: appointment_history.php?success=$success");
			exit();
		}
		else{
			$success=" Not Approved";
			header("Location: appointment_history.php?success=$success");
			exit();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor | Appointment History</title>
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
    table {
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
    <?php include('../DOCTOR/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Doctor | Appointment History</h1>
        </section>
        <div class="view__patients">
            <div class="view__patients__content">
                <div class="search__title">
                    <h6>Search by Patient Email:</h6>
                </div>
                <div class="search__input">
                    <input type="text" id="myInput" onkeyup="mySearch()" required>
                </div>
            </div>
        </div>
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
                    <th>Patient Name</th>
                    <th>Appointment Creation Date</th>
                    <th>Appointment Date</th>
                    <th class="action">Appointment Time</th>
                    <th>Status</th>
                    <th>Click to Approve/Not</th>
                </tr>
            </thead>
            <tbody>
                <?php
											$sql="SELECT * FROM table_appointment_history WHERE Doctor_Name='".$_SESSION['Doctor']."'ORDER BY Appointment_creation_date DESC" ;
											$query=mysqli_query($conn,$sql);
											$count=1;
											while($row=mysqli_fetch_array($query))
											{
													$appointment_creation_date=date("d-F-Y", strtotime($row['Appointment_creation_date']));
													$appointment_date=date("d-F-Y", strtotime($row['Appointment_date']));

											?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['Patient_Name']; ?></td>
                    <td><?php echo $appointment_creation_date;?></td>
                    <td><?php echo $appointment_date;?></td>
                    <td><?php echo $row['Appointment_time'];?></td>
                    <td><?php echo $row['Action']; ?>
                    </td>
                    <td><a href="appointment_history.php?Appointment__id=<?php echo $row['Appointment_id']?>&del=delete"
                            onClick="return confirm('Are you sure you want to Approve')"> <i
                                class="fas fa-check"></i></a></td>
                    <?php $count=$count+1;
										}
											?>
            </tbody>
        </table>
        <script>
        function mySearch() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                //td2= tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    //txtValue2= td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        </script>
</body>

</html>