<!-- TODO: admin moze confirmat turu...ako je confirma sacuva se u bazi i kod admina sa opcijom / button da je publishuje (prvo se otvori modal / popup da se popune odredjene inf za turu) -->
<!DOCTYPE HTML>
<html>
<head>
  <title>BTT Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/ico" href="images/icon.ico" />
  <meta name="author" content="abu">
  <meta name="keywords" content="btt, bosnian, tourist, travel, agency, arabic, bosna">
  <meta name="description" content="BTT - Bosnian Toursit Travel offers the best tour plans and the best hotels in B&H. ">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUC+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

  <?php
    require '/connection/connect.php';
?>

  <div class="page-container">
    <div class="left-content">
      <div class="mother-grid-inner">
        <div class="header-main">
          <div class="header-left">
            <div class="logo-name">
              <a href="admin.php">
                <h1>BTT</h1>
              </a>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="inner-block">
          <div class="market-updates">
            <div class="row">

              <div class="col-12 market-update-gd">
                <div class="market-update-block clr-block-2">
                  <div class="row">
                    <div class="col-md-8 market-update-left">
                      <?php
                          $sql = "SELECT * FROM tourrequest ";
                          $result = $dbc->query($sql);

                          $count = $result->num_rows;
                          echo '<h3>'.$count.'</h3> ';
                        ?>
                      <h4>Requested tour</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                      <i class="fas fa-diagnoses fa-5x" style="color:white"></i>
                    </div>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>

            <?php
                        $sql = "SELECT * FROM tourrequest ";
                        $result = $dbc->query($sql);

                        $count = $result->num_rows;

                        if ($count > 0) {
                                $i = 0;
                                while ($row = $result->fetch_assoc()) {
                                    echo '<form action = "deleteTourAdmin.php" method = "POST"><div class="card text-center mt-4 ">
                                <div class="card-header text-success h3 text-uppercase ">' .
                                    $row["period"] . '
                                </div>
                                <input type="text" value=" ' . $row["id"] . ' "  name="idnum" id="idnum" hidden>
                                <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
                                <div class="card-body ">
                                  <h6 class="card-title text-left ml-5 text-primary "> ' . $row["name"] . '</h5>


                                    <label class="card-text text-success" style="max-width:800px; "> City: ' . $row["city"] . '</label>


                                <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                                    <li class="list-group-item text-warning mt-4 " style="border:none; ">
                                        <p class="card-text " style="float:left; ">
                                            <i class="fas fa-users "></i>
                                            <span class="ml-2 ">People: ' . $row["people"] . '</span>
                                        </p>
                                    </li>
                                    <li class="list-group-item text-warning ">
                                        <p class="card-text " style="float:left; ">
                                            <i class="fas fa-calendar-alt "></i>
                                            <span class="ml-3 ">Interpreter: ' . $row["interpreter"] . '</span>
                                        </p>
                                    </li>
                                    <li class="list-group-item text-warning ">
                                        <p class="card-text " style="float:left; ">
                                            <i class="fas fa-euro-sign mr-4 "></i> Price: ' . $row["price"] . '</p>
                                    </li>
                                </ul>

                                <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">';
                                    echo '
                                    <input type="number" value="' . $i . '" id="test" hidden>
                                    <li class="list-group-item " style="border:none">
                                        <input type="submit" name="confirm" id="confirm" class="btn btn-success " value="Confirm " style="width:100px; " />
                                    </li>
                                </ul>
                                </div>
                                <div class="card-footer text-muted ">
                                    <small class="text-muted ">
                                        <i class="far fa-clock mr-2 "></i> ' . $row["length"] . '</small>
                                </div>
                                </div></form>
                                ';
                                    $i++;

                                }

                            }
                            ?>

                      </div>
                    </div>

        <div class="copyrights">
          <p>© 2018 ABU </p>
        </div>

      </div>
    </div>
    <div class="sidebar-menu">
      <div class="menu">
        <ul id="menu">
          <li id="menu-home" ><a href="admin.php"><i class="fas fa-suitcase mr-2 fa-lg" ></i><span >Tours</span></a></li>
          <li id="menu-home"><a href="cars.php"><i class="fas fa-car fa-lg mr-2"></i><span>Cars</span></a></li>
          <li id="menu-home"><a href="hotels.php"><i class="fas fa-hotel mr-2 fa-lg "></i><span>Hotel</span></a></li>
          <li id="menu-home"><a href="apartments.php"><i class="far fa-building fa-lg mr-2"></i><span>Apartments</span></a></li>
          <li id="menu-home"><a href="feedbacks.php"><i class="far fa-smile fa-lg mr-2" ></i><span >Feedbacks</span></a></li>
          <li id="menu-home"><a href="requestedTour.php"><i class="fas fa-diagnoses mr-2" style="color:gold;"></i><span style="color:gold;">Requested tour</span></a></li>
          <li id="menu-home"><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg mr-2"></i><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>

</body>

</html>
