<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">.
       <link rel="stylesheet" href="../../css/main.css">
       <link rel="stylesheet" href="../../fontawesome/css/all.css">
       <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <title>Patients Details</title>
  </head>
  <body class="admin__login">
    <div class="wrapper">
      <div class="form__title">
        <h2>Patients Details</h2>
      </div>

      <form class="" action="conn.php" method="post">
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
									<input type="text" name="Name"  placeholder="Name" required><br>
                  <div class="usericon">
                  <i class="fa fa-envelope"></i>
                  </div>
                  <input type="email"  name="Email" placeholder="Email" required>
                  <div class="passicon">
                  <i class="fas fa-user"></i>
                  </div>
								
  									<input type="text" name="Pressure"  placeholder="Pressure" required><br>

                    <div class="passicon">
                    <i class="fas fa-user"></i>
                      </div>
                      <input type="text" name="Weight"  placeholder="Weight" required><br>
 <div class="passicon">
                    <i class="fas fa-user"></i>
                      </div>
                      <input type="text" name="Temperature"  placeholder="Temperature" required><br>

                    <div class="passicon">
                    <i class=""></i>
                      </div>
    									
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
          <div class="login__footer">
            <i class="fal fa-at"></i>2020 Saint Paul II Hospital.All Rights Reserved
          </div>
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

