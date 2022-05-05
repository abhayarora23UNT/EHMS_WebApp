<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: admin_login.php?error=$error");
	}

	if(isset($_GET['payments_id'])){
		$Payments_id=$_GET['payments_id'];
		$sql="UPDATE table_payments SET Status='Paid' WHERE Id='$Payments_id'";
		$query=mysqli_query($conn,$sql);

		if($query){
			$success="Confirmed successfully";
			header("Location: manage_patients.php?success=$success");
			exit();
		}
		else{
			$success=" Not Confirmed";
			header("Location: manage_patients.php?success=$success");
			exit();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Manage Payments</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
    <?php include('../ADMIN/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h2 style="padding-left:15px">Admin | Manage Payments</h2>
        </section>
        <div class="view__patients">
            <div class="view__patients__content">
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
                
            </div>
        </div>
        <table class="table" id="myTable" style="margin-left:18px;margin-top:30px">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Send date</th>
                    <th>Amount</th>
                    <th>Due Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
											$sql="SELECT* FROM table_payments ORDER BY Send_date Desc";
											$query=mysqli_query($conn,$sql);
											$count=1;
											while($row=mysqli_fetch_array($query))
											{
													$date=$row['Send_date'];
													$Total_amount=$row['Lab_test_fee'] + $row['Consultation_fee'] + $row['Pharmacy_fee'] + $row['Treatment_fee'];
													$Mpesa=$row['Mpesa'];
													$Cash=$row['Cash'];
													$Due=$Total_amount-($Mpesa+$Cash);
											?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $date;?></td>
                    <td><?php echo $Total_amount; ?></td>
                    <td><?php echo $Due; ?></td>
                    <td><?php echo $row['Status']; ?></td>
                </tr>
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
                td = tr[i].getElementsByTagName("td")[2];
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

        function date_search() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("date_search");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
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

        $('#date_search').flatpickr({
            enableTime: false,
            dateFormat: "Y-m-d",

        });
        </script>
</body>

</html>