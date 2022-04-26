<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <title>Pharmacist | Reset password</title>
</head>

<body class="admin__login">
    <div class="wrapper">
        <div class="form__title">
            <h2>Reset Password</h2>
        </div>

        <form class="" action="../../../CONTROL/PHARMACIST/password_reset.contr.php" method="post">
            <fieldset style="width:40%;margin-bottom:20px">
                <legend>
                    Password Reset
                </legend>
                <p>
                    Please enter your new password and confirm to reset your password.<br />
                </p>
                <div class="form__inputs">
                    <div class="usericon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="password" name="Pass1" placeholder="New password" required><br>
                    <div class="passicon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="password" name="Pass2" placeholder="Confirm password" required>
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
                        Already have an account?<a href="../pharmacist_login.php"> Login</a>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
    <footer>
        <div class="footer__content">
            <ul class="footer__list">
                <li class="home"><a href="index.php">HOME</a></li>
                <li class="footer__divider"></li>
                <li class="contactus"><a href="contactus.php">CONTACT US</a></li>
            </ul>

        </div>

    </footer>


</body>

</html>