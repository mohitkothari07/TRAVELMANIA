<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Mania</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
    <![endif]-->

    <script src="main1.js"></script>
    
    <!--train-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>

<body>
    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="MainPage.php">Travelmania</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="MainPage.php"><i class="fa fa-home"></i>Home</a></li>
                                <li class="has-dropdown">
                                    <a href="tours.php"><i class="flaticon-around"></i>Tours</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Destination</a></li>
                                        <li><a href="#">Hotels</a></li>
                                        <li><a href="#">Booking</a></li>
                                    </ul>
                                </li>
                                <li><a href="hotels.php"><i class="flaticon-resort"></i>Hotels</a></li>
                                <li><a href="book.php"><i class="fa fa-plane"></i>Book</a></li>
                                <li><a href="sign.html"><i class="fa fa-user"></i>
                                <?php
                                if(empty($_SESSION['username'])){
                                    echo "Sign In";
                                }
                                else{
                                    echo $_SESSION['username'];
                                }
                                ?> 
                                </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/bg_1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>3 Days Tour</h1>
                                        <h1>Amazing Goa Tour</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Explore our most tavel agency</h1>
                                        <h1>Our Travel Agency</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/bg_4.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Experience the</h2>
                                        <h1>Best Trip Ever</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="colorlib-reservation">
            <!-- <div class="container"> -->
            
    
    <div class="colorlib-tour colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Popular Destination</h2>
                    <p>India’s diverse topography, history and culture offers enough experiences to fulfil any type of wanderlust. So do our India tour packages which cover the length and breadth of the land.</p>
                </div>
            </div>
        </div>
        <div class="tour-wrap">
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/GOA.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 5545 Reviews</p>
                <h2>Calangute Beach</h2>
                <span class="city"> Goa</span>
                <span class="price">Starting from 11,999/-</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/MANALI.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Manali</h2>
                <span class="city">Himachal Pradesh</span>
                <span class="price">Starting from 4,500</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/shimla.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Shimla</h2>
                <span class="city">Himachal Pradesh</span>
                <span class="price">Starting from 4,500</span>
                </span>
            </a>
            <a href="#" class="tour-entry animate-box">
                <div class="tour-img" style="background-image: url(images/RISHIKESH.jpg);">
                </div>
                <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
                <h2>Rishikesh</h2>
                <span class="city">Uttarakhand</span>
                <span class="price">Starting from 5500</span>
                </span>
            </a>
            
        </div>
    </div>


    <div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="intro-desc">
                        <div class="text-salebox">
                            <div class="text-lefts">
                                <div class="sale-box">
                                    <div class="sale-box-top">
                                        <h2 class="number">45</h2>
                                        <span class="sup-1">%</span>
                                        <span class="sup-2">Off</span>
                                    </div>
                                    <h2 class="text-sale">Sale</h2>
                                </div>
                            </div>
                            <div class="text-rights">
                                <h3 class="title">Just hurry up limited offer!</h3>
                                <p> India offers incredible holiday experiences through its cultural, topography, and wildlife diversity.</p>
                                <p><a href="book.php" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="video-wrap">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/X3lJi2-VqMo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>

    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget">
                    <h4>Travel Mania</h4>
                    <p>We select the finest hotels in every category, boast an excellent personal fleet of vehicles for transportation.

                    </p>
                    <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-2 colorlib-widget" style="padding-left: 50px;">
                    <h4>Book Now</h4>
                    <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Flight</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Train</a></li>
                            <li><a href="#">Car Rent</a></li>
                            
                        </ul>
                    </p>
                </div>

                <div class="col-md-2 colorlib-widget" style="padding-left: 80px;">

                    <h4>Top Deals</h4>
                    <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">Taj Resort</a></li>
                            <li><a href="#">Palolem Beach</a></li>
                            <li><a href="#">Manali </a></li>
                            <li><a href="#">Ladakh</a></li>
                            <li><a href="#">Amarnath</a></li>
                        </ul>
                    </p>
                </div>
                

                <div class="col-md-3 col-md-push-1" style="padding-left: 80px;">
                    <h4>Contact Information</h4>
                    <ul class="colorlib-footer-links">
                        <li>C-81C Sector-5 ,<br> Noida - 201301</li>
                        <li><a href="tel://1234567920">1800 3000 9009</a></li>
                        <li><a href="#">Travelmania.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This website is developed by Ayush Shukla, Mohit Kothari, Manas Goyal, Siddhesh Patil, Srishti Kesarwani, Gaurav Khirade.</i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <div class="cookie-container">
        <p>
          We use cookies in this website to give you the best experience on our
          site and show you relevant ads... To find out more, read our
          <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
        </p>
  
        <button class="cookie-btn">
          Okay
        </button>
      </div>
  
      <script src="main1.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>