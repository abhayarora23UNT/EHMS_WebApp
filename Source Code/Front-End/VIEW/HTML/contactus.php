<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>contact us</title>
    <style media="screen">

    </style>
</head>

<body class="homepage">
    <div class="wrapper">
        <div class="header">
            <div class="nav">
                <div class="nav__content">
                    <a href="#" style='margin-left:0%'><img src="../images/hlogo.jpg" height="40" width="80"
                            alt="Image resize"></a>

                    <div class="title"><a href="index.php" style='margin-left:-57%'><span
                                class="heading-title">Electronic Hospital Management System</span></a></div>
                    <div class="nurse_icon" style="margin-left: inherit">
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <a href="../HTML/aboutUs.php" <span class="pl-3">About Us</span></a>
                    </div>

                    <!-- <div class="doctor_icon" style="margin-left: inherit">
        <i class="fa fa-envelope-open" aria-hidden="true"></i>
        <a href="../HTML/contactus.php"<span class="pl-3">Contact Info</span></a>
     </div> -->
                    <div class="doctor_icon" style="margin-left: inherit">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="PATIENT/signup.php" <span class="pl-3">Register</span></a>
                    </div>

                    <div class="doctor_icon" style="margin-left: inherit">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="PATIENT/Module.php" <span class="pl-3">Log In</span></a>
                    </div>
                </div>
            </div>
            <div class="contactus__content">
                <div class="hospital__address">

                    <div class="directmessage">
                        <h2>Contact Us:</h2>
                        <form class="contactus__form" action="../../CONTROL/ADMIN/contactus_contr.php" method="post">
                            <div class="contactusform__inputs">
                                <div class="usericon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="Name" placeholder="Name" required><br>
                                <div class="passicon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="Phone" placeholder="Phone" required>
                                <div class="passicon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input type="email" name="Email" placeholder="Email" required>
                                <textarea name="Message" rows="8" cols="73.9" maxlength="100"
                                    placeholder="Type your message here"></textarea>
                                <div class="submit__btn">
                                    <p style="color:red;font-size:0.8em;">
                                        <?php
    									if (isset($_GET['error'])) {
    										echo $_GET['error'];
    									}
    									 ?>
                                    </p>
                                    <p style="color:#159EF3;font-size:0.8em;">
                                        <?php
    									if (isset($_GET['success'])) {
    										echo $_GET['success'];
    									}
    									 ?>
                                    </p>
                                    <script type="x-template" id="banner-template">
                                        <div class="banner banner-top alert-primary active" role="alert">

                    <span class="banner-close"></span>
                    </div>

                    </script>
                                    <button class="wd-50" type="submit" name="submit" title="submit data">
                                        Send <i class="fa fa-arrow-circle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

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
            var simpleAlert = document.querySelector(".simple-alert");
            simpleAlert.addEventListener("click", function(e) {
                e.preventDefault();
                injectTemplate(getBannerTemplate());
                var btnClose = document.querySelector(".banner-close");
                btnClose.addEventListener("click", function(closeEvt) {
                    var banner = document.querySelector(".banner");
                    banner.parentNode.removeChild(banner);
                });
            });
            </script>
</body>

</html>