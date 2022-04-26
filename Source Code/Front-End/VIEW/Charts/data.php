<?php
header('Content-Type: application/json');
include_once '../../../DATABASE/connection.php';

$sqlQuery = "SELECT user_id,FullName,Phone FROM table_patients ORDER BY user_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
