<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>BTT</title>
    <link rel="icon" type="image/ico" href="images/icon.ico" />
    <meta name="author" content="AAo">
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
        <a href="index" class="navbar-brand"><img src="images/icon.png" alt="logo" class="img-fluid mr-3" width="45" height="45" /><span class="h4">BTT</span></a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navScrollspy">
                <li class="nav-item">
                    <a href="index" class="nav-link"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs" class="nav-link"><i class="fas fa-users mr-2"></i>About Us</a>
                </li>
                <li class="nav-item">
                    <a href="tourPlans" class="nav-link"><i class="fas fa-suitcase mr-2"></i>Tour plans</a>
                </li>

                <li class="nav-item">
                    <a href="feedback" class="nav-link"><i class="far fa-smile mr-2"></i>Feedback</a>
                </li>
            </ul>
        </div>
    </nav>

            <div id="bg">
                <div class="offset-4">
                    <div class="card" style="width: 22rem; margin-top:-15px;background:none !important; border:none;">
                        <div class="card-body text-center">
                            <img class="card-img-top mb-3" src="images/icon.png" style="width:90px !important; margin-top:150px !important;" height="80" alt="Card image cap">
                            <h3 class="card-title text-uppercase text-warning">CHANGE PASSWORD</h3>
                        </div>
                        <ul class="list-group list-group-flush" style="margin-top:-20px;">
                            <li class="list-group-item bg-info" style="background:none !important;">
                                <input type="email" placeholder="you@example.com" class="form-control mb-2" style="width:350px !important;" id="emailLog" name="emailLog" required>
                            </li>
                        </ul>
                        <table>
                            <tr>
                                <td><div style="margin-left:20px;"><input type="password" placeholder="*****" class="form-control" style="width:350px !important;" required id="passLog" name="passLog"></div></td>
                                <td>
                                    <button type="button" id="eyeLog" name="eyeLog" class="btn btn-outline-warning" style="margin-left:-44px !important;">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <div class="row no-gutters">
                            <!--
                                <div class="col-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-info" style="background:none !important;">
                                            <button type="button" class="btn btn-outline-warning">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            -->
                        </div>
                        <div class="card-body text-center">
                            <button class="btn btn-warning text-white" id="logButton" name="logButton">CHANGE PASSWORD<i class="fas fa-sign-in-alt ml-2"></i></button>
                        </div>
                    </div>
                    <div class="alert mt-3 ml-3" id="alertLog" style="width:350px;"></div>
                </div>
                <div class="text-center text-warning" style="margin-left:-100px;">
                    <p style="font-size:20px;">&copy; 2018 AAO</p>
                </div>
            </div>

            <script src="password/forgotPass.js"></script>


</body>
</html>
