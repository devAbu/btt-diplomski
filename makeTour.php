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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

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
                    <a href="index.php" class="nav-link link ">
                        <i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.php" class="nav-link link">
                        <i class="fas fa-users mr-2"></i>About Us</a>
                </li>
                <li class="nav-item">
                    <a href="tourPlans.php" class="nav-link link active">
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
            <ul class="navbar-nav ml-auto">
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
            </ul>
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
                        <input type="text" placeholder="Fist name..." id="firstSign" name="firstSign" class="form-control" style="max-width:400px;" required="">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="text" placeholder="Last name..." id="lastSign"  class="form-control" style="max-width:400px;" required="">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="email" placeholder="you@example.com" id="emailSign" name="emailSign" class="form-control" style="max-width:400px;" required="">
                        <br>
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
                    <!--<div class="col-xs-12">
                        <input type="password" placeholder="*****" class="form-control" style="max-width:400px;" required="">
                    </div>-->
                    <div class="col-12 mb-3">
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
                        <input type="email" placeholder="you@example.com" id="emailLog" name="emailLog" class="form-control" style="max-width:400px;" required="">
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
                    <!--
                        <div class="col-12">
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
                        <button class="btn btn-success" id="logButton" name="logButton">Login
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
                $("#alertLog").removeClass('alert-success').removeClass('alert-danger');
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
                }else {
                $.ajax({
                    url: "./indexSentLog.php?task=login&emailLog="+emailLog+"&passLog="+passLog,
                    success: function (data){
                        if(data.indexOf('sent') > -1){
                            $("#alertLog").addClass('alert-success');
							$("#alertLog").html('Logged in successfully');
							$("#alertLog").slideDown(500).delay(1000).slideUp(500);
                            $('#emailLog').val("");
                            $('#passLog').val("");
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

    <section id="jumbotron" class="jumbotron8 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
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
        <div class="row">
            <div class="offset-1 col-3">
                <h4 class="text-success">City:</h4>

                <input class="w3-check mr-1" id="sarajevo" onclick="price()" name="sarajevo" type="checkbox">Sarjevo
                <input class="w3-check mr-1" id="mostar" name="mostar" onclick="price()" type="checkbox">Mostar
                <input class="w3-check mr-1" id="jajce" name="jajce" onclick="price()" type="checkbox">Jajce
                <input class="w3-check mr-1" id="konjic" name="konjic" onclick="price()" type="checkbox">Konjic
                <br />
                <input class="w3-check  mr-1 mt-1" id="bjelasnica" name="bjelasnica" onclick="price()" type="checkbox">Bjelasnica
                <input class="w3-check mr-1" id="trebevic" name="trebevic" onclick="price()" type="checkbox">Trebevic
                <input class="w3-check mr-1" id="igman" name="igman" onclick="price()" type="checkbox">Igman
                <br />
                <input class="w3-check mr-1 mt-1" id="jahorina" onclick="price()" name="jahorina" type="checkbox">Jahorina
                <br />
                <input type="text" class="form-control mt-2" id="other" onchange="price()" name="other" placeholder="Other..." />
                <!-- title="For multiple places please use ','" -->
            </div>
            <div class="col-3 mr-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-success">Budget:</h4>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="number" id="budget" onchange="price()" name="budget" value="0" min="0" step="10"  max="8999" class="form-control currency"
                            />
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="text-success">No. of people:</h4>

                        <input type="number" id="people" onchange="price()" name="people" value="0" min="0" step="1" max="15" class="form-control"
                        />
                    </div>
                </div>
            </div>
            <div class="col-3 ml-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-success">Price:</h4>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="number" value="0" id="price" name="price" readonly data-number-to-fixed="2" style="height:50px;" class="form-control currency"
                            />
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <button class="btn btn-lg btn-success" style="width: 315px;" id="send" name="send"> Send request</button>
                    </div>
                </div>
            </div>
            <div class="col-3 offset-1 mt-4 mb-3">
                <h4 class="text-success">Tour Length (days):</h4>

                <input type="number" id="length"  name="length" value="0" min="0" max="10" step="1" class="form-control"
                />
            </div>
            <div class=" col-3 mt-4">
                <h4 class="text-success">Period:</h4>

                <input class="w3-check  mr-1" id="zima" onclick="price()" name="zima" type="checkbox">Zima
                <input class="w3-check mr-1" id="ljeto" onclick="price()" name="ljeto" type="checkbox">Ljeto
                <input class="w3-check mr-1" id="proljece" onclick="price()" name="proljece" type="checkbox">Proljece
                <input class="w3-check mr-1" id="jesen" onclick="price()" name="jesen" type="checkbox">Jesen
                <br />
            </div>
            <div class="col-3 offset-1 mt-4">
                <h4 class="text-success">Interpreter:</h4>

                <input type="radio"  id="yes" onclick="price()" name="interpreter" />Yes
                <input type="radio" id="no" onclick="price()" name="interpreter" />No
            </div>
        </div>
        <div class="alertReq" id="alertReq"></div>
        <div id="dialog" title="Warning">
        <p>Your budget is smaller than the total price!!!</p>
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

    <script>
        $( function() {
            var otherPlaces = [
                "Zenica",
                "Travnik",
                "Kravice"
            ];
        /* function split( val ) {
            return val.split( /,\s* / );
        }
        function extractLast( term ) {
        return split( term ).pop();
        } */
        $( "#other" ).autocomplete({
            source: otherPlaces
            /* function( request, response ) {
          // delegate back to autocomplete, but extract the last term
            response( $.ui.autocomplete.filter(
            otherPlaces, extractLast( request.term ) ) );
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push( ui.item.value );
                // add placeholder to get the comma-and-space at the end
                terms.push( "" );
                this.value = terms.join( ", " );
                return false;
            } */
        });
    });
  </script>
    <script>
        $('#alertReq').fadeOut();
        $('#dialog').hide();
        $('#send').click(function () {
            $("#alertReq").removeClass('alert-success').removeClass('alert-danger');

            var sarajevo = $('#sarajevo').is(':checked');
            var mostar = $('#mostar').is(':checked');
            var jajce = $('#jajce').is(':checked');
            var konjic = $('#konjic').is(':checked');
            var bjelasnica = $('#bjelasnica').is(':checked');
            var trebevic = $('#trebevic').is(':checked');
            var igman = $('#igman').is(':checked');
            var jahorina = $('#jahorina').is(':checked');
            var other = $('#other').val();
            var session = $('#session').val();

            var check = "";

            var checked = 0;

            if(sarajevo == true) {
                checked += 1;
                check += "sarajevo,"
                console.log(check);
            }
            if(mostar == true) {
                checked += 1;
                check += "mostar,"
                console.log(check);
            }
            if(jajce == true) {
                checked += 1;
                check += "jajce,"
                console.log(check);
            }
            if(konjic == true) {
                checked += 1;
                check += "konjic,"
                console.log(check);
            }
            if(bjelasnica == true) {
                checked += 1;
                check += "bjelasnica,"
                console.log(check);
            }
            if(trebevic == true) {
                checked += 1;
                check += "trebevic,"
                console.log(check);
            }
            if(igman == true) {
                checked += 1;
                check += "igman,"
                console.log(check);
            }
            if(jahorina == true) {
                checked += 1;
                check += "jahorina,"
                console.log(check);
            }
            if(other == "Zenica"){
                checked += 1;
                check += "Zenica,"
                console.log(check);
            }else if( other == "Kravice") {
                checked += 1;
                check += "Kravice,"
                console.log(check);
            } else if(other == "Travnik"){
                checked += 1;
                check += "Travnik,"
                console.log(check);
            }
            console.log(other);
            console.log(checked);
            var budget = $('#budget').val();
            var people = $('#people').val();


            var price = $('#price').val();

            var length = $('#length').val();

            var zima = $('#zima').is(':checked');
            var ljeto = $('#ljeto').is(':checked');
            var proljece = $('#proljece').is(':checked');
            var jesen = $('#jesen').is(':checked');

            var period = "";

            if(zima == true) {
                period += "zima,"
                console.log(period);
            }
            if(ljeto == true) {
                period += "ljeto,"
                console.log(period);
            }
            if(proljece == true) {
                period += "proljece,"
                console.log(period);
            }
            if(jesen == true) {
                period += "jesen,"
                console.log(period);
            }

            var yes = $('#yes').is(':checked');
            var no = $('#no').is(':checked');

            var checkyes = "";

            if(yes == true){
                checkyes += "yes"
                console.log(checkyes);
            } else if(no == true) {
                checkyes += "no"
                console.log(checkyes);
            }



            if(sarajevo == false && mostar == false && jajce == false && konjic == false && bjelasnica == false && trebevic == false && igman == false && jahorina == false && other == ""){
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select at least 1 (one) place you want to visit!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (checked > 5){
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("You can choose at the most 5 (five) cities!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            }else if (people == 0 || people == "") {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please enter how many people will be!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (length == 0 || length == "") {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please enter the tour's length!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (zima == false && proljece == false && jesen == false && ljeto == false) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please choose 1 (one) season!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if( yes == false && no == false) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select if you need interpreter or not!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (budget < price) {
                $( "#dialog" ).show();
                $( "#dialog" ).dialog();
                /* $("#alert").addClass('alert-danger');
                $("#alert").html("Your budget is smaller than the total price of your tour!!!");
                $("#alert").fadeIn(500).delay(1000).fadeOut(500); */
            } else {
                $.ajax({
                    url: "./makeRequest?task=request&check="+check+"&people="+people+"&length="+length+"&period="+period+"&checkyes="+checkyes+"&price="+price+"&budget="+budget+"&session="+session,
                    success: function (data){
                        if(data.indexOf('sent') > -1){
                            $("#alertReq").addClass('alert-success');
							$("#alertReq").html('Request sent!!!');
							$("#alertReq").slideDown(500).delay(1000).slideUp(500);
                            $('#other').val("");
                            $('#length').val("");
                            $('#budget').val("");
                            $('#people').val("");
                            $('#price').val(0);
                            $('#sarajevo').prop('checked', false);
                            $('#jajce').prop('checked', false);
                            $('#mostar').prop('checked', false);
                            $('#igman').prop('checked', false);
                            $('#konjic').prop('checked', false);
                            $('#bjelasnica').prop('checked', false);
                            $('#trebevic').prop('checked', false);
                            $('#igman').prop('checked', false);
                            $('#jahorina').prop('checked', false);
                            $('#yes').prop('checked', false);
                            $('#no').prop('checked', false);
                            $('#zima').prop('checked', false);
                            $('#proljece').prop('checked', false);
                            $('#jesen').prop('checked', false);
                            $('#ljeto').prop('checked', false);
                        } else {
                            $("#alertReq").addClass('alert-danger');
							$("#alertReq").html('Error occured');
							$("#alertReq").slideDown(500).delay(1000).slideUp(500);
                        }
                    },
                    error: function (data, err){
                        $("#alertLog").addClass('alert-danger');
                        $("#alertLog").html('Some problem occured. We are sorry.');
                        $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                    }
                })
            }//ajax slanje u bazu
        });
        function price() {

            var price = 0;

            var sarajevo = document.getElementById("sarajevo").checked;
            var mostar = document.getElementById("mostar").checked;
            var jajce = document.getElementById("jajce").checked;
            var konjic = document.getElementById("konjic").checked;
            var bjelasnica = document.getElementById("bjelasnica").checked;
            var trebevic = document.getElementById("trebevic").checked;
            var igman = document.getElementById("igman").checked;
            var jahorina = document.getElementById("jahorina").checked;
            var other = document.getElementById("other").value;

            if (sarajevo == true) {
                price += 100;
            }
            if (mostar == true) {
                price += 250;
            }
            if (jajce == true) {
                price += 150;
            }
            if (konjic == true) {
                price += 150;
            }
            if (bjelasnica == true) {
                price += 125;
            }
            if (trebevic == true) {
                price += 149;
            }
            if (igman == true) {
                price += 120;
            }
            if (jahorina == true) {
                price += 180;
            }
            if (other == "Zenica") {
                price += 120;
            } else if (other == "Kravice") {
                price += 300;
            } else if (other == "Travnik") {
                price += 200;
            }

            var budget = document.getElementById('budget').value;

            var people = document.getElementById('people').value;
            if(people != 0) {
                if (people < 5 ) {
                    price += 200;
                } else if (people < 10) {
                    price += 250;
                } else {
                  price += 350;
                }
            }
            var length = document.getElementById('length').value;
            if(length != 0) {
                if (length < 3) {
                    price += 35;
                } else if (length < 5) {
                    price += 50;
                } else if (length < 8) {
                    price += 75;
                } else {
                    price += 100;
                }
            }

            var zima = document.getElementById('zima').checked;
            var ljeto = document.getElementById('ljeto').checked;
            var proljece = document.getElementById('proljece').checked;
            var jesen = document.getElementById('jesen').checked;

            if (zima == true) {
                price -= 75;
            }
             if (ljeto == true) {
                price += 100;
            }

            var yes = document.getElementById('yes').checked;
            var no = document.getElementById('no').checked;

            if (yes == true) {
                price += 100;
            }
            document.getElementById("price").value = price;

            var budget = document.getElementById('budget').value;
        }
    </script>

</body>

</html>
