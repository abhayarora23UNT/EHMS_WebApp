<!DOCTYPE html>
<html lang="en" dir="ltr">
<div class="wrapper" style='width:90% !important'>
<div class="nav">
     <div class="nav__content">
     <a href ="#" style='margin-left:0%'><img src="../../images/hlogo.jpg" height="35" width="80" alt="Image resize"></a>
     
     <div class="title"><a href="../index.php" style='margin-left:-57%'>Electronic Hospital Management System</a></div>
     <div class="nurse_icon" style="margin-left: inherit">
        <i class="fa fa-info" aria-hidden="true"></i>
        <a href="../aboutUs.php"<span>About Us</span></a>
     </div>

     <div class="doctor_icon" style="margin-left: inherit">
        <i class="fa fa-envelope-open" aria-hidden="true"></i>
        <a href="../contactus.php"<span>Contact Info</span></a>
     </div>

     <div class="doctor_icon" style="margin-left: inherit">
        <i class="fa fa-user" aria-hidden="true"></i>
        <a href="../PATIENT/signup.php"<span>Register</span></a>
     </div>

     <div class="admin_icon" style="margin-left: inherit">
      <i class="fa fa-user" aria-hidden="true"></i>
      <a href="../PATIENT/Module.php"<span>Log In</span></a>
     </div>
 </div>
   </div>

</div>
</div>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">.
       <link rel="stylesheet" href="../../css/main.css">
       <link rel="stylesheet" href="../../fontawesome/css/all.css">
       <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <title>patient Sign up</title>
  </head>
  <body class="admin__login">
    <div class="wrapper">
      <div class="form__title">
        <h2>Patient Sign Up</h2>
      </div>

      <form class="" action="../../../CONTROL\PATIENT\signup_contr.php" method="post">
        <fieldset>
							<legend>
								Sign up
							</legend>
              <div class="form__request">
							<p>Please enter your details to sign up.<br /></p>
              </div>
							<div class="form__inputs">
                <div class="usericon">
                <i class="fas fa-user"></i>
                  </div>
									<input type="text" name="Name"  placeholder="Full Name" required><br>
                  <div class="usericon">
                  <i class="fa fa-envelope"></i>
                  </div>
                  <input type="email"  name="Email" placeholder="Email" required>
                  <div class="passicon">
                  <i class="fas fa-map-marker-alt"></i>
                  </div>
									<input type="text"  name="Address" placeholder="Address" required>
                  <div class="passicon">
                  <i class="far fa-building"></i>
                    </div>
  									<input type="text" name="City"  placeholder="City" required><br>

                    <div class="passicon">
                    <i class="fas fa-lock"></i>
                      </div>
    									<input type="password" name="Pass1"  placeholder="Password" required><br>
                      <div class="passicon">
                      <i class="fa fa-lock"></i>
                      </div>
    									<input type="password"  name="Pass2" placeholder="Confirm Password" required><br>
                      <label class="gender_lable">	Gender</label>
								<div class="gender">
                  <label>Male</label>
                  <input type="radio"  name="Gender" value="Male" required>
                  <label>Female</label>
									<input type="radio"  name="Gender" value="Female" required >
								</div>
                <div class="terms" style="margin-top:10px">
                  <input type="checkbox" name="Agree_terms" required>
                  <label>I agree with terms and conditions</label>
                </div>
                <p style="color:red;font-size:0.8em;">
                  <?php
                  if (isset($_GET['error'])) {
                    echo $_GET['error'];
                  }
                   ?>
                </p>
							<div id="login__btn">
								<button type="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
              <div class="donthaveaccount">
                Alreay have an account?<a href="patient_login.php"> Login</a>
              </div>
              	</div>

						</fieldset>
					</form>
        </div>
        <footer>
     <div class="footer__content">
       <ul class="footer__list">
         <li class="home"><a  href="index.php">@2022 Electronic Hospital Management System</a></li>
        
       </ul>

     </div>

   </footer>
  </body>
</html>
