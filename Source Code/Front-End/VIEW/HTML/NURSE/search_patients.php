<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	$error="You must log-in first";
		header("location: nurse_login.php?error=$error");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor | View Patients</title>
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
    <link rel="stylesheet" href="../../themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../../fontawesome/css/fontawesome.min.css">
</head>

<body>
    <?php include('../NURSE/INCLUDES/sidebar.php');?>
    <?php include('../ADMIN/INCLUDES/footer.php');?>
    <div id="section__content" class="section__content">
        <section id="admin__dashboard" class="admin__dashboard">
            <h1>Doctor | View Patients</h1>
        </section>
        <div class="view__patients">
            <div class="view__patients__content">
                <div class="search__title">
                    <h5>Search by Name/Phone</h5>
                </div>
                <form class="" action="#" method="post">
                    <div class="search__input">
                        <input type="text" name="search" required>
                    </div>
                    <div class="search__btn">
                        <button type="submit" name="button">Search</button>

                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>