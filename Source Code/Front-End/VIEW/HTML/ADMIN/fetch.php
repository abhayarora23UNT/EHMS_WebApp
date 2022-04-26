<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: ../admin_login.php?error=$error");
	}
$columns = array('user_id', 'FullName', 'Phone', 'Email', 'City' ,'Address','DOB' ,'Visit_date','Gender');

$query = "SELECT * FROM table_patients WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'Visit_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (user_id LIKE "%'.$_POST["search"]["value"].'%"
  OR FullName LIKE "%'.$_POST["search"]["value"].'%"
  OR Phone LIKE "%'.$_POST["search"]["value"].'%"
  OR Email LIKE "%'.$_POST["search"]["value"].'%"
  OR City LIKE "%'.$_POST["search"]["value"].'%"
  OR Address LIKE "%'.$_POST["search"]["value"].'%"
  OR DOB LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["send"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['send']['0']['column']].' '.$_POST['send']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY Visit_date DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["user_id"];
 $sub_array[] = $row["FullName"];
 $sub_array[] = $row["Phone"];
 $sub_array[] = $row["Email"];
 $sub_array[] = $row["City"];
 $sub_array[] = $row["Address"];
 $sub_array[] = $row["DOB"];
 $sub_array[] = $row["Visit_date"];
 $sub_array[] = $row["Gender"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query="SELECT * FROM table_patients";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>