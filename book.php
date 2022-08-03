<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:sign.html');
}

?>
    <!DOCTYPE html>
    <html lang="en">

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!--train-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
    <![endif]-->


    </head>

    <body>

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
                                    <li><a href="MainPage.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li class="has-dropdown">
                                        <a href="tours.php"><i class="flaticon-around"></i> Tours</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Destination</a></li>
                                            <li><a href="#">Hotels</a></li>
                                            <li><a href="#">Booking</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="hotels.php"><i class="flaticon-resort"></i> Hotels</a></li>
                                    <li class="active"><a href="book.php"><i class="fa fa-plane"></i> Book</a></li>
                                    <li><a href="sign.html"><i class="fa fa-user"></i>  <?php
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
                        <li style="background-image: url(images/sky.jpg);">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h1>Book your Trips at<br> Exciting offers</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <div id="colorlib-reservation">
            <!-- <div class="container"> -->
            <div class="row">
                <div class="search-wrap">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
                            <li><a data-toggle="tab" href="#train"><i class="fa fa-train"></i> Train</a></li>
                            <li><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
                            <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                            <li><a data-toggle="tab" href="#tour"><i class="flaticon-around"></i> Tour</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="flight" class="tab-pane fade">
                            <form method="post" class="colorlib-form" name=flight>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="flightlocation">Where:</label>
                                            <div class="form-field">
                                                <input type="text" id="flightlocation" class="form-control" placeholder="Search Location" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="flightdate">Journey Date:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="flightdate" class="form-control date" placeholder="Journey date" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="flightguests">No of Passengers</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="flightguests" class="form-control" required>
                                    <option value="#" style="color: black;">1</option>
                                    <option value="#" style="color: black;">2</option>
                                    <option value="#" style="color: black;">3</option>
                                    <option value="#" style="color: black;">4+</option>                                    
                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Personal Information:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 1 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype" class="form-control" placeholder="ID type" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno" class="form-control" placeholder="ID Number" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 2 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname2">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname2" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname2">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname2" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype2">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype2" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno2">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno2" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 3 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname3">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname3" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname3">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname3" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype3">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype3" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno3">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno3" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 4 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname4">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname4" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname4">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname4" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype4">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype4" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno4">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno4" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Contact Details:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Your Email ID:</label>
                                                <div class="form-field">
                                                    <input type="text" id="email" class="form-control" placeholder="Your Email ID" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phoneno">Your Phone No:</label>
                                                <div class="form-field">
                                                    <input type="text" id="phoneno" class="form-control" placeholder="Your Phone No" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="aphoneno">Alternate Phone No:</label>
                                                <div class="form-field">
                                                    <input type="text" id="aphoneno" class="form-control" placeholder="Alternate Phone No" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="fname">Your Address:</label>
                                                <div class="form-field">
                                                    <input type="text" id="saddress" class="form-control" placeholder="Street Address" required>
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="city" class="form-control" placeholder="City" required>
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="region" class="form-control" placeholder="Region" required>
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code" required>
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="country" class="form-control" placeholder="Country" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Flight Specifications:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="flighttype">Type of Airline in which you want to travel:</label>
                                                <div class="form-field">
                                                    <select name="flighttype" id="flighttype" class="form-control">
                                                    <option value="#" style="color: black;">--Select--</option>
                                                    <option value="#" style="color: black;">Air India</option>
                                                    <option value="#" style="color:black;">Aviation India</option>
                                                    <option value="#" style="color:black;">Spicejet</option>
                                                    <option value="#" style="color:black;">Indigo</option>
                                                    <option value="#" style="color:black;">Other</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="flighttype">In which class Do you want to travel:</label>
                                                <div class="form-field">
                                                    <select name="flighttype2" id="flighttype2" class="form-control" required>
                                                    <option value="#" style="color: black;">--Select--</option>
                                                    <option value="#" style="color: black;">First class</option>
                                                    <option value="#" style="color:black;">Buisness class</option>
                                                    <option value="#" style="color:black;">Premium economy</option>
                                                    <option value="#" style="color:black;">Economy</option>             
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Pick Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Pick Up Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Drop Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Drop Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="note">Please indicate here any special requirement:</label>
                                            <div class="form-field">
                                                <input type="text" id="note" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block" onclick="xyzflight()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="train" class="tab-pane fade">
                            <form method="post" class="colorlib-form" name="train">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="trainlocation">Where:</label>
                                            <div class="form-field">
                                                <input type="text" id="trainlocation" class="form-control" placeholder="Search Location" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="traindate">Journey Date:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="traindate" class="form-control date" placeholder="Journey date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="trainguests">No of Passengers</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <input type="number" id="trainguests" class="form-control" placeholder="No of Passengers" min="1" max="4" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Personal Information:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 1 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype" class="form-control" placeholder="ID type" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno" class="form-control" placeholder="ID Number" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 2 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname2">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname2" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname2">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname2" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype2">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype2" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno2">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno2" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 3 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname3">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname3" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname3">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname3" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype3">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype3" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno3">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno3" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 4 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname4">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname4" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname4">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname4" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype4">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype4" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno4">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno4" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Contact Details:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Your Email ID:</label>
                                                <div class="form-field">
                                                    <input type="text" id="email" class="form-control" placeholder="Your Email ID" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phoneno">Your Phone No:</label>
                                                <div class="form-field">
                                                    <input type="text" id="phoneno" class="form-control" placeholder="Your Phone No" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="aphoneno">Alternate Phone No:</label>
                                                <div class="form-field">
                                                    <input type="text" id="aphoneno" class="form-control" placeholder="Alternate Phone No">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="address">Your Address:</label>
                                                <div class="form-field">
                                                    <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="city" class="form-control" placeholder="City">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="region" class="form-control" placeholder="Region">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                                </div>
                                                <div class="form-field">
                                                    <input type="text" id="country" class="form-control" placeholder="Country">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Train Specifications:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="traintype">Type of train in which you want to travel:</label>
                                                <div class="form-field">
                                                    <select name="driver" id="traintype" class="form-control" required>
                                                    <option value="#" style="color: black;">--Select--</option>
                                                    <option value="#" style="color: black;">Maharaja Train</option>
                                                    <option value="#" style="color:black;">Rajdhani Express</option>
                                                    <option value="#" style="color:black;">Shatabdi</option>
                                                    <option value="#" style="color:black;">Durranto</option>
                                                    <option value="#" style="color:black;">Other</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="traintype2">Type of train coach:</label>
                                                <div class="form-field">
                                                    <select name="driver" id="traintype2" class="form-control" required>
                                                    <option value="#" style="color: black;">--Select--</option>
                                                    <option value="#" style="color: black;">AC first class</option>
                                                    <option value="#" style="color:black;">AC two tier</option>
                                                    <option value="#" style="color:black;">AC three tier</option>
                                                    <option value="#" style="color:black;">AC three tier(economy)</option>
                                                    <option value="#" style="color:black;">Anubhuti</option>
                                                    <option value="#" style="color:black;">Executive chair car</option>
                                                    <option value="#" style="color:black;">AC Chair Car</option>
                                                    <option value="#" style="color:black;">Sleeper class</option>
                                                    <option value="#" style="color:black;">Second seater</option>
                                                    <option value="#" style="color:black;">Other</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="food">Do you want food during travel:</label>
                                                <div class="form-field">
                                                    <select name="food" id="food" class="form-control">
                                                    <option value="#" style="color: black;">--Select--</option>
                                                    <option value="#" style="color: black;">YES</option>
                                                    <option value="#" style="color:black;">No</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Pick Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Pick Up Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="note">Please indicate here any special requirement:</label>
                                            <div class="form-field">
                                                <input type="text" id="note" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block" onclick="xyztrain()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hotel" class="tab-pane fade" >
                            <form method="post" class="colorlib-form" name="hotel">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="booknow">
                                            <h2>Book Now</h2>
                                            <span>Best Price Online</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Check-in:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Check-in date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Check-out:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Check-out date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="guests">Guests</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <input type="number" id="guests" class="form-control" placeholder="No of Guests" min="1" max="4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Personal Information:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 1 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype" class="form-control" placeholder="ID type" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno" class="form-control" placeholder="ID Number" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 2 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname2">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname2" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname2">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname2" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype2">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype2" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno2">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno2" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 3 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname3">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname3" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname3">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname3" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype3">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype3" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno3">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno3" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 4 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname4">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname4" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname4">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname4" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype4">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype4" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno4">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno4" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Hotels:</h2>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="hoteltype">Categories:</label>
                                            <div class="form-field">
                                                <select name="hoteltype" id="hoteltype" class="form-control" required>
                                                <option value="#" style="color: black;">--Select--</option>
                                                <option value="#" style="color: black;">Apartment</option>
                                                <option value="#" style="color:black;">Hotel/option>
                                                <option value="#" style="color:black;">Hostel</option>
                                                <option value="#" style="color:black;">Inn</option>
                                                <option value="#" style="color:black;">Villa</option>                                                
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="hoteltype">Location:</label>
                                            <div class="form-field">
                                                <select name="location" id="location" class="form-control" required>
                                                  <option value="#" style="color: black;">Amaravati(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Chitoor(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Kurnool(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Tirupati(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Vijaywada(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Visakhapatnam(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Itanagar(Arunachal Pradesh)</option>
                                                  <option value="#" style="color: black;">Dibrugarh(Assam)</option>
                                                  <option value="#" style="color: black;">Dispur(Assam)</option>
                                                  <option value="#" style="color: black;">Guwahati(Assam)</option>  
                                                  <option value="#" style="color: black;">Silchar(Assam)</option>
                                                  <option value="#" style="color: black;">Bodh Gaya(Bihar)</option>
                                                  <option value="#" style="color: black;">Darbhanga(Bihar)</option>
                                                  <option value="#" style="color: black;">Gaya(Bihar)</option>
                                                  <option value="#" style="color: black;">Patna(Bihar)</option>
                                                  <option value="#" style="color: black;">Sasaram(Bihar)</option>
                                                  <option value="#" style="color: black;">Chandigarh</option>
                                                  <option value="#" style="color: black;">Raipur(Chhattisgarh)</option>
                                                  <option value="#" style="color: black;">Durg(Chhattisgarh)</option>
                                                  <option value="#" style="color: black;">Silvasssa(Dadra and Nagar Haveli)</option>  
                                                  <option value="#" style="color: black;">Daman(Daman And Diu)</option>
                                                  <option value="#" style="color: black;">Diu(Daman And Diu</option>
                                                  <option value="#" style="color: black;">Delhi</option>
                                                  <option value="#" style="color: black;">Goa</option>                                                  
                                                  <option value="#" style="color: black;">Ahmadabad(Gujarat)</option>
                                                  <option value="#" style="color: black;">Gandhinagar(Gujarat)</option>
                                                  <option value="#" style="color: black;"> Dwarka(Gujarat)</option>
                                                  <option value="#" style="color: black;">Rajkot(Gujarat)</option>
                                                  <option value="#" style="color: black;">Surat(Gujarat)</option>
                                                  <option value="#" style="color: black;">Gurgaon(Haryana)</option> 
                                                  <option value="#" style="color: black;">Panipat(Haryana)</option> 
                                                  <option value="#" style="color: black;">Sonipat(Haryana)</option> 
                                                  <option value="#" style="color: black;">Dalhousie(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Dharmshala(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Hamirpur(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Kullu(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Shimla(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Una(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Anantnag(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Jammu(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Srinagar(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Gulmarg(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Bokaro(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Dhanbad(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Jameshdpur(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Ranchi(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Bangalore(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Mysuru(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Raichur(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Mangaluru(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Idukki(Kerala)</option> 
                                                  <option value="#" style="color: black;">Kochi(Kerala)</option> 
                                                  <option value="#" style="color: black;">Thiruvananthpuram(Kerala)</option> 
                                                  <option value="#" style="color: black;">Kargil(Ladakh)</option> 
                                                  <option value="#" style="color: black;">Leh(Ladakh)</option> 
                                                  <option value="#" style="color: black;">Bhopa(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Chhindwara(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Gwalior((Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Indore(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Itarsi(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Jabalpur(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Rewa(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Ujjain(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Amravati(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Aurangabad(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Mahabaleshwar(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Mumbai(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Nagpur(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Nashik(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Pune(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Ratnagiri(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Thane(Maharashtra)</option>
                                                  <option value="#" style="color: black;">Bhubaneshwar(Odisha)</option>
                                                  <option value="#" style="color: black;">Cuttack(Odisha)</option>
                                                  <option value="#" style="color: black;">Konark(Odisha)</option>
                                                  <option value="#" style="color: black;">Puri(Odisha)</option>
                                                  <option value="#" style="color: black;">Puducherry</option>
                                                  <option value="#" style="color: black;">Amritsar(Punjab)</option>
                                                  <option value="#" style="color: black;">Jalandhar(Punjab)</option>
                                                  <option value="#" style="color: black;">Patiala(Punjab)</option>
                                                  <option value="#" style="color: black;">Ajmer(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Bikaner(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Jaipur(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Jaislmer(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Jodhpur(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Gangtok(Sikkim)</option>
                                                  <option value="#" style="color: black;">Chennai(Tamil Nadu</option>
                                                  <option value="#" style="color: black;">Ramesawaram(Tamil Nadu)</option>
                                                  <option value="#" style="color: black;">Hyderabad(Telangana)</option>
                                                  <option value="#" style="color: black;">Agra(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Ayodhya(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Kanpur(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Varansi(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Lucknow(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Nainital(Uttarakhand)</option>
                                                  <option value="#" style="color: black;">Mussoorie(Uttarakhand)</option>
                                                  <option value="#" style="color: black;">Darjiling(West Bengal)</option>
                                                  <option value="#" style="color: black;">Kolkata(West Bengal)</option>
                                                  <option value="#" style="color: black;">Malda(West Bengal)</option>                                             
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="facility">Facilities:</label>
                                            <div class="form-field">
                                                <select name="facility" id="facility" class="form-control">
                                                <option value="#" style="color: black;">--Select--</option>
                                                <option value="#" style="color: black;">Airport Transfer</option>
                                                <option value="#" style="color:black;">Resto Bar/option>
                                                <option value="#" style="color:black;">Restaurant</option>
                                                <option value="#" style="color:black;">Swimming Pool</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Pick Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Pick Up Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Drop Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Drop Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="note">Please indicate here any special requirement:</label>
                                            <div class="form-field">
                                                <input type="text" id="note" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block" onclick="xyzhotel()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tour" class="tab-pane fade">
                            <form method="post" class="colorlib-form" name="tour">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Where:</label>
                                            <div class="form-field">
                                                <input type="text" id="location" class="form-control" placeholder="Search Location" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Journey Date:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Journey date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Return Date:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Return date" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="guests">Guests</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                    <option value="#" style="color:black;">1</option>
                                    <option value="#" style="color:black;">2</option>
                                    <option value="#" style="color:black;">3</option>
                                    <option value="#" style="color:black;">4</option>
                                    <option value="#" style="color:black;">5+</option>
                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Personal Information:</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 1 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype" class="form-control" placeholder="ID type" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno" class="form-control" placeholder="ID Number" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 2 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname2">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname2" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname2">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname2" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype2">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype2" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno2">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno2" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 3 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname3">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname3" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname3">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname3" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype3">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype3" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno3">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno3" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                            <h3 style="color: white;">Passenger 4 Details</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fname4">First Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="fname4" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="lname4">Last Name:</label>
                                                <div class="form-field">
                                                    <input type="text" id="lname4" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idtype4">ID Type:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idtype4" class="form-control" placeholder="ID type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idno4">ID Number:</label>
                                                <div class="form-field">
                                                    <input type="text" id="idno4" class="form-control" placeholder="ID Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Tours:</h2>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="hoteltype">Location:</label>
                                            <div class="form-field">
                                                <select name="location" id="location" class="form-control" required>
                                                 <option value="#" style="color: white;">--Select--</option>
                                                  <option value="#" style="color: black;">Amaravati(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Chitoor(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Kurnool(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Tirupati(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Vijaywada(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Visakhapatnam(Andhra Pradesh)</option>
                                                  <option value="#" style="color: black;">Itanagar(Arunachal Pradesh)</option>
                                                  <option value="#" style="color: black;">Dibrugarh(Assam)</option>
                                                  <option value="#" style="color: black;">Dispur(Assam)</option>
                                                  <option value="#" style="color: black;">Guwahati(Assam)</option>  
                                                  <option value="#" style="color: black;">Silchar(Assam)</option>
                                                  <option value="#" style="color: black;">Bodh Gaya(Bihar)</option>
                                                  <option value="#" style="color: black;">Darbhanga(Bihar)</option>
                                                  <option value="#" style="color: black;">Gaya(Bihar)</option>
                                                  <option value="#" style="color: black;">Patna(Bihar)</option>
                                                  <option value="#" style="color: black;">Sasaram(Bihar)</option>
                                                  <option value="#" style="color: black;">Chandigarh</option>
                                                  <option value="#" style="color: black;">Raipur(Chhattisgarh)</option>
                                                  <option value="#" style="color: black;">Durg(Chhattisgarh)</option>
                                                  <option value="#" style="color: black;">Silvasssa(Dadra and Nagar Haveli)</option>  
                                                  <option value="#" style="color: black;">Daman(Daman And Diu)</option>
                                                  <option value="#" style="color: black;">Diu(Daman And Diu</option>
                                                  <option value="#" style="color: black;">Delhi</option>
                                                  <option value="#" style="color: black;">Goa</option>                                                  
                                                  <option value="#" style="color: black;">Ahmadabad(Gujarat)</option>
                                                  <option value="#" style="color: black;">Gandhinagar(Gujarat)</option>
                                                  <option value="#" style="color: black;"> Dwarka(Gujarat)</option>
                                                  <option value="#" style="color: black;">Rajkot(Gujarat)</option>
                                                  <option value="#" style="color: black;">Surat(Gujarat)</option>
                                                  <option value="#" style="color: black;">Gurgaon(Haryana)</option> 
                                                  <option value="#" style="color: black;">Panipat(Haryana)</option> 
                                                  <option value="#" style="color: black;">Sonipat(Haryana)</option> 
                                                  <option value="#" style="color: black;">Dalhousie(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Dharmshala(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Hamirpur(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Kullu(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Shimla(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Una(Himachal Pradesh)</option> 
                                                  <option value="#" style="color: black;">Anantnag(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Jammu(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Srinagar(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Gulmarg(Jammu and Kashmir (union territory))</option> 
                                                  <option value="#" style="color: black;">Bokaro(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Dhanbad(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Jameshdpur(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Ranchi(Jharkhand)</option> 
                                                  <option value="#" style="color: black;">Bangalore(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Mysuru(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Raichur(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Mangaluru(Karnataka)</option> 
                                                  <option value="#" style="color: black;">Idukki(Kerala)</option> 
                                                  <option value="#" style="color: black;">Kochi(Kerala)</option> 
                                                  <option value="#" style="color: black;">Thiruvananthpuram(Kerala)</option> 
                                                  <option value="#" style="color: black;">Kargil(Ladakh)</option> 
                                                  <option value="#" style="color: black;">Leh(Ladakh)</option> 
                                                  <option value="#" style="color: black;">Bhopa(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Chhindwara(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Gwalior((Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Indore(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Itarsi(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Jabalpur(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Rewa(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Ujjain(Madhya Pradesh)</option> 
                                                  <option value="#" style="color: black;">Amravati(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Aurangabad(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Mahabaleshwar(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Mumbai(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Nagpur(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Nashik(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Pune(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Ratnagiri(Maharashtra)</option> 
                                                  <option value="#" style="color: black;">Thane(Maharashtra)</option>
                                                  <option value="#" style="color: black;">Bhubaneshwar(Odisha)</option>
                                                  <option value="#" style="color: black;">Cuttack(Odisha)</option>
                                                  <option value="#" style="color: black;">Konark(Odisha)</option>
                                                  <option value="#" style="color: black;">Puri(Odisha)</option>
                                                  <option value="#" style="color: black;">Puducherry</option>
                                                  <option value="#" style="color: black;">Amritsar(Punjab)</option>
                                                  <option value="#" style="color: black;">Jalandhar(Punjab)</option>
                                                  <option value="#" style="color: black;">Patiala(Punjab)</option>
                                                  <option value="#" style="color: black;">Ajmer(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Bikaner(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Jaipur(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Jaislmer(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Jodhpur(Rajasthan)</option>
                                                  <option value="#" style="color: black;">Gangtok(Sikkim)</option>
                                                  <option value="#" style="color: black;">Chennai(Tamil Nadu</option>
                                                  <option value="#" style="color: black;">Ramesawaram(Tamil Nadu)</option>
                                                  <option value="#" style="color: black;">Hyderabad(Telangana)</option>
                                                  <option value="#" style="color: black;">Agra(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Ayodhya(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Kanpur(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Varansi(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Lucknow(Uttar Pradesh)</option>
                                                  <option value="#" style="color: black;">Nainital(Uttarakhand)</option>
                                                  <option value="#" style="color: black;">Mussoorie(Uttarakhand)</option>
                                                  <option value="#" style="color: black;">Darjiling(West Bengal)</option>
                                                  <option value="#" style="color: black;">Kolkata(West Bengal)</option>
                                                  <option value="#" style="color: black;">Malda(West Bengal)</option>                                             
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="facility">Tour Packages:</label>
                                            <div class="form-field">
                                                <select name="facility" id="facility" class="form-control">
                                                <option value="#" style="color: black;">--Select--</option>
                                                <option value="#" style="color: black;">Religious Place</option>
                                                <option value="#" style="color:black;">Family Tour</option>
                                                <option value="#" style="color:black;">Buisness Tour</option>
                                                <option value="#" style="color:black;">Historical Places</option>
                                                <option value="#" style="color: white;">Others</option>                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Pick Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Pick Up Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h3 style="color: white;">Do You want car for Drop Up?If yes please fill these details</h3>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="time">Drop Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="note">Please indicate here any special requirement:</label>
                                            <div class="form-field">
                                                <input type="text" id="note" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block" onclick="xyztour()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="car" class="tab-pane fade in active">
                            <form method="post" class="colorlib-form" name="car">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="location">Where:</label>
                                            <div class="form-field">
                                                <input type="text" id="location" class="form-control" placeholder="Search Location" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">When do you need a car:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Start date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date">Till when do you need a car:</label>
                                            <div class="form-field">
                                                <i class="icon icon-calendar2"></i>
                                                <input type="text" id="date" class="form-control date" placeholder="Return date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Personal Information:</h2>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fname">First Name:</label>
                                            <div class="form-field">
                                                <input type="text" id="fname" class="form-control" placeholder="First Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="lname">Last Name:</label>
                                            <div class="form-field">
                                                <input type="text" id="lname" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Your Email ID:</label>
                                            <div class="form-field">
                                                <input type="text" id="email" class="form-control" placeholder="Your Email ID" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="phoneno">Your Phone No:</label>
                                            <div class="form-field">
                                                <input type="text" id="phoneno" class="form-control" placeholder="Your Phone No" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="aphoneno">Alternate Phone No:</label>
                                            <div class="form-field">
                                                <input type="text" id="aphoneno" class="form-control" placeholder="Alternate Phone No" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="fname">Your Address:</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="idtype">Your ID type:</label>
                                            <div class="form-field">
                                                <input type="text" id="idtype" class="form-control" placeholder="Your ID" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="idno">Your ID number:</label>
                                            <div class="form-field">
                                                <input type="text" id="idno" class="form-control" placeholder="Your ID number" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Car Specifications:</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="type">What type of car you want:</label>
                                            <div class="form-field">
                                                <select name="driver" id="type" class="form-control" required>
                                                <option value="#" style="color: black;">--Select--</option>
                                                <option value="#" style="color: black;">Limousine(8-12 person)</option>
                                                <option value="#" style="color:black;">SUV (6-7 person)</option>
                                                <option value="#" style="color:black;">Van (12-15 person)</option>
                                                <option value="#" style="color:black;">Bus (50+ person)</option>
                                                <option value="#" style="color:black;">Other</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="driver">Do you want driver:</label>
                                            <div class="form-field">
                                                <select name="driver" id="driver" class="form-control">
                                                <option value="#" style="color: black;">--Select--</option>
                                                <option value="#" style="color: black;">YES</option>
                                                <option value="#" style="color:black;">No</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="driver">Do you want luggage carrier:</label>
                                            <div class="form-field">
                                                <select name="driver" id="driver" class="form-control">
                                                <option value="#" style="color: black;">--Select--</option>
                                                <option value="#" style="color: black;">YES</option>
                                                <option value="#" style="color:black;">No</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 heading4 animate-box">
                                        <h2 style="color: white;">Car Pick Up:</h2>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="time">Pick Up Time</label>
                                            <div class="form-field">
                                                <input type="time" id="time" class="form-control" placeholder="HH:MM AM">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="pickup">Pick Up Point</label>
                                            <div class="form-field">
                                                <input type="text" id="saddress" class="form-control" placeholder="Street Address">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="saddress2" class="form-control" placeholder="Street Address Line 2">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="city" class="form-control" placeholder="City">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="region" class="form-control" placeholder="Region">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="pincode" class="form-control" placeholder="Postal/Zip Code">
                                            </div>
                                            <div class="form-field">
                                                <input type="text" id="country" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="note">Please indicate here any special requirement:</label>
                                            <div class="form-field">
                                                <input type="text" id="note" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-block" onclick="xyzcar()">
                                    </div>
                                </div>

                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
function xyzcar(){
    var fname=document.forms["car"]["fname"].value;
    var lname=document.forms["car"]["lname"].value;
    var email=document.forms["car"]["email"].value;
    var phoneno=document.forms["car"]["phoneno"].value;
    var saddress=document.forms["car"]["saddress"].value;
    var city=document.forms["car"]["city"].value;
    var pincode=document.forms["car"]["pincode"].value;
    var idtype=document.forms["car"]["idtype"].value;
    var idno=document.forms["car"]["idno"].value;
    var type=document.forms["car"]["type"].value;
    var time=document.forms["car"]["time"].value;

    if(fname=="" || lname=="" || email=="" || phoneno=="" || saddress==""|| city==""  || pincode=="" || idtype=="" || idno=="" || type=="" || time==""){
        alert("Please fill in required fields");
        return false;
    }
    else{
    alert("You will receive an confirmation email!!");
    window.location="MainPage.php";
    }
}
function xyztour(){
    var fname=document.forms["tour"]["fname"].value;
    var lname=document.forms["tour"]["lname"].value;
    var idtype=document.forms["tour"]["idtype"].value;
    var idno=document.forms["tour"]["idno"].value;
    var location=document.forms["tour"]["location"].value;

    if(fname=="" || lname=="" ||  idtype=="" || idno=="" || location==""){
        alert("Please fill in required fields");
        return false;
    }
    else{
    alert("You will receive an confirmation email!!");
    window.location="MainPage.php";
    }
}

function xyzhotel(){
    var fname=document.forms["hotel"]["fname"].value;
    var lname=document.forms["hotel"]["lname"].value;
    var idtype=document.forms["hotel"]["idtype"].value;
    var idno=document.forms["hotel"]["idno"].value;
    var location=document.forms["hotel"]["location"].value;
    var hoteltype=document.forms["hotel"]["hoteltype"].value;
    

    if(fname=="" || lname=="" ||  idtype=="" || idno=="" || location=="" || hoteltype==""){
        alert("Please fill in required fields");
        return false;
    }
    else{
    alert("You will receive an confirmation email!!");
    window.location="MainPage.php";
    }
}
function xyztrain(){
    var fname=document.forms["train"]["fname"].value;
    var lname=document.forms["train"]["lname"].value;
    var idtype=document.forms["train"]["idtype"].value;
    var idno=document.forms["train"]["idno"].value;
    var location=document.forms["train"]["location"].value;
    var traintype=document.forms["train"]["traintype"].value;
    var traintype2=document.forms["train"]["traintype2"].value;
    var email=document.forms["train"]["email"].value;
    var phoneno=document.forms["train"]["phoneno"].value;
    var saddress=document.forms["train"]["saddress"].value;
    var city=document.forms["train"]["city"].value;
    var pincode=document.forms["train"]["pincode"].value;
    

    if(fname=="" || lname=="" ||  idtype=="" || idno=="" || location=="" || traintype=="" || traintype2=="" || email==""|| phoneno=="" || saddress=="" || city=="" || pincode==""){
        alert("Please fill in required fields");
        return false;
    }
    else{
    alert("You will receive an confirmation email!!");
    window.location="MainPage.php";
    }
}
function xyzflight(){
    var fname=document.forms["flight"]["fname"].value;
    var lname=document.forms["flight"]["lname"].value;
    var idtype=document.forms["flight"]["idtype"].value;
    var idno=document.forms["flight"]["idno"].value;
    var location=document.forms["flight"]["location"].value;
    var flighttype=document.forms["flight"]["flighttype"].value;
    var flighttype2=document.forms["flight"]["flighttype2"].value;
    var email=document.forms["flight"]["email"].value;
    var phoneno=document.forms["flight"]["phoneno"].value;
    var saddress=document.forms["flight"]["saddress"].value;
    var city=document.forms["flight"]["city"].value;
    var pincode=document.forms["flight"]["pincode"].value;
    

    if(fname=="" || lname=="" ||  idtype=="" || idno=="" || location=="" || traintype=="" || traintype2=="" || email==""|| phoneno=="" || saddress=="" || city=="" || pincode==""){
        alert("Please fill in required fields");
        return false;
    }
    else{
    alert("You will receive an confirmation email!!");
    window.location="MainPage.php";
    }

}
function xyz(){
    alert("you will receive an confirmation email!!");
}
</script>



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