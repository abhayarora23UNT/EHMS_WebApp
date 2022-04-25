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
  background-image:linear-gradient(to right,lightskyblue,lightblue);
  top: 0;
  padding: 0.1px;
  margin-bottom: -10px;
}
.logo h3{
  color: black;
  font-size: 1.3em;
  font-weight: bold;
}
.main__navigation{
  width: auto;
  height: 30px;
  background-color:black;
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
  color:black ;
}
.Dashboard a{
  margin-left: 0;
  text-decoration: none;
  color: black;
}
.Dashboard a:hover{
  color:black;
}
.Doctors{
  width: auto;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Doctors i{
  color:black;
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
  color:black;
}
.Nurses{
  width: auto;
  height:auto ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Nurses i{
  color:black;
}
.Nurse__content{
border-bottom: 1px solid silver;
}
.Nurse__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Nurse__content a:hover{
  color:black;
}
.users{
  width: auto;
  height:30px ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.users i{
  color:black;
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
  color:black;
}
.Patients{
  width: auto;
  height:auto ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Patients i{
  color:black;
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
  color:black;
}
.Enqueries{
  width: auto;
  height:30px ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Enqueries i{
  color:black;
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
  color:black;
}
.Reports{
  width: auto;
  height:30px ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Reports i{
  color:black;
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
  color:black;
}
.Search__Patients{
  width: auto;
  height:auto ;
  margin-top: 10px;
  font-size: 1.3em;
  border-bottom: 1px solid silver;
  cursor: pointer;
}
.Search__Patients i{
  color:black;
}
.Search__Patients a{
  text-decoration:none;
  color: black;
  margin-left: 0;
}
.Search__Patients a:hover{
  color:black;
}
.Settings{
  width: auto;
  height:auto ;
  margin-top: 10px;
  font-size: 1.3em;
  color: black;
}
.Settings i{
  color:black;
}
.Settings__content{
}
.Settings__content a{
  font-size: 1.1em;
  text-decoration:none;
  color: #0F1EE8;
}
.Settings__content a:hover{
  color:black;
}
#main {
  transition: margin-left .5s;
}
.admin__header{
  width: 100%;
  height: 80px;
  background-color:lightblue;
  border-bottom: 1px solid silver;
  border-radius: 5px;
  display: ;
}
.search__bar{
  width: 50%;
  height: 80px;
  background-color:black;
  padding: 0.5px;
  margin-left: 3px;
  border-bottom: 1px solid silver;
}
.search__bar input{
  width: 95%;
  height: 30px;
  margin-top: 25px;
  outline: none;
  border: 1px solid silver;
  font-size: 1em;
  padding-left: 10px;
}
input:focus{
  background-color: #97E3F9;
}
.admin__header__content{
  width: 50%;
  height: auto;
  background-color: lightblue;
  float: right;
  display: flex;
}
.admin__title{
  width: 75%;
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
  width: 20%;
  height: auto;
  background-color: lightblue;
  padding: 0.5px;
  margin-left: 0px;
  display: flex;
  margin-left:27vw;
}
.notification {
  background-color: lightblue;
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
  background:lightblue;
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
.user__session{
  padding-right:7px;
  background-color: lightblue;
}
.user__session h5{
  font-family: sans-serif;
  margin-top: 30px;
  font-size: 1em;
  text-align: right;
  color: #ffffff;
}
.admin__avatar{
  width: 19%;
  height: 76px;
  border-radius: 60px;
  background-color:;
}
/*.admin__avatar p{
  color: #ffffff;
  font-size: 1.5em;
  font-weight: bold;
  margin-top: 18px;
  padding-left: 4px;
}*/
.admin__avatar img{
  width: 30%;
  height: 30px;
  border-radius: 70px;
}
.admin__avatar a{
  text-decoration: none;
  position: fixed;
  background-color:;
}

</style>
</head>
<body>

<div id="mySidebar" class="sidenav sidenav-left-border">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidenav__content sidenav-pad-left">
    <div class="logo">
  <h3>EHMS</h3>
      </div>
 
  <div class="Dashboard">
    <i class="fas fa-home"></i>
  <a href="admin_dashboard.php">Dashboard</a> <br>
</div>
  <div class="Doctors">
    <i class="fas fa-stethoscope" style='color:black'></i>
    Doctors<br>
    </div>
    <div class="Doctor__content">
  <a href="add_doctor.php">Add Doctor</a><br>
  <a href="manage_doctor.php">Manage Doctors</a><br>
  </div>
  <div class="Nurses">
    <i class="fas fa-user-md" style='color:black'></i>
    Nurses<br>
    </div>
    <div class="Nurse__content">
  <a href="add_nurse.php">Add Nurse</a><br>
  <a href="manage_nurse.php">Manage Nurses</a><br>
  </div>
  <div class="Nurses">
    <i class="fas fa-user-md" style='color:black'></i>
    Finance<br>
    </div>
    <div class="Nurse__content">
  <a href="add_cashier.php">Add Cashier</a><br>
  <a href="manage_finance.php">Manage Cashier</a><br>
  <a href="manage_cashier.php">Manage Finance</a><br>
  </div>
  <div class="Doctors">
    <i class="fas fa-stethoscope" style='color:black'></i>
    Pharmacist<br>
    </div>
    <div class="Doctor__content">
  <a href="add_pharmacist.php">Add Pharmacist</a><br>
  <a href="manage_pharmacist.php">Manage Pharmacist</a><br>
  </div>
  <div class="Reports">
    <i class="fas fa-flag"></i>
  Lab Technician <br>
</div>
<div class="Reports__content">
  <a href="add_lab_technician.php">Add technician</a><br>
  <a href="manage_lab_technician.php">Manage technicians</a> <br>
  </div>
  <div class="Patients">
    <i class="fas fa-users"></i>
  Patients <br>
</div>
<div class="Patients__content">
  <a href="add_patients.php">Add Patients</a><br>
  <a href="manage_patients.php">Manage Patients</a><br>
  <a href="patients_appointment_history.php">Appointment History</a><br>
  </div>
  <div class="Enqueries">
    <i class="fas fa-question-circle"></i>
  Enqueries <br>
</div>
<div class="Enqueries__content">
  <a href="feedback.php">FeedBack</a> <br>
  <a href="patient_queries.php">All Queries</a> <br>
  </div>
<div class="Settings">
  <i class="fas fa-cog"></i>
Settings <br>
</div>
<div class="Settings__content">
<a href="change_password.php">Change Password</a><br>
<a href="logout.php">Log out</a> <br>
</div>
    </div>
</div>

<div class="admin__header" >
<div class="admin__header__content">
     
  <div class="notification__area">
    <?php
    $sql="SELECT * FROM table_contactus WHERE Msg_status='Unseen'";
    $query=mysqli_query($conn,$sql);
    $Unseen=mysqli_num_rows($query);
     ?>
    <a href="patients_appointment_history.php" class="notification">
    <span><i class="fas fa-envelope"></i></span>
    <?php
    $sql="SELECT * FROM table_appointment_history WHERE Action='Not Approved'";
    $query=mysqli_query($conn,$sql);
    $Not_approved=mysqli_num_rows($query);
     ?>
    <span class="badge"><?php echo $Not_approved; ?></span>
  </a>
  <a href="patient_queries.php" class="notification">
  <span><i class="fa fa-bell"></i></span>
  <span class="badge"><?php echo '+'.$Unseen; ?></span>
</a>
  </div>
  <div class="user__session">
  <h5><?php echo ucwords($_SESSION['username']); ?></h5>
  </div>
  <?php
  $User=$_SESSION['username'];
  $sql="SELECT * FROM table_admin WHERE Name ='$User'";
  $query=mysqli_query($conn,$sql);
?>
<div class="admin__avatar" style='padding-top:28px'>
<span class="admin_icon" style='color:black' ><i class="fa fa-user" aria-hidden="true"></i></span>
<a href="logout.php" style='margin-top: -0.5%;margin-left: 30px;'>
        <button>LOGOUT</button>
    </a>
</div>

</div>
<div id="main" >
  <span style="font-size:30px;cursor:pointer;position:absolute;margin-top: 28px;
  top: 0; margin-left:8px;" onclick="openNav()">&#9776;</span>
  </div>
<left >
<div style="padding-top:10px">
<a href ="#" style='margin-left:3%;margin-top: 28px;'><img src="hlogo.jpg" height="35" width="80" alt="Image resize"></a></center>
<span class="heading-title" > Electronic Hospital Management System </span>
<title>Admin  | Dashboard</title>
</div>

	
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
	<style media="screen">
	</style>


</div>
<script>
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("section__content").style.marginLeft= "0";
  document.getElementById("section__content").style.backgroundColor= "#F0F0F9";
  document.getElementById("admin__dashboard").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
function openNav() {
  document.getElementById("mySidebar").style.width = "19%";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("section__content").style.marginLeft = "305px";
  document.getElementById("section__content").style.backgroundColor= "#F0F0F9";
  document.getElementById("admin__dashboard").style.marginLeft= "0";
  document.body.style.backgroundColor = "#ffffff";
}


</script>

</body>
</html>
