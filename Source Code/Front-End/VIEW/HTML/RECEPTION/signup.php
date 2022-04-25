<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <title>Receptionist Sign up</title>
</head>

<body class="admin__login">
    <div class="wrapper">
        <div class="form__title">
            <h2>Receptionist Sign Up</h2>
        </div>

        <form class="" action="../../../CONTROL\PATIENT\signup_contr.php" method="post">
            <fieldset style="width:40%;margin-bottom:20px">
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
                    <input type="text" name="Name" placeholder="Full Name" required><br>
                    <div class="usericon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <input type="email" name="Email" placeholder="Email" required>
                    <div class="passicon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <input type="text" name="Address" placeholder="Address" required>
                    <div class="passicon">
                        <i class="far fa-building"></i>
                    </div>
                    <input type="text" name="City" placeholder="City" required><br>

                    <div class="passicon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="password" name="Pass1" placeholder="Password" required><br>
                    <div class="passicon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <input type="password" name="Pass2" placeholder="Confirm Password" required><br>
                    <label class="gender_lable"> Gender</label>
                    <div class="gender">
                        <label>Male</label>
                        <input type="radio" name="Gender" value="Male" required>
                        <label>Female</label>
                        <input type="radio" name="Gender" value="Female" required>
                    </div>
                    <div class="terms">
                        <input type="checkbox" name="Agree_terms" required>
                        <label>I agree with <a href="../terms&conditions.php">terms and conditions</a></label>
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
        <div class="login__footer">
            <i class="fal fa-at"></i>2020 Saint Paul II Hospital.All Rights Reserved
        </div>
    </div>
    <footer>
        <div class="footer__content">
            <ul class="footer__list">
                <li class="home"><a href="../index.php">HOME</a></li>
                <li class="footer__divider"></li>
                <li class="contactus"><a href="../contactus.php">CONTACT US</a></li>
            </ul>

        </div>

    </footer>
</body>

</html>