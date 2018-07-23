<?php
session_start();
?>
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
                <?php
if (isset($_SESSION['email'])) {
    $session = $_SESSION['email'];
    echo '<li class="nav-item">
                    <a href="myCart.php" class="nav-link link">
                        <i class="fa fa-shopping-cart mr-2"></i>Cart</a>
                </li>';
}
?>
            </ul>
            <?php
if (isset($_SESSION['email'])) {
    $session = $_SESSION['email'];
    echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='logout'  class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Logout</span></a></li></ul><input type='text'  value='$session' hidden id='session' name='session'>";
} else {
    echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='#' data-toggle='modal' data-target='#SignModal' class='nav-link link'><span class='navLinks'><i class='fa fa-user-plus mr-2'></i>Register</span></a></li><li class='nav-item'><a href='#' data-toggle='modal' data-target='#LoginModal' class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Login</span></a></li></ul>";
}
?>
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
    } else {
        $.ajax({
            url: "./indexSent.php?task=register&firstSign=" + firstSign + "&lastSign=" + lastSign + "&emailSign=" + emailSign + "&passSign=" + passSign,
            success: function (data) {
                if (data.indexOf('sent') > -1) {
                    $("#alert").addClass('alert-success');
                    $("#alert").html('Your account created successfully. Now you can login with your information');
                    $("#alert").slideDown(500).delay(2000).slideUp(500);
                    $('#firstSign').val("");
                    $('#lastSign').val("");
                    $('#emailSign').val("");
                    $('#passSign').val("");
                } else {
                    $("#alert").addClass('alert-danger');
                    $("#alert").html('The email is already exists.');
                    $("#alert").slideDown(500).delay(1000).slideUp(500);
                }
            },
            error: function (data, err) {
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
                            <a href="forgotPass.php" class="badge ml-4 text-primary">
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
            url: "./indexSentLog.php?task=login&emailLog=" + emailLog + "&passLog=" + passLog,
            success: function (data) {
                if (data.indexOf('sent') > -1) {
                    $("#alertLog").addClass('alert-success');
                    $("#alertLog").html('Logged in successfully');
                    $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                    $('#emailLog').val("");
                    $('#passLog').val("");
                    var delay = 1500;
                    setTimeout(function () {
                        window.location = "index.php";
                    }, delay);
                } else if (data.indexOf('pass') > -1) {
                    $("#alertLog").addClass('alert-danger');
                    $("#alertLog").html('Password is incorrect');
                    $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                } else if (data.indexOf('mail') > -1) {
                    $("#alertLog").addClass('alert-danger');
                    $("#alertLog").html('Email is incorrect3');
                    $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                } else {
                    $("#alertLog").addClass('alert-danger');
                    $("#alertLog").html('There is some problem.');
                    $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                }
            },
            error: function (data, err) {
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