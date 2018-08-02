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

    <section id="jumbotronFeedback" class="jumbotron2 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:26px;">We want your feedback</p>
            <p class="text-primary h5 mb-3">Also, you can leave your feedback on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section>
    <?php
if (isset($_SESSION["email"])) {
    echo '
        <h2 class="display-4 text-center text-info mb-5 mt-4">Be free to contact us, we are here to please you.</h2>
        <p class="text-center h2 text-primary mb-5">Tell us what you think!</p>
        <div class="col-9 offset-3">
            <textarea cols="50" rows="10" class="form-control" style="max-width:550px;margin-left:50px;" placeholder="Please write your opinion..." id="feedback" name="feedback"></textarea>
        </div>
        <div class="col-lg-6 offset-5 ">
            <input type="button" id="feedbackButton" name="feedbackButton" class="btn btn-lg btn-outline-success mt-3 ml-5 mb-2" value="SEND" />
        </div>
        <div class="alert mt-3" id="alertFeedback"></div>';
} else {
    echo "<div class='row'><div class='offset-5 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to be able to leave feedback!!!</div></div>";
}
?>
    </section>

    <script>
        $('#alertFeedback').slideUp();
        $('#feedbackButton').click(function(){
            $('#alertFeedback').removeClass('alert-danger').removeClass('alert-success');
            var feedback = $('#feedback').val();
            var session = $('#session').val();
            if(feedback == "") {
                $("#alertFeedback").addClass('alert-danger');
                $("#alertFeedback").html("Please write your opinion!!!");
                $("#alertFeedback").fadeIn(500).delay(1000).fadeOut(500);
            }else {
                $.ajax({
                    url: "dbSend/feedbackSend?task=feedback&feedback="+feedback+"&session="+session,
                    success: function (data) {
                        if(data == 'sent') {
                            $("#alertFeedback").addClass('alert-success');
							$("#alertFeedback").html('Thanks for your feedback.');
							$("#alertFeedback").slideDown(500).delay(1000).slideUp(500);
                            $('#feedback').val("");
                        }else {
                            $("#alertFeedback").addClass('alert-danger');
							$("#alertFeedback").html('There is some problem. Please try later');
							$("#alertFeedback").slideDown(500).delay(1000).slideUp(500);
                        }
                    },
                    error: function (data, err) {
                        $("#alertFeedback").addClass('alert-danger');
							$("#alertFeedback").html('Some problem occured. We are sorry.');
							$("#alertFeedback").slideDown(500).delay(1000).slideUp(500);
                    }
                });
             
            }
        });
    </script>

    <div id="footerInclude"></div>

</body>
</html>