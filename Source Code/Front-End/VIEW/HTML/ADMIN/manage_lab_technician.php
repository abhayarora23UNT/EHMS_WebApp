<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../admin_login.php?error=$error");
	}
	if(isset($_GET['Email'])){
		$Email=$_GET['Email'];
		$sql="DELETE FROM table_lab_technician WHERE Email='$Email'";
		$query=mysqli_query($conn,$sql);

		if($query){
			$success="Lab technician deleted from the system successfully";
			header("Location: manage_lab_technician.php?success=$success");
			exit();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Manage Lab Technician</title>
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

    .top {
        display: flex;
    }
    </style>
</head>

<body>
    <?php include('../ADMIN/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Admin | Manage Lab Technician</h1>
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
        <div class="search__title">
            <h6>Search by Phone</h6>
        </div>
        <div class="search__input">
            <input type="text" id="myInput" onkeyup="mySearch()" required value="">
        </div>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Entry date</th>
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
											$sql="SELECT* FROM table_lab_technician";
											$query=mysqli_query($conn,$sql);
											$count=1;

											while($row=mysqli_fetch_array($query))
											{
												$date=date("d-m-yy", strtotime($row['Entry_date']));
											?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $date;?></td>
                    <td class="action">
                        <a href="edit_lab_technician.php?Email=<?php echo $row['Email'];?>" tooltip-placement="top"
                            tooltip="Edit"><i class="fa fa-pencil"></i></a>
                        <a href="manage_lab_technician.php?Email=<?php echo $row['Email']?>&del=delete"
                            onClick="return confirm('Are you sure you want to delete Technician <?php echo $row['Name']; ?>')">
                            <i class="fa fa-times fa fa-white"></i></a>
                    </td>
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
                td = tr[i].getElementsByTagName("td")[4];
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