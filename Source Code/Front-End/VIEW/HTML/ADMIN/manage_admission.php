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
		<title>Admin  | Manage Admission</title>
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
		<h1>Admin | Manage Admission</h1>
	</section>
	<div class="view__patients">
    <div class="view__patients__content">
      <div class="search__title">
        <h6>Search by Phone</h6>
      </div>
      <div class="search__input">
      <input type="text" id="myInput" onkeyup="mySearch()"required value="07">
        </div>
    </div>
  </div>
	<table class="table" id="myTable">
										<thead>
											<tr>
												<th>#</th>
												<th>Patient Name</th>
												<th>Nurse</th>
												<th>Disease</th>
												<th>Ward Name</th>
												<th>Bed No</th>
												<th>Next of kin No</th>
												<th>Admission Date</th>
												<th>Discharge Date</th>
												<th>Gender</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sql="SELECT* FROM table_ward ORDER BY Date_of_Admission DESC";
											$query=mysqli_query($conn,$sql);
											$count=1;
											while($row=mysqli_fetch_array($query))
											{
													$date=date("d-F-Y:h:m", strtotime($row['Date_of_Admission']));
													$date1=date("d-F-Y", strtotime($row['Date_of_Discharge']));

											?>
											<tr>
												<td><?php echo $count; ?></td>
												<td><?php echo $row['Patient_Name']; ?></td>
												<td><?php echo $row['Nurse']; ?></td>
												<td><?php echo $row['Disease']; ?></td>
												<td><?php echo $row['Ward_Name']; ?></td>
												<td><?php echo $row['Bed_No'];?></td>
                        <td><?php echo $row['Next_of_Kin_Phone'];?></td>
                        <td><?php echo $date?></td>
												<td><?php echo $row['Date_of_Discharge'];?></td>
												<td><?php echo $row['Gender'];?></td>
												<td><?php echo $row['Status'];?></td>
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
    td = tr[i].getElementsByTagName("td")[6];
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
