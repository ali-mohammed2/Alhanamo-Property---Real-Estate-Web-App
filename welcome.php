<?php
session_start();
if (isset($_SESSION['id'])) {
    $username = $_SESSION['username'];
} else {
    echo "<script>location='login.php'</script>";
}
?>
<!DOCTYPE HTML>
<html lang="en" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    
<!--
*Title: Google Fonts
*Author: Multiple Designers
*Date: 2021
*Availability: https://fonts.google.com/specimen/El+Messiri?preview.text_type=custom#about
-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
<!--
*Title: Bootstrap Font Awesome
*Author: bootstrapcdn.com
*Date: 2021
*Availability: https://www.bootstrapcdn.com/fontawesome/
-->
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    
<!--
*Title: Logo Maker
*Author: freelogoservices.com
*Date: 2021
*Availability: https://www.freelogoservices.com/
-->
        <section id="log-header">
            <nav>
          <a href="index.html"><img src="image/logo4.png"></a>
          <div class="nav-bar" id="navBar">
            <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT US</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="booking.html">BOOKING</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
            </ul>
          </div>
        </nav>
            <div class="welcome-text">
        <h1>Welcome <b><?php echo $username; ?></b></h1>
            </div>
    </section>
<!--
*Title: Menu Button
*Author: flaticon.com
*Date: 2021
*Availability: https://www.flaticon.com/free-icon/menu-button-of-three-horizontal-lines_56763
*I tried to make a manual button that onclick turns into a cross but that was giving me problems so decided to go with an image which I had used previously.
-->
  <div id="menuBtn">
    <img src="image/menu.png" id="menu">
  </div>
<!--------Footer-------->
   <section class="disclaimer">
            <h4>DISCLAIMER</h4>
            <p>Alhanamo Property is a fictitious brand created solely for the purpose of the assessment of IN1010 module at City, University of London, UK. All products and people associated with 
            Alhanamo Property are also fictitious. Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.</p>
        </section>

        <section class="socials">
            <div class="icons">
                <a href="https://en-gb.facebook.com//"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com//"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/?lang=en-gb/"><i class="fa fa-twitter"></i></a>
            </div>
            <p>Copyright © 2020 Alhanamo</p>
        </section>

<!--javascript for closing and opening the navBar-->
    <script>    
        var menuBtn = document.getElementById("menuBtn")
        var navBar = document.getElementById("navBar")
        var menu = document.getElementById("menu")
        navBar.style.right = "-180px";
        menuBtn.onclick = function(){
            if(navBar.style.right == "-180px"){
                navBar.style.right = "0";
            }else{
                navBar.style.right = "-180px";
            }
            }
        
    </script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>