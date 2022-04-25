<?php
include_once '../../../../DATABASE/connection.php';
session_start();
if (!isset($_SESSION['Email']) && !isset($_SESSION['Password'])) {
	$error="You must log-in first";
		header("location: ../patient_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient | FeedBack</title>
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
    <link rel="stylesheet" href="../../bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.min.css">
    <script src="../../Ajax/feedback.js"></script>
    <style media="screen">
    .feedback {
        width: 40%;
        height: auto;
        margin: 0 auto;
        margin-top: 30px;
        background-color: #ffffff;
        border: 1px solid silver;
        border-radius: 10px;
        box-shadow: 15px 6px 7px 8px solid red;
    }

    .feedback__form {
        margin-left: 35px;
    }

    .feedback__top {
        width: 100%;
        height: 50px;
        background-color: #03A9F4;
        padding: 0.5px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .feedback__top h4 {
        margin-top: 13px;
    }

    h4 {
        font-size: 1.4em;
        color: #ffffff;
    }

    form {
        width: 90%;
        margin: 0 auto;
        margin-top: 30px;
    }

    select {
        width: 90%;
        margin: 0 auto;
        margin-top: 10px;
    }

    .suggestion textarea {
        width: auto;
        height: 80px;
        font-family: monospace;
        margin-top: 10px;
    }

    #submit__btn {
        margin-top: 10px;
    }

    #submit__btn button {
        width: auto;
        height: 30px;
        background-color: #00B3AD;
        color: #ffffff;
        font-size: 1em;
        border: none;
        border-radius: 2px;
        outline: none;
    }

    #errors {
        text-align: center;
    }
    </style>
</head>

<body>
    <?php include('../PATIENT/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h2 style="padding-left:15px">Patient | FeedBack</h2>
        </section>
        <div class="feedback">
            <div class="feedback__top">
                <h4>Send us your feedback!</h4>
            </div>
            <p id="errors" style="color:red; font-size:1.2em;"></p>
            <div class="feedback__form">
                <label for="how is our system">Rate our system</label>
                <select class="" id="rate">
                    <option value="Simple">Simple</option>
                    <option value="Fair">Fair</option>
                    <option value="Complex">Complex</option>
                </select>

                <label for="How are our services">How are our services</label>
                <select class="" id="services">
                    <option value="Best">Best</option>
                    <option value="Better">Better</option>
                    <option value="Good">Good</option>
                </select>

                <label for="Have you ever raised any complain">Have you ever raised any complain?</label>
                <select class="" id="complains">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                    <option value="I will">I will</option>
                </select>

                <label for="Do you have any suggestion to make our system Better">Do you have any suggestion to make our
                    system Better?</label>
                <div class="suggestion">
                    <textarea id="suggestion" rows="8" cols="65"></textarea>
                </div>
                <div id="submit__btn">
                    <button onclick="submit();" type="submit">
                        Submit <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </div>

</body>

</html>