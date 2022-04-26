<?php
$host="localhost";
$user="root";
$password="";
$dbname="hospital";
$conn=mysqli_connect($host,$user,$password,$dbname);
if($conn){
  echo "";
}
else {
  echo "error in connection to the database";
}
$sql="CREATE DATABASE IF NOT EXISTS hospital";
if(mysqli_query($conn,$sql)===TRUE){
  echo "";
}
else {
  echo "";
}
 ?><br>
