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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"> -->
  <link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/font-awesome.css" rel="stylesheet">
</head>

<body>
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
                      <h3>83</h3>
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
                      <h3>135</h3>
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


            <div class="clearfix"> </div>
            <div style="margin-top: 20px; margin-left:45%">
              <button class="btn btn-lg btn-success" style="margin-bottom: 20px;" data-toggle="modal" data-target="#formModal">Add new</button>
            </div>
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
                                    <input type="text" placeholder="Tour name..." class="form-control" style="width: 350px" required id="tourName" name="tourName">
                                    <br>
                                    <input type="text" placeholder="Tour city..." class="form-control" style="width: 350px" id="tourCity" name="tourCity"  required>
                                    <br>
                                    <input type="text" placeholder="Tour description..." class="form-control" style="width: 350px" id="tourDescription" name="tourDescription" required>
                                    <br>
                                    <input type="text" placeholder="Tour image..." class="form-control" style="width: 350px" id="tourImage" name="tourImage" required>
                                    <br>
                                    <input type="button" value="Add" class="btn btn-success" >
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

        <div class="copyrights">
          <p>© 2018 ABU </p>
        </div>

      </div>
    </div>
    <div class="sidebar-menu">
      <div class="menu">
        <ul id="menu">
          <li id="menu-home"><a href="logout.php"><i class="fa fa-lg fa-sign-out"></i><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>

</body>

</html>
