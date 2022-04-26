<?php
session_start();
include_once '../../../../DATABASE/connection.php';
$Doctor=$_GET["Doctor"];
if(!empty($Doctor)){
 $sql="SELECT Name FROM table_doctor WHERE Specialization='$Doctor'";
 ?>
<style media="screen">
.select_doc:focus option:first-of-type {
    display: none;
}
</style>
<option value="" id="select_doc">Select Doctor</option>
<?php
 $query=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($query)){
?>
<option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
<?php
  }
  echo "Select Doctor";
}
if(isset($_POST['submit']))
{
$Doctor1=$_POST['Doctor'];
$Fees=$_POST['Fees'];
$Date=$_POST['Date'];
$Time=$_POST['Time'];
$User=$_SESSION['Email'];
$Specialization=$_POST['Specialization'];
$Status="Not approved";
$sql="INSERT INTO table_appointment_history(Doctor_Name,Patient_Name,Specialization,Appointment_date,Appointment_time,Action) VALUES('$Doctor1','$User','$Specialization','$Date','$Time','$Status') ";
$query=mysqli_query($conn,$sql);
if($query){
$sucess="booked Appointment successfuly";
header("Location: book_appointment.php?success=$sucess");
exit();
}
}

?>