<?php
include_once '../../../../DATABASE/connection.php';
session_start();

  if (isset($_GET['Id']))
	{
		 $Payments_id=$_GET['Id'];

		$_SESSION['payments_id'] = $Payments_id;
  }
	else {
		$Payments_id=$_SESSION['payments_id'];
	}

if (!isset($_SESSION['Finance_Email']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: finance_login.php?error=$error");
	}

     // var_dump($_POST);
		 // die();
	if (!empty($_POST['mpesa']) || !empty($_POST['cash'])) {
		$Mpesa=$_POST['mpesa'];
		$Cash=$_POST['cash'];
      // die($Mpesa);
		$sql = "UPDATE table_payments SET Mpesa ='$Mpesa', Cash= '$Cash' WHERE Id='$Payments_id'";
		$query = mysqli_query($conn,$sql);
		if ($query) {
		  $success="Your amount updated successfully.";
		  header("Location: manage_patients.php?success=$success");
		}
		else{
			$error ="Error in updating amount";
			header("Location: manage_patients.php?error=$error");
		}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Finance  | View Payment</title>
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
        .payments_details{
          width: auto:;
          height:auto;
          background-color: ;
        }
    		.table {
    			width: 100%;
    			margin-bottom: 0px;
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
					margin-top: 5px;
          font-size: 17px;
          font-weight: bold;
          font-family: sans-serif;
          border: 2px solid #AD0B00;
          border-radius: 15px;
        }
				#SaveButton{
					width: 10%;
					background-color: #00B3AD;
					margin-top: 5px;
					font-size: 17px;
					font-weight: bold;
					font-family: sans-serif;
					border: 2px solid dodgerblue;
					border-radius: 15px;
					color: #ffffff;
				}
        .total td{
          border-bottom:2px solid black;
        }
        @media print {

       .no-print{
               display : none !important;
                }
              }
              .Receipt_top{
                background-color: ;
                display: flex;
              }
              .payment_form{
                margin-top: -20px;
              }
              .Receipt_stamp{
                width: 100%;
                height: 120px;
                margin-left: 40px;
                background-color:;
              }
		</style>
 </head>
	<body>
<?php include('../FINANCE/INCLUDES/sidebar.php');?>
<?php include('../ADMIN/INCLUDES/footer.php');?>
<div id="section__content" class="section__content">
	<section id="admin__dashboard" class="admin__dashboard">
		<h1>Finance | View Payment</h1>
	</section>
  <body>
    <div id="Receipt"class="Receipt">
    <?php

    $sql="SELECT * FROM table_payments WHERE Id=$Payments_id;";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query))
    {
      $Total_amount=$row['Lab_test_fee'] + $row['Consultation_fee'] + $row['Pharmacy_fee'] + $row['Treatment_fee'];
      $Name=$row['Name'];
			$Mpesa=$row['Mpesa'];
			$Cash=$row['Cash'];
			$Due=$Total_amount-($Mpesa+$Cash);
			$sql="INSERT INTO table_payments(Due)values('$Due')";
    ?>
    <div class="Receipt_top">
      <div class="user_payment">
        <b>Saint Paul ii Medical Clinic</b><br>
        <b>Mombasa</b><br>
        <b>Payment Receipt</b><br>
              <b style="margin-left:5px;">NAME:......<?php echo$Name; ?></b>
      <br />
      <b style="color:blue;">Date Prepared:</b>
      <?php
        echo date("D-M-Y  h:i:a");
      ?>
      </div>
      <div class="Receipt_stamp">
        <b>Signature................................................................</b><br><br>
        <b>Stamp......................................................................</b>
      </div>
    </div>
	<p style="color:red;font-size:0.8em;">
		<?php
		if (isset($_GET['error'])) {
			echo $_GET['error'];
		}
		 ?>
	</p>
	<p style="color:green;font-size:0.8em;">
		<?php
		if (isset($_GET['success'])) {
			echo $_GET['success'];
		}
		 ?>
	</p>
	<br /><br />
	<form class="payment_form" action="View_payment_details.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['Id'] ?>">
  <div class="payments_details">
	<table class="table table-striped">
		<thead style="background-color:dodgerblue;">
			<tr>
				<th>Particulars</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align:left;">1.Consultation fee</td>
        <td><?php echo $row['Consultation_fee']; ?></td>
      </tr>
      <tr>
				<td style="text-align:left;">2.Lab test fee</td>
        <td><?php echo $row['Lab_test_fee']; ?></td>
			</tr>
      <tr>
        <td style="text-align:left;">3.Treatment fee</td>
        <td><?php echo $row['Treatment_fee']; ?></td>
      </tr>
      <tr>
        <td style="text-align:left;">4.Pharmacy fee</td>
        <td><?php echo $row['Pharmacy_fee']; ?></td>
      </tr>
      <tr>
        <td style="text-align:left;">5.Other charges</td>
        <td><?php echo $row['Other_charges']; ?></td>
      </tr>
      <tr>
        <td style="text-align:left;font-size:0.9em;font-Weight:bold;">Total</td>
        <td style="font-weight:bold;border-bottom:2px solid black;border-top:2px solid black;"><?php echo $Total_amount; ?></td>
      </tr>
			<tr>
				<td style="text-align:left;font-size:0.9em;font-Weight:bold;">Amount paid Via M-PESA</td>
						<td><input style="border-style:none;outline:none;"type="text" name="mpesa"  placeholder="Enter Amount" value="<?php echo $row['Mpesa']; ?>"required></td>
						<tr>
							<td style="text-align:left;font-size:0.9em;font-Weight:bold;">Amount paid in Cash</td>
							<td><input style="border-style:none;outline:none;background-color: #F0F0F9;"type="text" name="cash"  placeholder="Enter Amount" value="<?php echo $row['Cash']; ?>"required></td>
						</tr>
						<tr>
							<td style="text-align:left;font-size:0.9em;font-Weight:bold;">Balance Due</td>
							<td style="font-weight:bold;border-bottom:2px solid black;border-top:2px solid black;"><?php echo $Due ; ?></td>
						</tr>
			</tr>
      <?php }  ?>
		</tbody>
	</table>
  </div>
	      </div>
				<div class="btn_finance">
					<button id="SaveButton" name="Save">Save</button>
					<button style="float:right;"id="PrintButton" onclick="printreceipt();">Print</button>
				</div>
					</form>
      <script>
              function printreceipt() {
                  var divContents = document.getElementById("Receipt").innerHTML;
                  var a = window.open('', '', 'height=500, width=500');
                  a.document.write('<html>');
                  a.document.write(divContents);
                  a.document.write('</body></html>');
                  a.document.close();
                  a.print();
              }
          </script>
</body>
</html>
