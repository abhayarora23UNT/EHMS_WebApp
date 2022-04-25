<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Pharmacist_Email']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: pharmacist_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pharmacist | View Payment</title>
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
        .payments_details{
          width: 50%
          height:100px;
          background-color: ;
        }
    		.table {
    			width: 100%;
    			margin-bottom: 20px;
    		}

    		.table-striped tbody > tr:nth-child(odd) > td,
    		.table-striped tbody > tr:nth-child(odd) > th {
    			background-color: #f9f9f9;
    		}

    		@media print{
    			#print {
    				display:none;
    			}
    		}
    		@media print {
    			#PrintButton {
    				display: none;
    			}
    		}

    		@page {
    			size: auto;   /* auto is the initial value */
    			margin: 0;  /* this affects the margin in the printer settings */
    		}
        #PrintButton{
          width: 10%;
          background-color: pink;
          font-size: 17px;
          font-weight: bold;
          font-family: sans-serif;
          border: 2px solid #AD0B00;
          border-radius: 15px;
        }
        .total td{
          border-bottom:2px solid black;
        }
        @media print {

       .no-print{
               display : none !important;
                }
              }
		</style>
 </head>
	<body>
<?php include('../PHARMACIST/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Pharmacist | View Payment</h1>
	</section>
  <body>
    <div id="Receipt"class="Receipt">
    <?php
    $Prescription_id=$_GET['Id'];
    $sql="SELECT * FROM table_pharmacy WHERE Id=$Prescription_id;";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query))
    {
      $Name=$row['Name'];
    ?>
    <b>Saint Paul ii Medical Clinic</b><br><br>
    <b>Mombasa</b><br><br>
    <b>Prescription</b><br><br>
          <b style="margin-left:5px;">NAME:......<?php echo$Name; ?></b>
	<br /> <br /> <br /> <br />
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
  <div class="payments_details">
	<table class="table table-striped">
		<thead style="background-color:dodgerblue;">
			<tr>
				<th>Particulars</th>
			</tr>
		</thead>
		<tbody>
      <tr style="font-size:1.2em;">
        <td><?php echo $row['Prescription']; ?></td>
      </tr>
      <?php }  ?>
		</tbody>
	</table>
  </div>
      </div>

</body>
</html>
