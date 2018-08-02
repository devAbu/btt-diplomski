<?php
session_start();
?>
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

     <script>
        $(function (){
            $('#navbarInclude').load("./template/navbar.php");
            $('#footerInclude').load("./template/footer.php");
        })
    </script>
</head>

<body>

<div id="navbarInclude"></div>


    <section id="jumbotron" class="jumbotron5 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">What we have to offer</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>
<section>
<?php

require 'connection/connect.php';

$sql = "SELECT * FROM bestPlaces";
$result = $dbc->query($sql);

$count = $result->num_rows;

if ($count > 0) {
    echo '<div class="row bg">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-5  mt-3" style="margin-left: 70px;" >
        <a href="#" data-toggle="modal" data-target="#' . $row['ID'] . '">
            <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="' . $row['title'] . '" class="img-fluid best" /></a>
            <h2 class="text-warning text-uppercase text-center">' . $row["title"] . '</h2>
        </div>
        <div class="modal fade" id="' . $row['ID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="' . $row['title'] . '" class="img-fluid" style="width:100%; height:100%;" />
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    echo '</div>';
} else {
    echo " 0 results";

}
$dbc->close();
?>

</section >
    <!-- <div class="row bg">
        <div class="col-5 offset-1 mt-3 ">
            <a href="#" data-toggle="modal" data-target="#image1"><img src="images/konjic.jpg" alt="konjic" class="img-fluid best" /></a>
            <h2 class="text-warning text-uppercase text-center">Konjic</h2>
        </div>
        <div class="modal fade" id="image1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/konjic.jpg" alt="konjic" class="img-fluid" style="width:100%; height:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-3">
            <a href="#" data-toggle="modal" data-target="#image2"><img src="images/jajce.jpg" alt="jajce" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Jajce</h2>
        </div>
        <div class="modal fade" id="image2" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/jajce.jpg" alt="jajce" class="img-fluid" style="height:100% !important; width:100%" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-3">
            <a href="#" data-toggle="modal" data-target="#image3"><img src="images/prokosko.jpg" alt="prokosko jezero" class="img-fluid best" /></a>
            <h2 class="text-warning text-uppercase text-center">Prokosko lake</h2>
        </div>
        <div class="modal fade" id="image3" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/prokosko.jpg" alt="prokosko jezero" class="img-fluid" style="width:100%; height:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-3">
            <a href="#" data-toggle="modal" data-target="#image4"><img src="images/kravice.jpg" alt="Kravice" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Kravice</h2>
        </div>
        <div class="modal fade" id="image4" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/kravice.jpg" alt="Kravice" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-3">
            <a href="#" data-toggle="modal" data-target="#image5"><img src="images/sarajevo2.jpg" alt="Sarajevo" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Sarajevo</h2>
        </div>
        <div class="modal fade" id="image5" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/sarajevo2.jpg" alt="Sarajevo" class="img-fluid" style="height:450px; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-3">
            <a href="#" data-toggle="modal" data-target="#image6"><img src="images/mostar.jpg" alt="Mostar" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Mostar</h2>
        </div>
        <div class="modal fade" id="image6" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/mostar.jpg" alt="Mostar" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-3">
            <a href="#" data-toggle="modal" data-target="#image7"><img src="images/bjelasnica.jpg" alt="Bjelasnica" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Bjelasnica</h2>
        </div>
        <div class="modal fade" id="image7" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/bjelasnica.jpg" alt="Bjelasnica" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-3">
            <a href="#" data-toggle="modal" data-target="#image8"><img src="images/sebilj.jpg" alt="Sebilj" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Sebilj</h2>
        </div>
        <div class="modal fade" id="image8" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/sebilj.jpg" alt="Sebilj" class="img-fluid" style="height:100%; width:100%" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-3">
            <a href="#" data-toggle="modal" data-target="#image9"><img src="images/skakavac.jpg" alt="Skakavac" class="img-fluid best" style="height:367px !important; width:551px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Skakavac</h2>
        </div>
        <div class="modal fade" id="image9" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/skakavac.jpg" alt="Skakavac" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-3">
            <a href="#" data-toggle="modal" data-target="#image10"><img src="images/drinaMost.jpg" alt="Visegrad" class="img-fluid best" style="height:367px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Visegrad</h2>
        </div>
        <div class="modal fade" id="image10" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/drinaMost.jpg" alt="Visegrad" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 offset-1 mt-3">
            <a href="#" data-toggle="modal" data-target="#image11"><img src="images/vreloBosne.jpg" alt="Vrelo Bosne" class="img-fluid best" style="height:367px !important; width:551px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Vrelo Bosne</h2>
        </div>
        <div class="modal fade" id="image11" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/vreloBosne.jpg" alt="Vrelo Bosne" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 mt-3">
            <a href="#" data-toggle="modal" data-target="#image12"><img src="images/Jahorina.jpg" alt="Jahorina" class="img-fluid best" style="height:367px !important; width:551px !important;" /></a>
            <h2 class="text-warning text-uppercase text-center">Jahorina</h2>
        </div>
        <div class="modal fade" id="image12" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/Jahorina.jpg" alt="Jahorina" class="img-fluid" style="height:100%; width:100%;" />
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="footerInclude"></div>
</body>
</html>