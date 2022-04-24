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
		<title>Patients | Appointment History</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">.
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
		table{
			width: 100%;
			height: auto;
			font-size: 0.9em;
			border-bottom: 1px solid silver;
		}
		.action i{
			color:#00B3AD;
		}
		.action i:hover{
			color:dodgerblue;
		}
		tr:hover{
			background-color: #22E791;
		}
		</style>
 </head>
	<body>
<?php include('../ADMIN/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Patients | Appointment History</h1>
	</section>
	<div class="view__patients">
    <div class="view__patients__content">
      <div class="search__title">
        <h6>Search by Patient Email:</h6>
      </div>
      <div class="search__input">
      <input type="text" id="myInput" onkeyup="mySearch()"required>
        </div>
    </div>
  </div>
	<table class="table" id="myTable">
										<thead>
											<tr>
												<th>#</th>
												<th>Patient Email</th>
												<th>Doctor Name</th>
												<th>Specialization</th>
												<th>Appointment Creation Date</th>
												<th>Appointment Date</th>
												<th>Appointment Time</th>
												<th class="action">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sql="SELECT* FROM table_appointment_history ORDER BY Appointment_creation_date DESC";
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
												<td><?php echo $row['Doctor_Name']; ?></td>
												<td><?php echo $row['Specialization']; ?></td>
												<td><?php echo $appointment_creation_date;?></td>
												<td><?php echo $appointment_date;?></td>
												<td><?php echo $row['Appointment_time'];?></td>
												<td  class="action"><?php echo $row['Action']; ?></td>
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
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script type="text/javascript">
	if(document.getElementById('Action').innertext="Approved"){
		document.getElementById('Action').style.color="lightgreen";
	}
	else{
		document.getElementById('Action').style.color="red";
	}
</script>
	</body>
</html>
