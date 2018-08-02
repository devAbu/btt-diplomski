<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" type="text/css" rel="stylesheet">
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
</head>

<body>

    <nav class="navbar bg-primary navbar-dark navbar-expand-md " style="opacity:0.7; font-size:18px;">
        <!--fixed-top-->
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
                    <a href="index.php" class="nav-link link">
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
                    <h5 class="modal-title" id="modalTitle">
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
                        <input type="text" placeholder="Fist name..." class="form-control" style="max-width:400px;" required="">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="text" placeholder="Last name..." class="form-control" style="max-width:400px;" required="">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="email" placeholder="you@example.com" class="form-control" style="max-width:400px;" required="">
                        <br>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <div>
                                    <input type="password" placeholder="*****" class="form-control" style="width:400px !important;margin-right:0px !important;"
                                        required id="pass">
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" style="margin-left:-43px !important;">
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
                        <button class="btn btn-success">Sign up for free
                            <i class="fas fa-user-plus ml-2"></i>
                        </button>
                    </div>
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

    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">
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
                        <input type="email" placeholder="you@example.com" class="form-control" style="max-width:400px;" required="">
                        <br>
                    </div>
                    <table>
                        <tr>
                            <td>
                                <div style="margin-left:15px;">
                                    <input type="password" placeholder="*****" class="form-control" style="max-width:400px !important;margin-right:270px !important;"
                                        required id="pass">
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" style="margin-left:-92px !important;">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </table>
                    <!--
                    <div class="col-12">
                        <input type="password" placeholder="*****" class="form-control" style="max-width:400px;" required="">
                    </div>
                        -->
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
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 ml-5">
                            <a href="forgotPass.php" class="badge ml-3 text-primary">
                                <span style="font-size:12px !important;">Forgot password?</span>
                            </a>
                        </div>
                        <br />
                    </div>
                    <div class="col-xs-12  offset-4 mt-3">
                        <button class="btn btn-success">Login
                            <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </div>
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

    <section id="jumbotron" class="jumbotron7 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Skijanje na Bjelasnici | 5 days</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section class=" bg-primary" style="opacity:0.7;">
        <div class="row">
            <div class="col-lg-4 offset-1">
                <ul class="list-group list-group-flush" style=" border:none; ">
                    <li class="list-group-item text-warning mt-3 mb-2 " style="border:none; background:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 8</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning mt-3 mb-2" style=" background:none; border:none;">
                        <p class="card-text" style="float:left; ">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Availability: From November to February</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning mt-3 mb-2" style="background:none; border:none; ">
                        <p class="card-text" style="float:left; ">
                            <i class="fas fa-euro-sign mr-4"></i>From 350 to 500</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 offset-1">
                <ul class="list-group list-group-flush" style=" border:none; ">
                    <li class="list-group-item text-warning mt-3 mb-2 " style="border:none; background:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-plane" data-fa-transform="rotate-320"></i>
                            <span class="ml-2">Arrival date - To be defined</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning mt-3 mb-2" style=" background:none; border:none;">
                        <p class="card-text" style="float:left; ">
                            <i class="fas fa-plane" data-fa-transform="rotate-45"></i>
                            <span class="ml-3">Departure date - To be defined </span>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-2 mt-5 ml-5">
                <button class="btn btn-lg btn-outline-warning days" data-target="#reserve" data-toggle="modal">
                    <i class="far fa-envelope-open mr-2"></i>RESERVED</button>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-primary" style="opacity:0.8;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse offset-1" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link mr-4 more my-2" href="#details" style="font-size:18px;">Details
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mr-4 more my-2" href="#itinerary" style="font-size:18px;">Itinerary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4 more my-2" href="#map" style="font-size:18px;">Map</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="mb-3" id="details">
        <div class="row">
            <div class="col-6 offset-1 mb-4">
                <i class="fas fa-file-alt fa-2x" style="color:gold !important;"></i>
                <span style="font-size:30px;" class="ml-3 text-dark">
                    <b>Tour Details</b>
                </span>
            </div>
            <div class="offset-1 col-7 mt-4">
                <p class="text-muted">
                    Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, At vero eos et
                    accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. no sea takimata sanctus est Lorem ipsum dolor
                    sit amet. sed diam voluptua.
                </p>
            </div>
            <div class="col-lg-5 offset-lg-1 text-primary">
                <table class=" table-sm" border="0">
                    <thead>
                        <tr>
                            <th scope="col">
                                <i class="fas fa-euro-sign"></i>
                            </th>
                            <th scope="col">Price includes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-snowflake ml-4 mr-2"></i>Ski Hire</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-car mr-2 ml-4"></i>trip to the mountains</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-lock mr-2 ml-4"></i>Private transport throughout with driver</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-car mr-2 ml-4"></i>return to Sarajevo</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-plane mr-2 ml-4"></i>return to airport</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-male mr-2 ml-4"></i>Skilled bi-lingual guides</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-5  text-danger">
                <table class=" table-sm" border="0">
                    <thead>
                        <tr>
                            <th scope="col">
                                <i class="fas fa-euro-sign"></i>
                            </th>
                            <th scope="col" style="width:150px !important;">Price excludes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <i class="fas fa-times"></i>
                            </td>
                            <td>
                                <i class="fas fa-medkit mr-2"></i>Insurance of any kind</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <i class="fas fa-times"></i>
                            </td>
                            <td>
                                <i class="fas fa-bed mr-2"></i>The hotel or apartment</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <i class="fas fa-times"></i>
                            </td>
                            <td>
                                <i class="fas fa-utensils mr-2"></i>Food & Drink</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <i class="fas fa-times"></i>
                            </td>
                            <td>
                                <i class="fas fa-gift mr-2"></i>Item of a personal nature and optional gratuities to your guide(s)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-5 offset-lg-1  text-primary mt-4">
                <table class=" table-sm" border="0">
                    <thead>
                        <tr>
                            <th scope="col">
                                <i class="fas fa-euro-sign"></i>
                            </th>
                            <th scope="col" style="width:150px !important;">Getting around</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-medkit mr-2"></i>Private transport</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-tree mr-2"></i>Skiing</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-wifi mr-2"></i>Free Wi-fi</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-child mr-2"></i>Walking</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="fas fa-child"></i>
                                <i class="fas fa-male"></i>
                                <i class="fas fa-female mr-2"></i>Lift to the top of the Bjelanica</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <i class="fas fa-check"></i>
                            </td>
                            <td>
                                <i class="far fa-hand-peace"></i>Hookah</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <section class="mt-5" id="itinerary">
        <div class="row">
            <div class="col-6 offset-1 mb-4">
                <i class="fas fa-bus fa-2x" style="color:gold !important;"></i>
                <span style="font-size:30px;" class="ml-3 text-dark">
                    <b>Itinerary</b>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-7 offset-1">
                <button class="btn btn-info btn-lg btn-block text-left days" data-toggle="collapse" data-target="#day1">
                    <span style="font-size:15px;">Day 1 ->
                        <span class="text-warning">Sarajevo (hotel) - Lunch - Walking or Shopping</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 collapse show" id="day1">
                <p class="text-muted mt-3" style="word-spacing:8px;">
                    Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, consetetur sadipscing
                    elitr, At vero eos et accusam et justo duo dolores et ea rebum. no sea takimata sanctus est Lorem ipsum
                    dolor sit amet. no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-7 offset-1 mt-2">
                <button class="btn btn-info btn-lg btn-block text-left days" data-toggle="collapse" data-target="#day2">
                    <span style="font-size:15px;">Day 2 ->
                        <span class="text-warning">Breakfast - Mountain (Bjelasnica) - Hotel - Lunch - Walking</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 collapse show" id="day2">
                <p class="text-muted mt-3" style="word-spacing:8px;">
                    Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, consetetur sadipscing
                    elitr, At vero eos et accusam et justo duo dolores et ea rebum. no sea takimata sanctus est Lorem ipsum
                    dolor sit amet. no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-7 offset-1 mt-2">
                <button class="btn btn-info btn-lg btn-block text-left days" data-toggle="collapse" data-target="#day3">
                    <span style="font-size:15px;">Day 3/4 ->
                        <span class="text-warning">Breakfast - Skiing - Lunch - Lift to the top of the mountain - Hotel or Walking</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 collapse show" id="day3">
                <p class="text-muted mt-3" style="word-spacing:8px;">
                    Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, consetetur sadipscing
                    elitr, At vero eos et accusam et justo duo dolores et ea rebum. no sea takimata sanctus est Lorem ipsum
                    dolor sit amet. no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-7 offset-1 mt-2">
                <button class="btn btn-info btn-lg btn-block text-left days" data-toggle="collapse" data-target="#day5">
                    <span style="font-size:15px;">Day 5 ->
                        <span class="text-warning"> Breakfast - Enjoying on the mountain - Lunch - Srajevo - Shopping or Hotel - Airport</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-1 collapse show" id="day5">
                <p class="text-muted mt-3" style="word-spacing:8px;">
                    Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, consetetur sadipscing
                    elitr, At vero eos et accusam et justo duo dolores et ea rebum. no sea takimata sanctus est Lorem ipsum
                    dolor sit amet. no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="row">
            <div class="col-5 offset-3 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d89565.47649574917!2d18.278364588979628!3d43.77419210576289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d43.8302459!2d18.3309069!4m5!1s0x4758b181427cd255%3A0x507021c3cfe672ab!2sBjela%C5%A1nica!3m2!1d43.704166699999995!2d18.2566667!5e0!3m2!1sen!2sba!4v1521322000539"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="row my-5 ml-5">
            <div class="offset-3 col-5">
                <button class="btn btn-lg btn-outline-primary btn-block days" data-target="#reserve" data-toggle="modal">
                    <span class="text-uppercase">
                        <i class="far fa-envelope-open mr-2"></i>Reserve</span>
                </button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">
                        <img src="images/icon.png" class="img-fluid mx-5" width="60" height="60" alt="BTT">
                        <label class="h2 text-primary ml-5">Reserve</label>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fas fa-times"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control mb-2" placeholder="First Name..." />
                            <input type="text" class="form-control mb-2" placeholder="Last Name..." />
                            <input type="email" class="form-control mb-2" placeholder="you@example.com" />
                            <input type="number" class="form-control mb-2" placeholder="Adults..." />
                            <input type="number" class="form-control mb-2" placeholder="Children..." />
                        </div>
                        <div class="col-6">
                            <label class="mt-4">Check-in date:</label>
                            <input type="date" class="form-control" />
                            <label class="mt-4">Check-out date:</label>
                            <input type="date" class="form-control mb-2" />

                        </div>
                        <div class="offset-3 col-5">
                            <input type="submit" value="Reserve" class="btn btn-success btn-lg mr-5" />
                            <input type="reset" value="Delete" class="btn btn-danger btn-lg ml-5" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rating">
    </div>

    <footer class="bg-secondary " style="margin-top:0px; ">
        <div class="row no-gutters ">
            <div class="col-6 mt-5 ">
                <img src="images/icon.png " alt="logo " class="img-fluid ml-2 " width="100 " height="100 " />
                <label class="text-uppercase text-center text-warning h1 " style="opacity:0.7; ">Bosnian Tourist Travel</label>
                <p class="ml-3 text-dark mt-4 " style="max-width:400px; ">Home to medieval villages, rivers and lakes, plus the craggy Dinaric Alps, and many more, explore our Country.</p>
                <p class="ml-3 text-dark mt-3 ">You can see BTT offers by visitting this
                    <a href="tourPlans.php " class="text-warning " style="text-decoration:none; ">LINK.</a>
                </p>
            </div>
            <div class="col-5 mt-5 offset-1 ">
                <h1 class="text-warning mb-5 text-uppercase " style="margin-top:13px !important; opacity:0.7; ">Contact info</h1>
                <ul class="list-group list-group-flush " style="width:500px; border:none; ">
                    <li class="list-group-item text-warning bg-secondary mt-4 ">Address:
                        <span class="ml-5 ">
                            <a href="# " id="map " data-toggle="modal " data-target="#map7 " style="text-decoration:none; ">
                                <i class="fas fa-map-marker mr-2 "></i>Grada Bakua 11, Sarajevo, B&H</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning bg-secondary ">Phone:
                        <span style="margin-left:60px; ">
                            <a href="tel:+38761091675 " class="text-warning " style="text-decoration:none; ">
                                <i class="fas fa-phone mr-2 "></i>(+387)61 091 675</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning bg-secondary ">E-mail:
                        <span style="margin-left:60px; ">
                            <a href="mailto:abdulrahman.almonajed@gmail.com " style="text-decoration:none; " class="text-warning ">
                                <i class="far fa-envelope mr-2 "></i>abdulrahman.almonajed@gmail.com</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning bg-secondary ">
                        Visit us on:
                        <a href="https://www.instagram.com/bosniant/ " target="_blank " class="text-warning " style="margin-left:32px
            !important; text-decoration:none; ">
                            <i class="fab fa-instagram mr-2 " aria-hidden="true "></i>Instagram</a>
                        <a href="https://www.facebook.com " target="_blank " class="text-warning ml-4 " style="text-decoration:none; ">
                            <i class="fab fa-facebook mr-2 " aria-hidden="true "></i>Facebook</a>
                    </li>
                    <li class="list-group-item text-warning bg-secondary "></li>
                </ul>
            </div>
            <div class="col-12 text-center text-dark mt-3 ">
                <p style="font-size:20px; ">&copy; 2018 Abu</p>
            </div>
        </div>
    </footer>




    <div class="modal fade " id="map7 " tabindex="-1 " role="dialog " aria-labelledby="modalTitle " aria-hidden="true ">
        <div class="modal-dialog modal-lg " role="document ">
            <div class="modal-content ">
                <button type="button " class="close " data-dismiss="modal " aria-label="Close " style="float:right; ">
                    <span aria-hidden="true " style="float:right;margin-right:15px;margin-top:5px; ">
                        <i class="fas fa-times "></i>
                    </span>
                </button>
                <div class="modal-body ">
                    <div class="col-12 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.2453302725744!2d18.349382815303517!3d43.830010879115655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c990fdf0ccc5%3A0xdab20818f84ffaf7!2sGrada+Bakua%2C+Sarajevo+71000!5e0!3m2!1sen!2sba!4v1520858418062 "
                            width="700 " height="450 " frameborder="0 " style="border:0 " allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
