<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/style.css">
<style>
body {
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #ffff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 0px;
  border: 2px solid silver;
  border-top: none;
  border-left: none;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.sidenav__content h3,h4,a{
  width: auto;
  height: auto;
  margin-left: 40px;
}
.logo{
  width: auto;
  height: 43px;
  background-color: #01DAB3;
  top: 0;
  padding: 0.1px;
  margin-bottom: -10px;
}
.logo h3{
  color: #ffff;
  font-size: 1.3em;
  font-weight: bold;
}
.main__navigation{
  width: auto;
  height: 30px;
  background-color: #2BC3B6;
  border-top: px solid silver;
  border-bottom: 1px solid silver;

}
.main__navigation h4{
  color: #ffff;
  padding: 7px;
  font-size: 1em;
  font-weight: bold;
}
.Dashboard{
  width: auto;
  height:27px ;
  margin-top: 20px;
  border-bottom: 1px solid silver;
  font-size: 1.3em;
  cursor: pointer;
}
.Dashboard i{
  color:#2BC3B6 ;
}
.Dashboard a{
  margin-left: 0;
  text-decoration: none;
  color: black;
}
.Dashboard a:hover{
  color:#2BC3B6 ;
}
.Doctors{
  width: auto;
  height:25px ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Doctors i{
  color:#2BC3B6 ;
}
.Doctor__content{
border-bottom: 1px solid silver;
}
.Doctor__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Doctor__content a:hover{
  color: #2BC3B6;
}
.users{
  width: auto;
  height:30px ;
  margin-top: 20px;
  font-size: 1.3em;
  color: black;
}
.users i{
  color:#2BC3B6 ;
}
.users__content{
border-bottom: 1px solid silver;
}
.users__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.users__content a:hover{
  color: #2BC3B6;
}
.Patients{
  width: auto;
  height:37px ;
  margin-top: 20px;
  font-size: 1.3em;
  color: black;
}
.Patients i{
  color:#2BC3B6 ;
}
.Patients__content{
border-bottom: 1px solid silver;
}
.Patients__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Patients__content a:hover{
  color:#2BC3B6 ;
}
.Enqueries{
  width: auto;
  height:30px ;
  margin-top: 20px;
  font-size: 1.3em;
  color: black;
}
.Enqueries i{
  color:#2BC3B6 ;
}
.Enqueries__content{
border-bottom: 1px solid silver;
}
.Enqueries__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Enqueries__content a:hover{
  color:#2BC3B6 ;
}
.Reports{
  width: auto;
  height:30px ;
  margin-top: 20px;
  font-size: 1.3em;
  color: black;
}
.Reports i{
  color:#2BC3B6 ;
}
.Reports__content{
border-bottom: 1px solid silver;
}
.Reports__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Reports__content a:hover{
  color:#2BC3B6 ;
}
.Search__Patients{
  width: auto;
  height:30px ;
  margin-top: 20px;
  font-size: 1.3em;
  border-bottom: 1px solid silver;
  cursor: pointer;
}
.Search__Patients i{
  color:#2BC3B6 ;
}
.Search__Patients a{
  text-decoration:none;
  color: black;
  margin-left: 0;
}
.Search__Patients a:hover{
  color:#2BC3B6 ;
}
.Settings{
  width: auto;
  height:24px ;
  margin-top: 20px;
  font-size: 1.3em;
  color: black;
}
.Settings i{
  color:#2BC3B6 ;
}
.Settings__content{
border-bottom: 1px solid silver;
}
.Settings__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Settings__content a:hover{
  color:#2BC3B6 ;
}
#main {
  transition: margin-left .5s;
}
.admin__header{
  width: 100%;
  height: 80px;
  background-color:inherit;
  border-bottom: 1px solid silver;
  border-radius: 5px;
  display: ;
}
.search__bar{
  width: 50%;
  height: 80px;
  background-color: inherit;
    border-bottom: 1px solid silver;
  padding: 0.5px;
  margin-left: 3px;
}
.search__bar input{
  width: 95%;
  height: 30px;
  margin-top: 25px;
  outline: none;
  border: 1px solid silver;
  font-size: 1.2em;
  padding-left: 10px;
}
input:focus{
  background-color: #97E3F9;
}
.admin__header__content{
  width: 50%;
  height: auto;
  background-color: #00B3AD;
  float: right;
  display: flex;
}
.admin__title{
  width: 60%;
  height: 50px;
  margin: 0 auto;
  margin-left: 10px;
  text-align: center;
  background-color: white;
  margin-top: 10px;
  border-radius: 5px;
}
.admin__title h3{
  margin-top: 13px;
}
.notification__area{
  width: 15%;
  height: auto;
  background-color: inherit;
  padding: 0.5px;
  margin-left: 0px;
  display: flex;
}
.notification {
  background-color: inherit;
  color: white;
  text-decoration: none;
  padding: 7px 9px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
  margin-top: 18px;
}
.notification i{
  font-size: 1.5em;
  color: #ffffff;
}
.notification .badge:hover {
  background:#09AFFF;
}

.notification .badge {
  position: absolute;
  top: -11px;
  right: -10px;
  padding: 7px 10px;
  border-radius: 50%;
  background: red;
  color: #ffffff;
}
.user__session h5{
  font-family: sans-serif;
  margin-top: 30px;
  font-size: 1.2em;
  text-align: right;
  color: #ffffff;
}
.admin__avatar{
  width: 14.5%;
  height: 76px;
  border-radius: 60px;
  background-color: ;
}
.admin__avatar p{
  color: #ffffff;
  font-size: 1.5em;
  font-weight: bold;
  margin-top: 18px;
  padding-left: 4px;
}
.admin__avatar img{
  width: 100%;
  height: 76px;
  border-radius: 70px;
}
.admin__avatar a{
  text-decoration: none;
  position: fixed;
}
</style>
</head>
<body>

<div id="mySidebar" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidenav__content">
    <div class="logo">
  <h3>EHMS</h3>
      </div>
  <div class="main__navigation">
  <h4>MAIN NAVIGATION</h4>
</div>
  <div class="Dashboard">
    <i class="fas fa-home"></i>
  <a href="dashboard.php">Dashboard</a> <br>
</div>
  <div class="Patients">
    <i class="fas fa-users"></i>
  Patients <br>
</div>
<div class="Patients__content">
  <a href="manage_patients.php">Manage Patients</a><br>
  </div>
  <div class="Patients">
    <i class="fas fa-users"></i>
  Appointment History <br>
</div>
<div class="Patients__content">
  <a href="appointment_history.php">Check Appointments</a><br>
  </div>

<div class="Settings">
  <i class="fas fa-cog"></i>
Settings <br>
</div>
<div class="Settings__content">
<a href="change_password.php">Change Password</a><br>
<a href="../DOCTOR/logout.php">Log 0ut</a> <br>
</div>
    </div>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer;position:absolute;margin: 0;
  top: 0;" onclick="openNav()">&#9776;</span>
  </div>
<div class="admin__header">
  <div class="admin__header__content">
  <div class="admin__title">
<h3><a href="logout.php">
        <button>LOGOUT</button>
    </a> </h3>
  </div>
  <div class="notification__area">
    <?php
    $Doctor_Name=$_SESSION['Doctor'];
    $sql="SELECT * FROM table_appointment_history WHERE Action='Not Approved' AND Doctor_Name='$Doctor_Name'";
    $query=mysqli_query($conn,$sql);
    $Not_approved=mysqli_num_rows($query);
     ?>
    <a href="appointment_history.php" class="notification">
    <span><i class="fas fa-envelope"></i></span>
    <span class="badge"><?php echo $Not_approved; ?></span>
</a>
  </div>
  <div class="user__session">
  <h5><?php echo 'Dr.'.strtolower(ucfirst($_SESSION['Doctor'])); ?></h5>
  </div>
<?php
 $User=$_SESSION['Doctor_Email'];
  $sql="SELECT * FROM table_doctor WHERE Email ='$User'";
  $query=mysqli_query($conn,$sql);
 ?>

  <div class="admin__avatar">
    <a href="update_profile.php">
      <?php
       while ($row = mysqli_fetch_array($query)) {
         	echo "<img src='../../images/".$row['Avatar']."' >";
       }
     ?>
  </a>
  </div>
</div>
<div class="search__bar">
  <input type="text" name="" placeholder="Search..."value="">
</div>
</div>
<script>
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("section__content").style.marginLeft= "0";
  document.getElementById("section__content").style.backgroundColor= "#F0F0F9";
  document.getElementById("admin__dashboard").style.marginLeft= "0px";
  document.body.style.backgroundColor = "white";
}
function openNav() {
  document.getElementById("mySidebar").style.width = "19%";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("section__content").style.marginLeft = "305px";
  document.getElementById("section__content").style.backgroundColor= "#F0F0F9";
  document.getElementById("admin__dashboard").style.marginLeft= "0px";
  document.body.style.backgroundColor = "#ffffff";
}


</script>

</body>
</html>
