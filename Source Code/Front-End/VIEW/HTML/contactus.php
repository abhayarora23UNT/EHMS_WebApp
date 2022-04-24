<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">.
       <link rel="stylesheet" href="../css/style.css">
       <link rel="stylesheet" href="../fontawesome/css/all.css">
       <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>contact us</title>
    <style media="screen">
      .banner { position: absolute;
                z-index: 9999;
                padding: .75rem 1.25rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: .25rem;
                display: none;
       }
       .banner.active { display: block;
       }
       .banner-bottom { left: 0;
                        right: 0;
                        bottom: 10px;
        }
        .banner-top { left: 0; right: 0; top: 10px; }
        .banner-right { right: 10px; bottom: 10%; min-height: 10vh; }
        .banner-left { left: 10px; bottom: 10%; min-height: 10vh; }
        .alert-primary { color: #004085; background-color: #cce5ff; border-color: #b8daff; }
        .banner-close { position: absolute; right: 1.5%; }
        .banner-close:after { position: absolute; right: 0; top: 50%; content: 'X'; color: #69f; }
    </style>
  </head>
  <body class="homepage">
        <div class="wrapper">
       <div class="header">
         <div class="top">
             <div class="title"><a href="index.php">Saint Paul II Hospital</a></div>
         </div>
       </div>
       <div class="contactus__content">
         <div class="hospital__address">
           <h3>Hospital Address:</h3>
           <div class="Address_details">

         </div>
         <div class="directmessage">
           <h2>Contact Us:</h2>
           <form class="contactus__form" action="../../CONTROL/ADMIN/contactus_contr.php" method="post">
     							<div class="contactusform__inputs">
                     <div class="usericon">
                     <i class="fa fa-user"></i>
                       </div>
     									<input type="text" name="Name"  placeholder="Name" required><br>
                      <div class="passicon">
                      <i class="fa fa-phone"></i>
                      </div>
                     <input type="text"name="Phone" placeholder="Phone" required>
                       <div class="passicon">
                       <i class="fa fa-envelope"></i>
                       </div>
     									<input type="email"name="Email" placeholder="Email" required>
                     <textarea name="Message" rows="8" cols="73.9" maxlength="100"  placeholder="Type your message here"></textarea>
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
     								<button type="submit" name="submit">
     									Send <i class="fa fa-arrow-circle-right"></i>
     								</button>
     							</div>
                   	</div>
     					</form>

         </div>

       </div>
       <div class="social__accounts">
         <h2>Social Accounts</h2>
         <div class="facebook">
           <i class="fab fa-facebook-f"></i>
         <a href="https://web.facebook.com/victor.mutua.144?ref=bookmarks">facebook</a> <br>
       </div>
     <div class="instagram">
       <i class="fab fa-instagram"></i>
     <a href="https://www.instagram.com/victormtom/">instagram</a> <br>
   </div>
   <div class="twitter">
     <i class="fab fa-twitter"></i>
   <a href="https://twitter.com/Victor32587693">twitter</a> <br>
 </div>
   <div class="whatsapp">
     <i class="fab fa-whatsapp"></i>
   <a href="#">whatsapp</a> <br>
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
    <script type="text/javascript">
      var simpleAlert = document.querySelector(".simple-alert");
      simpleAlert.addEventListener("click", function (e) {
        e.preventDefault();
        injectTemplate(getBannerTemplate());
        var btnClose = document.querySelector(".banner-close");
        btnClose.addEventListener("click", function (closeEvt) {
          var banner = document.querySelector(".banner");
          banner.parentNode.removeChild(banner); }); });
    </script>
  </body>
</html>
