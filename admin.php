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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
              <div class="col-md-6 market-update-gd">
                <div class="market-update-block clr-block-1">
                  <div class="row">
                    <div class="col-md-8 market-update-left">
                      <?php
                          $sql = "SELECT * FROM registacija ";
                          $result = $dbc->query($sql);

                          $count = $result->num_rows;
                          echo '<h3>'.$count.'</h3> ';
                        ?>
                      <h4>Registered Users</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                      <i class="fa fa-5x fa-users" style="color:white"></i>
                    </div>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
              <div class="col-md-6 market-update-gd">
                <div class="market-update-block clr-block-2">
                  <div class="row">
                    <div class="col-md-8 market-update-left">
                      <?php
                          $sql = "SELECT * FROM tourplan ";
                          $result = $dbc->query($sql);

                          $count = $result->num_rows;
                          echo '<h3>'.$count.'</h3> ';
                        ?>
                      <h4>Tours</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                      <i class="fa fa-5x fa-suitcase" style="color:white"></i>
                    </div>
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <!--TODO: vidjet da se uradi update ture-->


            <div class="clearfix"> </div>
            <div style="margin-top: 20px; margin-left:45%">
              <button class="btn btn-lg btn-success" style="margin-bottom: 20px;" data-toggle="modal" data-target="#formModal">Add new</button>
            </div>

