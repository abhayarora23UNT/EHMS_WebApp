<?php
session_start();
include_once '../../../DATABASE/connection.php';

if (!empty($_POST['mpesa']) OR !empty($_POST['cash']) AND isset($_GET['Id'])) {

		$Mpesa=$POST['mpesa'];
		$Cash=$_POST['cash'];
		$Payments_id=$_GET['Id'];

		$sql = "UPDATE table_payments SET Mpesa ='$Mpesa', Cash= '$Cash' WHERE Id='$Payments_id'";
		$query = mysqli_query($conn,$sql);
		if ($query) {
		  $success="Your amount updated successfully.";
		  header("Location: ../../VIEW/HTML/FINANCE/View_payment_details?success=$success");
		}
		else{
			$error ="Error in updating amount";
			header("Location: ../../VIEW/HTML/FINANCE/View_payment_details.php?error=$error");
		}
}
?>
