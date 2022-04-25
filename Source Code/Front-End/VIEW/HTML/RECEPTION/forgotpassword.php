<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../../css/main.css">
       <link rel="stylesheet" href="../../fontawesome/css/all.css">
       <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <title>forgotpassword</title>
  </head>
  <body class="admin__login">
    <div class="wrapper">
      <div class="form__title">
        <h2>Forgot Password</h2>
      </div>

      <form class="" action="../../../CONTROL/PATIENT/forgot_pass.contr.php" method="post">
        <fieldset>
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
                  <p style="color:red;font-size:0.8em;">
                    <?php
                    if (isset($_GET['error'])) {
                      echo $_GET['error'];
                    }
                     ?>
                  </p>
                  <p style="color:green;font-size:0.8em;">
                    <?php
                    if (isset($_GET['success'])) {
                      echo $_GET['success'];
                    }
                     ?>
                  </p>
							<div id="login__btn">
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Reset <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
              <div class="donthaveaccount">
                Go back to your account?<a href="patient_login.php"> Login</a>
              </div>
              	</div>

						</fieldset>
					</form>
          
          </div>
          <footer>
            <div class="footer__content">
              <ul class="footer__list">
                <li class="home"><a  href="../index.php">HOME</a></li>
                <li class="footer__divider"></li>
                <li class="contactus"><a href="../contactus.php">CONTACT US</a></li>
              </ul>

            </div>

          </footer>


  </body>
</html>