<?php
            $sql = "SELECT * FROM tourplan ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;

            if ($count > 0) {
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        echo '<form action = "deleteTourAdmin.php" method = "POST"><div class="card text-center mt-4 ">
                    <div class="card-header text-success h3 text-uppercase ">' .
                        $row["type"] . '
                    </div>
                    <input type="text" value=" ' . $row["ID"] . ' "  name="idnum" id="idnum" hidden>
                    <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
                    <div class="card-body ">
                        <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>

                            <img src=" ' . $row["img"] . '" class="tourPlans " alt="skijanje " width="400 " height="250
                    " style="float:left; " />



                        <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>


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
                                <span class="ml-3 ">Availability: ' . $row["available"] . '</span>
                            </p>
                        </li>
                        <li class="list-group-item text-warning ">
                            <p class="card-text " style="float:left; ">
                                <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                        </li>
                    </ul>

                    <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">';
                        echo '
                        <input type="number" value="' . $i . '" id="test" hidden>
                        <li class="list-group-item " style="border:none">
                            <input type="button" name="update" id="update" class="btn btn-warning " value="Update " style="width:100px; " />
                        </li>
                        <li class="list-group-item " style="border:none">
                            <input type="submit" name="remove" id="remove" class="btn btn-danger " value="Remove " style="width:100px; " />
                        </li>
                    </ul>
                    </div>
                    <div class="card-footer text-muted ">
                        <small class="text-muted ">
                            <i class="far fa-clock mr-2 "></i> ' . $row["days"] . '</small>
                    </div>
                    </div></form>
                    ';
                        $i++;

                    }

                }
                ?>

          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade"  id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Adding new tour....</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
              </div>
              <div class="modal-body">
                <form>
                              <div class="offset-md-3">
                                <div class="row">
                                  <div class="col-12">
                                    <input type="text" placeholder="Tour type..." class="form-control" style="width: 350px" required id="tourType" name="tourType">
                                    <br>
                                    <input type="text" placeholder="Tour title..." class="form-control" style="width: 350px" id="tourTitle" name="tourTitle"  required>
                                    <br>
                                    <input type="text" placeholder="Tour description..." class="form-control" style="width: 350px" id="tourDescription" name="tourDescription" required>
                                    <br>
                                    <input type="text" placeholder="Max people..." class="form-control" style="width: 350px" id="people" name="people" required>
                                    <br>
                                    <input type="text" placeholder="Tour available..." class="form-control" style="width: 350px" id="tourAvailable" name="tourAvailable" required>
                                    <br>
                                    <input type="text" placeholder="Tour price..." class="form-control" style="width: 350px" id="tourPrice" name="tourPrice" required>
                                    <br>
                                    <input type="text" placeholder="Tour length in days..." class="form-control" style="width: 350px" id="tourDays" name="tourDays" required>
                                    <br>
                                    <input type="text" placeholder="Tour image (link)..." class="form-control" style="width: 350px" id="tourImage" name="tourImage" required>
                                    <br>
                                    <input type="button" value="Add" class="btn btn-success mb-2"  id="add">
                                    <div class="alert " id="alert" style="width: 350px" ></div>
                                  </div>
                                </div>
                              </div>
                          </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <script>
              $('#alert').fadeOut();
              $('#add').click(function () {
                console.log('juhu');
                  $("#alert").removeClass('alert-success').removeClass('alert-danger');
                  var tourType = $('#tourType').val();
                  var tourTitle = $('#tourTitle').val();
                  var tourDescription = $('#tourDescription').val();
                  var people = $('#people').val();
                  var tourAvailable = $('#tourAvailable').val();
                  var tourPrice = $('#tourPrice').val();
                  var tourDays = $('#tourDays').val();
                  var tourImage = $('#tourImage').val();

                  if (tourType == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour type is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  } else if (tourTitle == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour title is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  } else if (tourDescription == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour Description is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  } else if (people == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Number of people is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  } else if (tourAvailable == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour available period is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  }  else if (tourPrice == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour price is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  }   else if (tourDays == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour length is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  }  else if (tourImage == "") {
                      $("#alert").addClass('alert-danger');
                      $("#alert").html("Tour image is required!!!");
                      $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                  }  else {
                       $.ajax({
                           url: "addTour.php?task=add&tourType=" + tourType + "&tourTitle=" + tourTitle + "&tourDescription=" + tourDescription + "&people=" + people+ "&tourAvailable=" + tourAvailable + "&tourPrice=" + tourPrice + "&tourDays=" + tourDays + "&tourImage=" + tourImage,
                           success: function (data) {
                               if (data.indexOf('add') > -1) {
                                   $("#alert").addClass('alert-success');
                                   $("#alert").html('Tour added successfully');
                                   $("#alert").slideDown(500).delay(2000).slideUp(500);
                                   $('#tourType').val("");
                                   $('#tourTitle').val("");
                                   $('#tourDescription').val("");
                                   $('#people').val("");
                                   $('#tourAvailable').val("");
                                   $('#tourPrice').val("");
                                   $('#tourDays').val("");
                                   $('#tourImage').val("");
               } else {
                                   $("#alert").addClass('alert-danger');
                                   $("#alert").html('There are some problem.');
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
        </script>



        <div class="copyrights">
          <p>© 2018 ABU </p>
        </div>

      </div>
    </div>
    <div class="sidebar-menu">
      <div class="menu">
        <ul id="menu">
          <li id="menu-home" ><a href="admin.php"><i class="fas fa-suitcase mr-2 fa-lg" style="color:gold;"></i><span style="color:gold;">Tours</span></a></li>
          <li id="menu-home"><a href="cars.php"><i class="fas fa-car fa-lg mr-2"></i><span>Cars</span></a></li>
          <li id="menu-home"><a href="hotels.php"><i class="fas fa-hotel mr-2 fa-lg "></i><span>Hotel</span></a></li>
          <li id="menu-home"><a href="apartments.php"><i class="far fa-building fa-lg mr-2"></i><span>Apartments</span></a></li>
          <li id="menu-home"><a href="feedbacks.php"><i class="far fa-smile fa-lg mr-2"></i><span>Feedbacks</span></a></li>
          <li id="menu-home"><a href="requestedTour.php"><i class="fas fa-diagnoses mr-2"></i><span>Requested tour</span></a></li>
          <li id="menu-home"><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg mr-2"></i><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>

</body>

</html>
