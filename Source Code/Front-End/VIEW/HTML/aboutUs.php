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
    .banner {
        position: absolute;
        z-index: 9999;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
        display: none;
    }

    .banner.active {
        display: block;
    }

    .banner-bottom {
        left: 0;
        right: 0;
        bottom: 10px;
    }

    .banner-top {
        left: 0;
        right: 0;
        top: 10px;
    }

    .banner-right {
        right: 10px;
        bottom: 10%;
        min-height: 10vh;
    }

    .banner-left {
        left: 10px;
        bottom: 10%;
        min-height: 10vh;
    }

    .alert-primary {
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff;
    }

    .banner-close {
        position: absolute;
        right: 1.5%;
    }

    .banner-close:after {
        position: absolute;
        right: 0;
        top: 50%;
        content: 'X';
        color: #69f;
    }
    </style>
</head>

<body class="homepage">
    <div class="wrapper">
        <div class="nav">
            <div class="nav__content">
                <a href="#" style='margin-left:0%'><img src="../images/hlogo.jpg" height="40" width="80"
                        alt="Image resize"></a>

                <div class="title"><a href="index.php" style='margin-left:-57%'><span class="heading-title">Electronic
                            Hospital Management System</span></a></div>
                <!-- <div class="nurse_icon" style="margin-left: inherit">
        <i class="fa fa-info" aria-hidden="true"></i>
        <a href="../HTML/aboutUs.php"<span class="pl-3">About Us</span></a>
     </div> -->

                <div class="doctor_icon" style="margin-left: inherit">
                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                    <a href="../HTML/contactus.php" <span class="pl-3">Contact Info</span></a>
                </div>

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
        <div style='font-size:1.2em;margin-left:15px; font-weight:bold'>
            About Electronic Hospital Management System <br /><br />
        </div>
        <span>
            <div style='font-size:1em;margin-left:15px'>
                Electronic Hospital Management System is one of the region’s largest, most comprehensive healthcare
                providers in the Dallas-Fort Worth area comprised of:
                <br>
                <ul style='float:left;margin-bottom:15px'>
                    <li>2 North Texas hospitals</li>
                    <li>1 off-campus emergency rooms</li>
                    <li>5 ambulatory surgery centers</li>
                    <li>1,000 employees</li>
                    <li>60 nurses</li>
                    <li>50 active physicians</li>
                    <li>60 COVID-19 patients</li>
                    <li>$3 million in charity </li>

                </ul>
            </div>
        </span>
        <div style='padding-left:38vw'>
            <b style='font-size:1em; font-weight:bold'> Parking & Transportation</b><br />
            <div style='font-size:1em;'>
                Free parking is available for all patients and visitors on the Texas Health Denton campus.

                For more information on where parking is available, view or print a copy of the adjacent campus map.
            </div>
        </div>
        <div style="margin-top:110px; margin-left:50px">
                <img src="../images/girl.jpg" alt="hospital img" width="350" height="350">
                <img src="../images/doctorTech.jpg" alt="hospital img" width="350" height="350">
                <img src="../images/docOper.jpg" alt="hospital img" width="350" height="350">
                <img src="../images/telehealth.jpg" alt="hospital img" width="350" height="350">
                <img src="../images/nurse.jpg" alt="hospital img" width="350" height="350">
        </div>


        <footer>
            <div class="footer__content">
                <ul class="footer__list">
                    <li class="home"><a class="fontBold" href="index.php">@2022 Electronic Hospital Management
                            System</a></li>

                </ul>
            </div>
        </footer>

</body>

</html>