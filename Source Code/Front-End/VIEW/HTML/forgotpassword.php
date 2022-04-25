<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../css/main.css">
       <link rel="stylesheet" href="../fontawesome/css/all.css">
       <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>forgotpassword</title>
  </head>
  <body class="admin__login">
   <div class="wrapper">
<div class="nav">
     <div class="nav__content">
     <a href ="#" style='margin-left:0%'><img src="../../images/hlogo.jpg" height="40" width="80" alt="Image resize"></a>
     
     <div class="title"><a  href="../index.php" style='margin-left:-57%'><span class="heading-title">Electronic Hospital Management System</span></a></div>
     <div class="nurse_icon" style="margin-left: inherit">
        <i class="fa fa-info" aria-hidden="true"></i>
        <a href="../aboutUs.php"<span class="pl-3">About Us</span></a>
     </div>

     <div class="doctor_icon" style="margin-left: inherit">
        <i class="fa fa-envelope-open" aria-hidden="true"></i>
        <a href="../contactus.php"<span class="pl-3">Contact Info</span></a>
     </div>

     <!-- <div class="doctor_icon" style="margin-left: inherit">
        <i class="fa fa-user" aria-hidden="true"></i>
        <a href="../PATIENT/signup.php"<span class="pl-3">Register</span></a>
     </div> -->

     <div class="doctor_icon" style="margin-left: inherit">
      <i class="fa fa-user" aria-hidden="true"></i>
      <a href="../PATIENT/Module.php"<span class="pl-3">Log In</span></a>
     </div>
    
     
     
   
   </div>
   </div>

</div>
</div>
<div class="form__title">
        <h2>Forgot Password</h2>
      </div>

      <form class="" action="../../CONTROL/PATIENT/forgot_pass.contr.php" method="post">
       <fieldset style="width:40%;margin-bottom:20px">
							<legend>
								Password Recovery
							</legend>
							<p>
								Please enter your name and email to recover your password.<br />
							</p>
							<div class="form__inputs">
                <div class="usericon">
                  <i class="fas fa-user"></i>
                  </div>
									<input type="text" name="Name"  placeholder="Name" required><br>
                  <div class="passicon">
                  <i class="fas fa-envelope"></i>
                  </div>
									<input type="email"  name="Email" placeholder="Email" required>
                  <p style="color:dodgerblue;font-size:1.1em;font-family:timesnewroman;">
                    <?php
                    if (isset($_GET['error'])) {
                      echo $_GET['error'];
                    }
                       ?>
                  </p>
							<div class="login__btn">
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Reset <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
              <div class="donthaveaccount">
                Already have an account?<a href="patient_login.php"> Login</a>
              </div>
              	</div>

						</fieldset>
					</form>
          <div class="login__footer">
            <i class="fal fa-at"></i>2020 Saint Paul II Hospital.All Rights Reserved
          </div>
          </div>
          <footer>
            <div class="footer__content">
              <ul class="footer__list">
                <li class="home"><a  href="index.php">HOME</a></li>
                <li class="footer__divider"></li>
                <li class="contactus"><a href="contactus.php">CONTACT US</a></li>
              </ul>

            </div>

          </footer>


  </body>
</html>
