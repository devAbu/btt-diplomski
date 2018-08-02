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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

    <nav class="navbar bg-warning navbar-light  navbar-expand-md fixed-top" style="opacity:0.7; font-size:18px;">
        <a href="index.php" class="navbar-brand"><img src="images/icon.png" alt="logo" class="img-fluid mr-3" width="45" height="45" /><span class="h4">BTT</span></a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navScrollspy">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.php" class="nav-link"><i class="fas fa-users mr-2"></i>About Us</a>
                </li>
                <li class="nav-item">
                    <a href="tourPlans.php" class="nav-link"><i class="fas fa-suitcase mr-2"></i>Tour plans</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-calendar-alt mr-2"></i>Reservation</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="hotel.php"><i class="fas fa-bed mr-2"></i>Hotel</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="apartment.php"><i class="far fa-building mr-2"></i>Apartment</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="rent.php" class="nav-link"><i class="fas fa-car mr-2"></i>Rent-a-car</a>
                </li>
                <li class="nav-item">
                    <a href="feedback.php" class="nav-link"><i class="far fa-smile mr-2"></i>Feedback</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="bg">
        <div class="offset-lg-4 ">
            <div class="card" style="width: 22rem; margin-top:-30px;background:none !important; border:none;">
                <div class="card-body text-center">
                    <img class="card-img-top" src="images/icon.png" style="width:90px !important; margin-top:150px !important; margin-left:100px !important;" height="80" alt="Card image cap">
                    <h3 class="card-title text-uppercase text-warning" style="margin-left:100px !important;">Create free account</h3>
                </div>
                <ul class="list-group list-group-flush" style="margin-top:-20px;">
                    <li class="list-group-item bg-info" style="background:none !important;">
                        <input type="text" placeholder="First name..." id="firstSign" name="lastSign" class="form-control mb-2" style="width:400px;"  required="">
                    </li>
                    <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                        <input type="text" placeholder="Last name..." id="lastSign" name="lastSign" class="form-control mb-2" style="width:400px;" required="">
                    </li>
                    <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                        <input type="email" placeholder="you@example.com" id="emailSign" name="emailSign" class="form-control " style="width:400px;" required="">
                    </li>
                    <!--<li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                        <input type="password" placeholder="*****" class="form-control" style="max-width:400px;" required="">
                    </li>-->
                </ul>
                <table>
                    <tr>
                        <td><div style="margin-left:18px;"><input type="password" placeholder="*****" class="form-control" style="width:400px !important;" required id="passSign" name="passSign"></div></td>
                        <td>
                            <button type="button" id="eye" name="eye" class="btn btn-outline-warning" style="margin-left:-44px !important;">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                </table>
                <div style="margin-top:-10px;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-info" style="background:none !important;">
                            <a href="login.php" class="badge text-warning" style="text-decoration:none;"><span style="font-size:13px;">Already has account?</span></a>
                        </li>
                    </ul>
                </div>

                <div class="card-body text-center" style="margin-left:100px !important;">
                    <button class="btn btn-warning text-white" id="signButton" name="signButton">Sign up for free<i class="fas fa-user-plus ml-2"></i></button>
                </div>

            </div>
            <div class="alert mt-3 ml-3" id="alert" style="width:400px;"></div>
        </div>
        <div class="text-center text-warning" style="margin-left:-25px !important;">
            <p style="font-size:20px; ">&copy; 2018 Abu</p>
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

</body>
</html>
