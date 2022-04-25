<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../admin_login.php?error=$error");
	}
  if(isset($_GET['feedback_id'])){
    $Messagee=$_GET['feedback_id'];
    $sql="DELETE FROM table_feedback WHERE feedback_id='$Messagee'";
    $query=mysqli_query($conn,$sql);

    if($query){
      $success="FeedBack deleted from the system successfully";
      header("Location: feedback.php?success=$success");
      exit();
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Patient FeedBack</title>
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
		.table{
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
			background-color: #2dace3;
		}
		</style>
 </head>
	<body>
<?php include('../ADMIN/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Patients | FeedBack</h1>
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
                        <th>User</th>
												<th>Rate</th>
												<th>Services</th>
												<th>Complains</th>
												<th>Suggestion</th>
												<th>Send Date</th>
                        <th class="action">Delete</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sql="SELECT* FROM table_feedback ORDER BY Send_date DESC";
											$query=mysqli_query($conn,$sql);
											$count=1;
											while($row=mysqli_fetch_array($query))
											{
													$date=date("d-F-Y h:i:s a", strtotime($row['Send_date']));
											?>
											<tr>
												<td><?php echo $count; ?></td>
												<td><?php echo strtolower($row['User']); ?></td>
												<td><?php echo $row['Rate']; ?></td>
												<td><?php echo $row['Services']; ?></td>
												<td><?php echo $row['Complain'];?></td>
                        <td><?php echo $row['Suggestion'];?></td>
												<td><?php echo $date;?></td>
												<td class="action">
													<a href="feedback.php?feedback_id=<?php echo $row['feedback_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete this feedback from <?php echo $row['User']; ?>')"> <i class="fa fa-times fa fa-white"></i></a>
												</td>
											</tr>
											<?php $count=$count+1;
										}
											?>
										</tbody>
		</table>
	</body>
</html>
