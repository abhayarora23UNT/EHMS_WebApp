<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <style media="screen">
    </style>
    <title>admin login</title>
</head>

<body class="admin__login">
    <div class="wrapper">

        <div class="nav">
            <div class="nav__content">
                <a href="#" style='margin-left:0%'><img src="../../images/hlogo.jpg" height="40" width="80"
                        alt="Image resize"></a>

                <div class="title"><a href="../index.php" style='margin-left:-57%'><span
                            class="heading-title">Electronic Hospital Management System</span></a></div>
                <div class="nurse_icon" style="margin-left: inherit">
                    <i class="fa fa-info" aria-hidden="true"></i>
                    <a href="../aboutUs.php" <span class="pl-3">About Us</span></a>
                </div>

                <div class="doctor_icon" style="margin-left: inherit">
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <a href="../contactus.php" <span class="pl-3">Contact Info</span></a>
                </div>

                <!-- <div class="doctor_icon" style="margin-left: inherit">
        <i class="fa fa-user" aria-hidden="true"></i>
        <a href="../PATIENT/signup.php"<span class="pl-3">Register</span></a>
     </div> -->

                <div class="doctor_icon" style="margin-left: inherit">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="../PATIENT/Module.php" <span class="pl-3">Log In</span></a>
                </div>




            </div>
        </div>

    </div>
    </div>
    <div class="form__title">
        <h2>Admin Login</h2>
    </div>

    <form action="../../../CONTROL/ADMIN/admin_login.contr.php" method="post" class="form">
        <fieldset style="width:40%;margin-bottom:20px">
            <legend>
                Sign into your account
            </legend>
            <p>
                Please enter your email and password to log in.<br />
            </p>
            <div class="form__inputs">
                <div class="usericon">
                    <i class="fa fa-user"></i>
                </div>
                <input type="text" name="username" placeholder="Email"><br>
                <div class="passicon">
                    <i class="fas fa-eye" id="pass__toggle"></i>
                </div>
                <input type="password" id="password" name="password" placeholder="Password">
                <p style="color:red;font-size:1.1em;font-family:timesnewroman;">
                    <?php
                     if (isset($_GET['logout'])) {
                       echo $_GET['logout'];
                     }
                     if (isset($_GET['error'])) {
                       echo $_GET['error'];
                     }
                       ?>
                </p>
                <div id="login__btn">
                    <button onclick="login();" type="submit">
                        Login <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </div>

        </fieldset>
        </div>

        </div>
        <footer>
            <div class="footer__content">
                <ul class="footer__list">
                    <li class="home"><a class="fontBold" href="index.php">@2022 Electronic Hospital Management
                            System</a></li>

                </ul>

            </div>

        </footer>
        <script type="text/javascript">
        const pass__toggle = document.querySelector('#pass__toggle');
        const password = document.querySelector('#password');
        pass__toggle.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        </script>
</body>

</html>