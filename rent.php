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
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

     <script>
        $(function (){
            $('#navbarInclude').load("./template/navbar.php");
            $('#footerInclude').load("./template/footer.php");
        })
    </script>
</head>

<body>

   <div id="navbarInclude"></div>

    <section id="jumbotron" class="jumbotron6 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Rent the best car for you and your family!</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section>
        <div class="row no-gutters">
            <div class="col-5 offset-2">
                <form action="rent.php" method="POST" name="form" id="form">
                    <input id="search-loged" name="search-loged" type="text" class="form-control mt-2" placeholder="Search...">
                </form>
            </div>
            <div class="col-2">
                <button id="filters" class="btn btn-success my-2  ml-4" style="width:200px;" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-sliders-h mr-2" data-fa-transform="rotate-90"></i>
                    Filters
                </button>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="row ">
                <div class="col-12 text-success offset-1 mt-2 mb-5">
                    <i class="fas fa-rss"></i>
                    xx Cars found
                </div>
                <div class="offset-1 col-3">
                    <h4 class="text-success">Car type:</h4>

                    <input class="w3-check  mr-1" type="checkbox">BMW
                    <br />
                    <input class="w3-check mr-1" type="checkbox">AUDI
                    <br />
                    <input class="w3-check mr-1" type="checkbox">MERCEDES
                    <br />
                    <input class="w3-check mr-1" type="checkbox">VOLKSWAGEN
                    <br />
                    <input class="w3-check mr-1" type="checkbox">FORD
                    <br />
                </div>
                <div class=" col-3">
                    <h4 class="text-success">No. of people:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 5 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 8 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 10 people
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More then 10 people
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">Budget:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 500$
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 800
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 1200
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 1500
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2000
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More then 1500
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">Model Year:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2010
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2014
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2015
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 2017
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Newe than 2017
                    <br />
                </div>
                <div class="offset-1 col-3">
                    <h4 class="text-success">Vehicle type:</h4>

                    <input class="w3-check  mr-1" type="checkbox">Car
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Van
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Jeep
                    <br />
                </div>
            </div>
        </div>
    </section>

     <script>

        var obj, dbParam, xmlhttp,x , txt = "";
        var i = 0;
        var otherPlaces = []
        obj = { "table":"cars" };
        dbParam = JSON.stringify(obj);
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("demo").innerHTML = "All data: " + this.responseText;
                var myObj = JSON.parse(this.responseText);
                for (x in myObj) {
                    txt += myObj[x].title +" ";
                    i++;
                    otherPlaces.push(myObj[x].title)
                    otherPlaces.push(myObj[x].type)
                }
                console.log(otherPlaces)
                console.log(i)

                $("#search-loged").autocomplete({
                    source: otherPlaces,
                    select: function(event, ui){
                        var search = $('#search-loged').val()
                        console.log(search);
                        $('#form').submit();
                    }
                });
            }
        }
        xmlhttp.open("GET", "title/carAndTourTitle.php?x=" + dbParam, true);
        xmlhttp.send();
//var value = $('#demo2').val();


        </script>

    <section>

<?php

require 'connection/connect.php';

if (!empty($_POST)) {
    $where = $_REQUEST['search-loged'];
}

if (isset($where)) {
    $sql = "SELECT * FROM cars where title like '$where' or type like '$where'  ";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            while ($row = $result->fetch_assoc()) {
                $session = $_SESSION["email"];
                echo '<form action = "userCar.php"><div class="card text-center mt-4 ">
            <div class="card-header text-success h3 text-uppercase ">' .
                $row["title"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>
                <a href="# " style="text-decoration:none; ">
                    <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            </a>

            <a href="# " style="text-decoration:none; ">
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            </a>

            <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-users "></i>
                        <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                </li>
            </ul>

            <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
                <!-- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li> -->
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>
                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            </div></form>
            ';

            }

        } else {
            echo "<div class='row'><div class='offset-5 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to see and select car for rent!!!</div></div>";
        }

    } else {
        echo " 0 results";

    }
} else {

    $sql = "SELECT * FROM cars";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            while ($row = $result->fetch_assoc()) {
                $session = $_SESSION["email"];
                echo '<form action = "userCar.php"><div class="card text-center mt-4 ">
            <div class="card-header text-success h3 text-uppercase ">' .
                $row["title"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>
                <a href="# " style="text-decoration:none; ">
                    <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            </a>

            <a href="# " style="text-decoration:none; ">
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            </a>

            <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-users "></i>
                        <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                </li>
            </ul>

            <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
                <!-- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li> -->
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>
                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            </div></form>
            ';

            }

        } else {
            echo "<div class='row'><div class='offset-5 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to see and select car for rent!!!</div></div>";
        }

    } else {
        echo " 0 results";

    }
}
$dbc->close();
?>

</section>

    <!-- <section>
        <div class="card text-center mt-3">
            <div class="card-header text-success h3 text-uppercase">
                AUDI
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">AUDI A6</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/audia62016.jpg" class="tourPlans" alt="audi a6" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 5</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2016</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>80 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;  margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                MERCEDES
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">MERCEDES S Class</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/mercedesS2018.jpg" class="tourPlans" alt="mercedes" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 6</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2018</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>150 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                BMW
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">BMW 7</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/bmw72015.jpg" class="tourPlans" alt="bmw7" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 6</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2015</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>69 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                Ford
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">Ford Focus</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/focus2017.jpg" class="tourPlans" alt="bmw7" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 5</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2017</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>69 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                volkswagen
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">VOLKSWAGEN TOUAREG</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/touareg2014.jpg" class="tourPlans" alt="bmw7" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 6</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2014</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>69 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                BMW
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">BMW X6</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/bmwX62017.jpg" class="tourPlans" alt="bmw7" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 2 to 6</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2017</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>69 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                Mercedes
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">Mercedes V Class</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/vanV.jpg" class="tourPlans" alt="bmw7" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 5 to 11</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2017</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>69 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="card text-center mt-2">
            <div class="card-header text-success h3 text-uppercase">
                Mercedes
            </div>
            <div class="card-body">
                <h5 class="card-title text-left ml-5 h1 text-primary">Mercedes Vito</h5>
                <a href="#" style="text-decoration:none;">
                    <img src="images/vito2015.jpg" class="tourPlans" alt="bmw7" width="400" height="250" style="float:left;" />
                </a>
                <a href="#" style="text-decoration:none;">
                    <label class="card-text" style="max-width:800px;">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</label>
                </a>

                <ul class="list-group list-group-flush" style="width:390px; border:none;">
                    <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-users"></i>
                            <span class="ml-2">Max People: From 5 to 10</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning ">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ml-3">Model Year: 2015</span>
                        </p>
                    </li>
                    <li class="list-group-item text-warning">
                        <p class="card-text" style="float:left;">
                            <i class="fas fa-euro-sign mr-4"></i>69 per day</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush mr-5" style=" border:none;float:right;margin-top:-100px;">
                    <!-- <li class="list-group-item text-warning mt-4" style="border:none;">
                        <p class="card-text"></p>
                        <input type="button" class="btn btn-warning" value="More Detalis" />
                    </li> --
                    <li class="list-group-item text-warning " style="border:none;">
                        <p class="card-text">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <input type="button" class="btn btn-warning" value="Select" style="width:100px;" />
                    </li>
                </ul>
            </div>
        </div>
    </section> -->

    <div id="footerInclude"></div>
</body>

</html>