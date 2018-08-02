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


    <section id="jumbotron" class="jumbotron4 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Choose the best hotel for your need!</p>
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
                <form action="hotel.php" method="POST" name="form" id="form">
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
            <div class="row">
                <div class="col-12 text-success offset-1 mt-2 mb-5">
                    <i class="fas fa-rss"></i>
                    xx Hotel found
                </div>
                <div class="offset-1 col-3">
                    <h4 class="text-success">Budget:</h4>

                    <input class="w3-check  mr-1" type="checkbox">Up to 99$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 199$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 299$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 399$ per night
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More than 399$ per night
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">No. of stars:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 3 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 4 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 5 stars
                    <br />
                </div>
                <div class=" col-3">
                    <h4 class="text-success">Customer rating:</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 2 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 3 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 4 stars
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 5 stars
                    <br />
                </div>
                <div class=" col-2">
                    <h4 class="text-success">Distance to town (min):</h4>

                    <input class="w3-check mr-1" type="checkbox">Up to 5 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 15 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 30 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Up to 45 min
                    <br />
                    <input class="w3-check mr-1" type="checkbox">More than 45 min
                    <br />
                </div>
                <div class=" col-2 offset-1">
                    <h4 class="text-success">City:</h4>

                    <input class="w3-check mr-1" type="checkbox">Sarajevo
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Konjic
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Mostar
                    <br />
                    <input class="w3-check mr-1" type="checkbox">Jajce
                    <br />
                </div>
            </div>
        </div>
    </section>

    <script>

        var obj, dbParam, xmlhttp,x , txt = "";
        var i = 0;
        var otherPlaces = []
        obj = { "table":"hotel" };
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
        xmlhttp.open("GET", "hotelTitle.php?x=" + dbParam, true);
        xmlhttp.send();
//var value = $('#demo2').val();


        </script>

    <section>
    <?php
require 'connection/connect.php';

if (!empty($_POST)) {
    $where = $_REQUEST['search-loged'];
}
//echo $where;

if (isset($where)) {
    $sql = "SELECT * FROM hotel where title like '%" . trim($where) . "%'";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            /*  echo '
            <div class="card-group mt-5">
            <div class="row"><form action = "userhotel.php" method = "POST">'; */
            while ($row = $result->fetch_assoc()) {

                $session = $_SESSION["email"];
                echo '<form action = "userHotel.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                <a href="# " style="text-decoration:none; ">
                    <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            </a>

            <a href="# " style="text-decoration:none; ">
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            </a>


            <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
                <!-- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li>-->
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>';
                echo '

                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div></form>
            ';

                /* echo '
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" >

            <div class="col-4" class="col">
            <div class="card hotel">
            <img class="card-img-top" src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="Card image cap">

            <div class="card-body">
            <h5 class="card-title">' . $row["title"] . '</h5>
            <p class="card-text">' . $row["description"] . '</p>
            <input type="submit" class="btn btn-warning" value="Select" />
            <span class="ml-5">
            <i class="far fa-star "></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            </span>
            </div>
            <div class="card-footer">
            <small class="text-muted">' . $row["place"] . '</small>
            </div>
            </div>
            </div>

            '; */
            }
            /*  echo ' </form></div>
        </div>
        '; */

        } else {
            echo "<div class='row'><div class='offset-5 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to see and select hotel to reserve!!!</div></div>";
        }
    } else {
        echo '0 results';
    }

} else {

    $sql = "SELECT * FROM hotel";
    $result = $dbc->query($sql);

    $count = $result->num_rows;

    if ($count > 0) {
        if (isset($_SESSION["email"])) {
            /*  echo '
            <div class="card-group mt-5">
            <div class="row"><form action = "userhotel.php" method = "POST">'; */
            while ($row = $result->fetch_assoc()) {
                $session = $_SESSION["email"];
                echo '<form action = "userHotel.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                <a href="# " style="text-decoration:none; ">
                    <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" class="tourPlans " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            </a>

            <a href="# " style="text-decoration:none; ">
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            </a>


            <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
                <!-- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li>-->
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>';
                echo '

                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-warning " value="Select " style="width:100px; " />
                </li>
            </ul>
            </div>
            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div></form>
            ';

                /* echo '
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" >

            <div class="col-4" class="col">
            <div class="card hotel">
            <img class="card-img-top" src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="Card image cap">

            <div class="card-body">
            <h5 class="card-title">' . $row["title"] . '</h5>
            <p class="card-text">' . $row["description"] . '</p>
            <input type="submit" class="btn btn-warning" value="Select" />
            <span class="ml-5">
            <i class="far fa-star "></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            </span>
            </div>
            <div class="card-footer">
            <small class="text-muted">' . $row["place"] . '</small>
            </div>
            </div>
            </div>

            '; */
            }
            /*  echo ' </form></div>
        </div>
        '; */

        } else {
            echo "<div class='row'><div class='offset-5 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to see and select hotel to reserve!!!</div></div>";
        }
    } else {
        echo '0 results';
    }
}
$dbc->close();

?>
    </section>
                 <!--<div class="col-4">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/scc.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Al Shiddi - SCC Hotel</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star "></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                            <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                     </div>
                        <div class="card-footer">
                            <small class="text-muted">Sarajevo - Marijin Dvor</small>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/krone.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Krone Hotel</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Sarajevo - Ilidza</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/europe.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Europe</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Sarajevo - Stari Grad</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/president.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel President</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Sarajevo - Latinska Cuprija</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/radon.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Radon Plaza</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Sarajevo - Nedzarici</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/hollywood.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Hollywood</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Sarajevo - Ilidza</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/hotelKonjic.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Konjic</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Konjic - Garden City</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/konak.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Konak</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Konjic</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/bristolMostar.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Bristol</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Mostar - Centar</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/hotelMostar.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Mostar</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Mostar</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/eden.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Eden</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Mostar</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/plivskoJezero.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Plivsko jezero</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Jajce</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/turist98.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Turist 98</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Jajce</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/han.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Han</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Bjelasnica</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/hotelBjelasnica.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Bjelasnica</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Bjelasnica</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <div class="card hotel">
                        <img class="card-img-top" src="images/hotelLavina.jpg" alt="Card image cap" style="height:289px !important;">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Lavina</h5>
                            <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
                            <input type="button" class="btn btn-warning" value="Select" />
                            <span class="ml-5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
<!--                             <input type="button" class="btn btn-warning" style="float:right;" value="More Details" />
 --S                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Jahorina</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


   <div id="footerInclude"></div>

</body>

</html>