<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>BTT</title>
    <link rel="icon" type="image/ico" href="images/icon.ico" />
    <meta name="author" content="abu">
    <meta name="keywords" content="btt, bosnian, tourist, travel, agency, arabic, bosna">
    <meta name="description" content="BTT - Bosnian Toursit Travel offers the best tour plans and the best hotels in B&H. ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

    <nav class="navbar bg-primary navbar-dark navbar-expand-md fixed-top" style="opacity:0.7; font-size:18px;">
        <a href="index.php" class="navbar-brand">
            <img src="images/icon.png" alt="logo" class="img-fluid mr-3" width="45" height="45" />
            <span class="h4">BTT</span>
        </a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navScrollspy">
                <li class="nav-item">
                    <a href="index.php" class="nav-link link active">
                        <i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.php" class="nav-link link">
                        <i class="fas fa-users mr-2"></i>About Us</a>
                </li>
                <li class="nav-item">
                    <a href="tourPlans.php" class="nav-link link">
                        <i class="fas fa-suitcase mr-2"></i>Tour plans</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="far fa-calendar-alt mr-2"></i>Reservation</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="hotel.php">
                            <i class="fas fa-bed mr-2"></i>Hotel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="apartment.php">
                            <i class="far fa-building mr-2"></i>Apartment</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="rent.php" class="nav-link link">
                        <i class="fas fa-car mr-2"></i>Rent-a-car</a>
                </li>
                <li class="nav-item">
                    <a href="feedback.php" class="nav-link link">
                        <i class="far fa-smile mr-2"></i>Feedback</a>
                </li>
            </ul>
            <?php
                if (isset($_SESSION['email'])) {
                    echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='logout'  class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Logout</span></a></li></ul>";
                } else {
                    echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='#' data-toggle='modal' data-target='#SignModal' class='nav-link link'><span class='navLinks'><i class='fa fa-user-plus mr-2'></i>Register</span></a></li><li class='nav-item'><a href='#' data-toggle='modal' data-target='#LoginModal' class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Login</span></a></li></ul>";
                }
            ?>
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#SignModal" class="nav-link link">
                        <span class="navLinks">
                            <i class="fa fa-user-plus mr-2"></i>Register</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#LoginModal" class="nav-link link">
                        <span class="navLinks">
                            <i class="fas fa-sign-in-alt mr-2"></i>Login</span>
                    </a>
                </li>
            </ul> -->
        </div>
    </nav>

    <div class="modal fade" id="SignModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleSign">
                        <img src="images/icon.png" class="img-fluid mr-5" width="60" height="60" alt="BTT">
                        <label class="h2 text-primary">Create an account</label>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fas fa-times"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12">
                        <input type="text" placeholder="Fist name..." id="firstSign" name="firstSign" class="form-control" style="max-width:400px;"
                            required="">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="text" placeholder="Last name..." id="lastSign" name="lastSign" class="form-control" style="max-width:400px;"
                            required="">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="email" placeholder="you@example.com" id="emailSign" name="emailSign" class="form-control" style="max-width:400px;"
                            required="">
                        <br />
                    </div>
                    <table>
                        <tr>
                            <td>
                                <div>
                                    <input type="password" placeholder="*****" class="form-control" style="width:400px !important;margin-right:0px !important;"
                                        required id="passSign" name="passSign">
                                </div>
                            </td>
                            <td>
                                <button type="button" id="eye" name="eye" class="btn btn-outline-warning" style="margin-left:-43px !important;">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                    <!--
                    <div class="col-xs-12">
                        <input type="password" placeholder="*****" class="form-control" style="max-width:400px;" required="">
                    </div>-->
                    <div class="col-12 mb-3" style="margin-left:-10px !important;">
                        <a href="login.php" class="text-success">Already has account?</a>
                    </div>
                    <div class="col-xs-12  offset-4">
                        <button class="btn btn-success" id="signButton" name="signButton">Sign up for free
                            <i class="fas fa-user-plus ml-2"></i>
                        </button>

                    </div>
                    <div class="alert mt-3" id="alert"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                        <i class="fas fa-times ml-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#alert').slideUp();
        $('#signButton').click(function () {
            $("#alert").removeClass('alert-success').removeClass('alert-danger');
            var firstSign = $('#firstSign').val();
            var lastSign = $('#lastSign').val();
            var emailSign = $('#emailSign').val();
            var passSign = $('#passSign').val();

            function validateEmail($emailSign) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($emailSign);
            }

            if (firstSign == "") {
                $("#alert").addClass('alert-danger');
                $("#alert").html("Your first name is required!!!");
                $("#alert").slideDown(500).delay(1000).slideUp(500);
            } else if (lastSign == "") {
                $("#alert").addClass('alert-danger');
                $("#alert").html("Your last name is required!!!");
                $("#alert").fadeIn(500).delay(1000).fadeOut(500);
            } else if (emailSign == "") {
                $("#alert").addClass('alert-danger');
                $("#alert").html("Email field is required!!!");
                $("#alert").fadeIn(500).delay(1000).fadeOut(500);
            } else if (!validateEmail(emailSign)) {
                $("#alert").addClass('alert-danger');
                $("#alert").html('Please enter validated email address.');
                $("#alert").slideDown(500).delay(1000).slideUp(500);
            } else if (passSign == "") {
                $("#alert").addClass('alert-danger');
                $("#alert").html("Password is required!!!");
                $("#alert").fadeIn(500).delay(1000).fadeOut(500);
            }else {
                $.ajax({
                    url: "./indexSent.php?task=register&firstSign="+firstSign+"&lastSign="+lastSign+"&emailSign="+emailSign+"&passSign="+passSign,
                    success: function (data){
                        if(data.indexOf('sent') > -1){
                            $("#alert").addClass('alert-success');
							$("#alert").html('Your account created successfully. Now you can login with your information');
							$("#alert").slideDown(500).delay(2000).slideUp(500);
                            $('#firstSign').val("");
                            $('#lastSign').val("");
                            $('#emailSign').val("");
                            $('#passSign').val("");
                        } else{
                            $("#alert").addClass('alert-danger');
							$("#alert").html('The email is already exists.');
							$("#alert").slideDown(500).delay(1000).slideUp(500);
                        }
                    },
                    error: function (data, err){
                        $("#alert").addClass('alert-danger');
                        $("#alert").html('Some problem occured. We are sorry.');
                        $("#alert").slideDown(500).delay(1000).slideUp(500);
                    }
                })
            }
        });

        $('#eye').click(function () {
            /* var elementType = $('#passSign').prev().prop('pass'); */
            var elementType = $('#passSign').attr('type');
            console.log(elementType);
            if (elementType == "text") {
                $('#passSign').attr('type', 'password');
            } else if (elementType == "password") {
                $('#passSign').attr('type', 'text');
            }
        });
    </script>

    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleLog">
                        <img src="images/icon.png" class="img-fluid mr-5" width="60" height="60" alt="BTT">
                        <label class="h2 text-primary ml-5">Login</label>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fas fa-times"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <input type="email" placeholder="you@example.com" class="form-control" style="max-width:400px;" id="emailLog" name="emailLog"
                            required>
                        <br>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <div style="margin-left:15px;">
                                    <input type="password" placeholder="*****" class="form-control" style="max-width:400px !important;margin-right:270px !important;"
                                        required id="passLog" name="passLog">
                                </div>
                            </td>
                            <td>
                                <button type="button" id="eyeLog" name="eyeLog" class="btn btn-outline-warning" style="margin-left:-92px !important;">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                    <!--<div class="col-12">
        <input type="password" placeholder="*****" class="form-control" style="max-width:400px;" required="">
    </div>-->
                    <div class="row">
                        <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-5 my-2 ml-3">
            <button type="button" class="btn btn-outline-primary">
                <i class="fas fa-eye"></i>
            </button>
        </div>-->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-5 mr-4">
                            <a href="register.php" class="badge ml-3 text-warning" style="text-decoration:none;">
                                <span style="font-size:13px;">No account?</span>
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 ml-4">
                            <a href="#" class="badge ml-4 text-primary">
                                <span style="font-size:13px;">Forgot password?</span>
                            </a>
                        </div>
                        <br />
                    </div>
                    <div class="col-xs-12  offset-4 mt-3">
                        <button id="logButton" name="logButton" class="btn btn-success">Login
                            <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </div>
                    <div class="alert mt-3" id="alertLog"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                        <i class="fas fa-times ml-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#alertLog').slideUp();
       
        $('#logButton').click(function () {
            $('#alertLog').removeClass('alert-success').removeClass('alert-danger');
            var emailLog = $('#emailLog').val();
            var passLog = $('#passLog').val();

            function validateEmail($emailLog) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($emailLog);
            }

            if (emailLog == "") {
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html("Email field is required!!!");
                $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
            } else if (!validateEmail(emailLog)) {
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html('Please enter validated email address.');
                $("#alertLog").slideDown(500).delay(1000).slideUp(500);
            } else if (passLog == "") {
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html("Please enter your password!!!");
                $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
            } else {
                $.ajax({
                    url: "./indexSentLog.php?task=login&emailLog="+emailLog+"&passLog="+passLog,
                    success: function (data){
                        if(data.indexOf('sent') > -1){
                            $("#alertLog").addClass('alert-success');
							$("#alertLog").html('Logged in successfully');
							$("#alertLog").slideDown(500).delay(1000).slideUp(500);
                            $('#emailLog').val("");
                            $('#passLog').val("");
                            var delay = 1500;
                            setTimeout(function(){
                                window.location = "index.php"; }, delay);
                        } else if(data.indexOf('pass') > -1){
                            $("#alertLog").addClass('alert-danger');
							$("#alertLog").html('Password is incorrect');
							$("#alertLog").slideDown(500).delay(1000).slideUp(500);
                        } else {
                            $("#alertLog").addClass('alert-danger');
							$("#alertLog").html('Email is incorrect');
							$("#alertLog").slideDown(500).delay(1000).slideUp(500);
                        }
                    },
                    error: function (data, err){
                        $("#alertLog").addClass('alert-danger');
                        $("#alertLog").html('Some problem occured. We are sorry.');
                        $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                    }
                })
            }
        });

        $('#eyeLog').click(function () {
            /* var elementType = $('#passSign').prev().prop('pass'); */
            var elementType = $('#passLog').attr('type');
            console.log(elementType);
            if (elementType == "text") {
                $('#passLog').attr('type', 'password');
            } else if (elementType == "password") {
                $('#passLog').attr('type', 'text');
            }
        });
    </script>

    <section id="jumbotron" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead">Visit Bosnia & Herzegovina with us!</p>
            <p class="lead">The best offers and price!</p>
            <p class="text-primary h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section>
        <h2 class="display-4 text-center text-info">BTT</h2>
        <p class="text-center h4 text-primary mb-5">The beauty of Bosnia & Hercegovina</p>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
                <li data-target="#carousel" data-slide-to="2" class=""></li>
                <li data-target="#carousel" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/slideshow1.jpg" alt="slide1" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h3 class="display-4">Mostar</h3>
                        <p>Kravica Waterfall</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slideshow2.jpg" alt="slide2" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h3 class="display-4">Goražde </h3>
                        <p>Osanica River</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slideshow3.jpg" alt="slide3" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h3 class="display-4">Trnovo</h3>
                        <p>Trnovacko Lake</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slideshow4.jpg" alt="slide4" class="d-block img-fluid">
                    <div class="carousel-caption">
                        <h3 class="display-4">Bihac</h3>
                        <p>Una River</p>
                    </div>
                </div>
            </div>
            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Preview</span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section>
        <h2 class="display-3 text-center text-info my-4">The best travel tour offers</h2>
        <div class="card-group mt-3">
            <div class="card ml-2" style="border-radius:2% !important;" id="prva">
                <a href="tourPlans.php">
                    <img class="card-img-top img-fluid index " src="images/skijanje.jpg" style="border-radius:2% !important;" alt="Skijanje">
                </a>
                <div class="card-body">
                    <a href="tourPlans.php" class="text-info">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                    </a>
                    <h5 class="card-title text-primary text-right mr-4 mt-4">From 350
                        <i class="fas fa-euro-sign ml-1"></i>
                    </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <i class="far fa-clock mr-3"></i>5 days</small>
                </div>
            </div>
            <div class="card ml-2" style=" border: 1px solid rgb(218, 218, 218) !important; border-radius:2% !important;" id="druga">
                <a href="tourPlans.php">
                    <img class="card-img-top img-fluid index " style="height:250px !important; border-radius:2% !important;" src="images/jajce.jpg"
                        alt="Jajce">
                </a>
                <div class="card-body">
                    <a href="tourPlans.php" class="text-info">
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </a>
                    <h5 class="card-title text-primary text-right mr-4 mt-5">From 500
                        <i class="fas fa-euro-sign ml-1"></i>
                    </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <i class="far fa-clock mr-3"></i>7 days</small>
                </div>
            </div>
            <div class="card ml-2 mr-2" style=" border: 1px solid rgb(218, 218, 218) !important; border-radius:2% !important;" id="treca">
                <a href="tourPlans.php">
                    <img class="card-img-top img-fluid index " src="images/neum.jpg" style="height:250px !important; border-radius:2% !important;"
                        alt="Neum">
                </a>
                <div class="card-body">
                    <a href="tourPlans.php" class="text-info">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </a>
                    <h5 class="card-title text-primary text-right mr-4 mt-5">From 899
                        <i class="fas fa-euro-sign ml-1"></i>
                    </h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <i class="far fa-clock mr-3"></i>10 days</small>
                </div>
            </div>
        </div>
    </section>


    <div class="row no-gutters">
        <div class="col-5 ml-5 mt-4">
            <h2 class="text-info text-center">Bosnia & Hercegovina</h2>
            <p class="h4 text-primary mb-3 text-center">Our best places</p>
            <div id="carousel3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel3" data-slide-to="0" class=""></li>
                    <li data-target="#carousel3" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel3" data-slide-to="2" class=""></li>
                    <li data-target="#carousel3" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner " role="listbox">
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="bestPlaces.php">
                            <img src="images/konjic.jpg" alt="slide1" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Konjic</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item active" style="border-radius:5%;">
                        <a href="bestPlaces.php">
                            <img src="images/mostar.jpg" alt="slide2" style="border-radius:5%;" class="d-block img-fluid index2" />
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Mostar</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="bestPlaces.php">
                            <img src="images/bjelasnica.jpg" alt="slide3" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Bjelasnica</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="bestPlaces.php">
                            <img src="images/sebilj.jpg" alt="slide4" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Sarajevo</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-4" style="margin-left:135px !important;">
            <h2 class="text-info text-center">Bosnia & Hercegovina</h2>
            <p class="h4 text-primary mb-3 text-center">The best hotels in Sarajevo</p>
            <div id="carousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel2" data-slide-to="0" class=""></li>
                    <li data-target="#carousel2" data-slide-to="1" class=""></li>
                    <li data-target="#carousel2" data-slide-to="2" class="active"></li>
                    <li data-target="#carousel2" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/krone.jpg" alt="slide1" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Krone Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/scc.jpg" alt="slide2" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Al Shidi - SCC Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item active" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/malak.jpg" alt="slide3" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Malak Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/mariot.jpg" alt="slide4" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Marriott Hotel</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-4">
        <div class="row no-gutters">
            <div class="col-3">
                <div class="card" id="why" style="height:180px;">
                    <div class="card-body">
                        <h3 class="card-title text-white text-center " style="margin-top:50px; font-size:37px;">WHY BTT?</h3>
                    </div>
                </div>
            </div>
            <div class="col-3" style="padding-right:0px !important; padding-left:0px; ">
                <div class="card">
                    <div class="card-body why-2 text-white text-center" style="height:180px;">
                        <i class="fas fa-thumbs-up fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">SATISFIED GUESTS</h5>
                        <p class="card-text">Far away from mass tourism.</p>
                    </div>
                </div>
            </div>
            <div class="col-3" style="padding-right:0px !important; padding-left:0px;">
                <div class="card">
                    <div class="card-body why-2 text-white text-center" style="height:180px;">
                        <i class="fab fa-envira fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">PEACEFUL ENVIRONMENT</h5>
                        <p class="card-text">Your vacation is guaranteed.</p>
                    </div>
                </div>
            </div>
            <div class="col-3" style="padding-right:0px !important; padding-left:0px;">
                <div class="card">
                    <div class="card-body why-2 text-white text-center" style="height:180px;">
                        <i class="fas fa-certificate fa-3x mb-3 text-warning"></i>
                        <h5 class="card-title">BTT ADVENTURE</h5>
                        <p class="card-text">For a more positive view of the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-secondary">
        <div class="row no-gutters">
            <div class="col-6 mt-5">
                <img src="images/icon.png" alt="logo" class="img-fluid ml-2" width="100" height="100" />
                <label class="text-uppercase text-center text-warning h1" style="opacity:0.7;">Bosnian Tourist Travel</label>
                <p class="ml-3 text-dark mt-4" style="max-width:400px;">Home to medieval villages, rivers and lakes, plus the craggy Dinaric Alps, and many more, explore our Country.</p>
                <p class="ml-3 text-dark mt-3">You can see BTT offers by visitting this
                    <a href="tourPlans.php" class="text-warning" style="text-decoration:none;">LINK.</a>
                </p>
            </div>
            <div class="col-5 mt-5 offset-1">
                <h1 class="text-warning mb-5 text-uppercase" style="margin-top:13px !important; opacity:0.7;">Contact info</h1>
                <ul class="list-group list-group-flush" style="width:500px; border:none;">
                    <li class="list-group-item text-warning bg-secondary mt-4">Address:
                        <span class="ml-5">
                            <a href="#" id="map" data-toggle="modal" class="text-warning" data-target="#map7" style="text-decoration:none;">
                                <i class="fas fa-map-marker mr-2"></i>Grada Bakua 11, Sarajevo, B&H</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning bg-secondary">Phone:
                        <span style="margin-left:60px;">
                            <a href="tel:+38761091675" class="text-warning" style="text-decoration:none;">
                                <i class="fas fa-phone mr-2"></i>(+387)61 091 675</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning bg-secondary">E-mail:
                        <span style="margin-left:60px;">
                            <a href="mailto:abdulrahman.almonajed@gmail.com" style="text-decoration:none;" class="text-warning">
                                <i class="far fa-envelope mr-2"></i>abdulrahman.almonajed@gmail.com</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning bg-secondary">
                        Visit us on:
                        <a href="https://www.instagram.com/bosniant/" target="_blank" class="text-warning " style="margin-left:32px !important; text-decoration:none;">
                            <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
                        <a href="https://www.facebook.com" target="_blank" class="text-warning ml-4" style="text-decoration:none;">
                            <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                    </li>
                    <li class="list-group-item text-warning bg-secondary"></li>
                </ul>
            </div>
            <div class="col-12 text-center text-dark mt-3">
                <p style="font-size:20px;">&copy; 2018 Abu</p>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="map7" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:right;">
                    <span aria-hidden="true" style="float:right;margin-right:15px;margin-top:5px;">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body">
                    <div class="col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.2453302725744!2d18.349382815303517!3d43.830010879115655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c990fdf0ccc5%3A0xdab20818f84ffaf7!2sGrada+Bakua%2C+Sarajevo+71000!5e0!3m2!1sen!2sba!4v1520858418062"
                            width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>