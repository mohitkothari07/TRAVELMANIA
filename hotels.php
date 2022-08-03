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

        <!--train-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    </head>

    <body>

        <div class="colorlib-loader"></div>

        <div id="page">
            <nav class="colorlib-nav" role="navigation">
                <div class="top-menu">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-2">
                                <div id="colorlib-logo"><a href="MainPage.php">TRAVELMANIA</a></div>
                            </div>
                            <div class="col-xs-10 text-right menu-1">
                                <ul>
                                    <li><a href="MainPage.php"><i class="fa fa-home"></i>Home</a></li>
                                    <li class="has-dropdown">
                                        <a href="tours.php"><i class="flaticon-around"></i> Tours</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Destination</a></li>
                                            <li><a href="#">Hotels</a></li>
                                            <li><a href="#">Booking</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="hotels.php"><i class="flaticon-resort"></i> Hotels</a></li>
                                    <li><a href="book.php"><i class="fa fa-plane"></i> Book</a></li>
                                    <li><a href="sign.html"><i class="fa fa-user"></i>
										<?php
										if(empty($_SESSION['username'])){
											echo "Sign In";
										}
										else{
											echo $_SESSION['username'];
										}
										?> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/cover-img-4.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h1>Find Hotel</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="colorlib-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="wrap-division">
                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 1.jpg);">
                                                <p class="price"><span>₹1950</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 481 Reviews</p>
                                                <h3><a href="#">Holiday Inn</a></h3>
                                                <span class="place">Mumbai</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 2.jpg);">
                                                <p class="price"><span>₹1650</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 956 Reviews</p>
                                                <h3><a href="#">Royal Orchid</a></h3>
                                                <span class="place">Goa</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 3.jpg);">
                                                <p class="price"><span>₹1209</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 532 Reviews</p>
                                                <h3><a href="#">Hotel Admire inn</a></h3>
                                                <span class="place">Noida</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 4.jpg);">
                                                <p class="price"><span>₹5000</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 120 Reviews</p>
                                                <h3><a href="#">Radisson blu</a></h3>
                                                <span class="place">New Delhi</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 5.jpg);">
                                                <p class="price"><span>₹2600</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 694 Reviews</p>
                                                <h3><a href="#">Hotel Lingzi</a></h3>
                                                <span class="place">Leh</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 6.jpg);">
                                                <p class="price"><span>₹4500</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 325 Reviews</p>
                                                <h3><a href="#">The Grand Hyatt</a></h3>
                                                <span class="place">Mumbai</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 7.jpg);">
                                                <p class="price"><span>₹2500</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 430 Reviews</p>
                                                <h3><a href="#">Hotel Mountain Top</a></h3>
                                                <span class="place">Manali</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 animate-box">
                                        <div class="hotel-entry">
                                            <a href="#" class="hotel-img" style="background-image: url(images/alt-hotel\ 8.jpg);">
                                                <p class="price"><span>₹3000</span><small> /night</small></p>
                                            </a>
                                            <div class="desc">
                                                <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 236 Reviews</p>
                                                <h3><a href="#">Marine Plaza</a></h3>
                                                <span class="place">Mumbai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- SIDEBAR-->
                        <div class="col-md-3">
                            <div class="sidebar-wrap">
                                <div class="side search-wrap animate-box">
                                    <h3 class="sidebar-heading">Find your hotel</h3>
                                    <form method="post" class="colorlib-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="date">Check-in:</label>
                                                    <div class="form-field">
                                                        <i class="icon icon-calendar2"></i>
                                                        <input type="text" id="date" class="form-control date" placeholder="Check-in date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="date">Check-out:</label>
                                                    <div class="form-field">
                                                        <i class="icon icon-calendar2"></i>
                                                        <input type="text" id="date" class="form-control date" placeholder="Check-out date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="guests">Guest</label>
                                                    <div class="form-field">
                                                        <i class="icon icon-arrow-down3"></i>
                                                        <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block" onclick=bookhotel()>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="side animate-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="sidebar-heading">Price Range</h3>
                                            <form method="post" class="colorlib-form-2">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="guests">Price from:</label>
                                                            <div class="form-field">
                                                                <i class="icon icon-arrow-down3"></i>
                                                                <select name="people" id="people" class="form-control">
						                        <option value="#">1500</option>
						                        <option value="#">2000</option>
						                        <option value="#">2500</option>
						                        <option value="#">3000</option>
						                      </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="guests">Price to:</label>
                                                            <div class="form-field">
                                                                <i class="icon icon-arrow-down3"></i>
                                                                <select name="people" id="people" class="form-control">
						                        <option value="#">5000</option>
						                        <option value="#">6000</option>
						                        <option value="#">8000</option>
						                        <option value="#">10000</option>
						                      </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="side animate-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="sidebar-heading">Review Rating</h3>
                                            <form method="post" class="colorlib-form-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										      </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										     </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
										     </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="side animate-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="sidebar-heading">Categories</h3>
                                            <form method="post" class="colorlib-form-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Resort</h4>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Hotel</h4>
												</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Inn</h4>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Villa</h4>
												</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="side animate-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="sidebar-heading">Facilities</h3>
                                            <form method="post" class="colorlib-form-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Airport Transfer</h4>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Resto Bar</h4>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Restaurant</h4>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Swimming Pool</h4>
												</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">
													<h4 class="place">Spa</h4>
												</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



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
        <script>
            function bookhotel(){
                window.location="book.php";
            }
        </script>

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