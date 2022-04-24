<?php
$host="localhost:3307";
$user="root";
$password="";
$dbname="hospital";
$con=new mysqli($host,$user,$password,$dbname);
if(!$con){
  echo "error in connection to the database";
}
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Pressure=$_POST['Pressure'];
$Weight=$_POST['Weight'];
$Temperature=$_POST['Temperature'];
$qry="INSERT INTO 'patients_details'('Name','Email','Pressure','Weight','Temperature') values('$Name,$Email,$Pressure,$Weight,$Temperature)";
$insert=mysqli_query($con,$qry);
if(!$insert){
    echo"There are some problem while inserting data";
    }
    else{
        echo"Data Inserted";
    }
    ?>