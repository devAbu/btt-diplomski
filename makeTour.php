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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

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


    <section id="jumbotron" class="jumbotron8 jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead">Visit Bosnia & Herzegovina with us!</p>
            <p class="lead">The best offers and price!</p>
            <p class="text-primary h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section>
     <?php
if (isset($_SESSION["email"])) {
    echo '<div class="row">
            <div class="offset-1 col-3">
                <h4 class="text-success">City:</h4>

                <input class="w3-check mr-1" id="sarajevo" onclick="price()" name="sarajevo" type="checkbox">Sarjevo
                <input class="w3-check mr-1" id="mostar" name="mostar" onclick="price()" type="checkbox">Mostar
                <input class="w3-check mr-1" id="jajce" name="jajce" onclick="price()" type="checkbox">Jajce
                <input class="w3-check mr-1" id="konjic" name="konjic" onclick="price()" type="checkbox">Konjic
                <br />
                <input class="w3-check  mr-1 mt-1" id="bjelasnica" name="bjelasnica" onclick="price()" type="checkbox">Bjelasnica
                <input class="w3-check mr-1" id="trebevic" name="trebevic" onclick="price()" type="checkbox">Trebevic
                <input class="w3-check mr-1" id="igman" name="igman" onclick="price()" type="checkbox">Igman
                <br />
                <input class="w3-check mr-1 mt-1" id="jahorina" onclick="price()" name="jahorina" type="checkbox">Jahorina
                <br />
                <input type="text" class="form-control mt-2" id="other" onchange="price()" name="other" placeholder="Other..." />
                <!-- title="For multiple places please use ', '" -->
            </div>
            <div class="col-3 mr-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-success">Budget:</h4>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="number" id="budget" onchange="price()" name="budget" value="0" min="0" step="10"  max="8999" class="form-control currency"
                            />
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="text-success">No. of people:</h4>

                        <input type="number" id="people" onchange="price()" name="people" value="0" min="0" step="1" max="15" class="form-control"
                        />
                    </div>
                </div>
            </div>
            <div class="col-3 ml-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-success">Price:</h4>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="number" value="0" id="price" name="price" readonly data-number-to-fixed="2" style="height:50px;" class="form-control currency"
                            />
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <button class="btn btn-lg btn-success" style="width: 315px;" id="send" name="send"> Send request</button>
                    </div>
                </div>
            </div>
            <div class="col-3 offset-1 mt-4 mb-3">
                <h4 class="text-success">Tour Length (days):</h4>

                <input type="number" id="length"  name="length" value="0" min="0" max="10" step="1" class="form-control"
                />
            </div>
            <div class=" col-3 mt-4">
                <h4 class="text-success">Period:</h4>

                <input class="w3-check  mr-1" id="zima" onclick="price()" name="zima" type="checkbox">Zima
                <input class="w3-check mr-1" id="ljeto" onclick="price()" name="ljeto" type="checkbox">Ljeto
                <input class="w3-check mr-1" id="proljece" onclick="price()" name="proljece" type="checkbox">Proljece
                <input class="w3-check mr-1" id="jesen" onclick="price()" name="jesen" type="checkbox">Jesen
                <br />
            </div>
            <div class="col-3 offset-1 mt-4">
                <h4 class="text-success">Interpreter:</h4>

                <input type="radio"  id="yes" onclick="price()" name="interpreter" />Yes
                <input type="radio" id="no" onclick="price()" name="interpreter" />No
            </div>
        </div>
        <div class="alertReq" id="alertReq"></div>
        <div id="dialog" title="Warning">
        <p>Your budget is smaller than the total price!!!</p>
            </div>
        ';
} else {
    echo "<div class='row'><div class='offset-5 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to be able to make tour request!!!</div></div>";
}
?>
    </section>


    <div id="footerInclude"></div>


    <script>
        $( function() {
            var otherPlaces = [
                "Zenica",
                "Travnik",
                "Kravice"
            ];

        $( "#other" ).autocomplete({
            source: otherPlaces

        });
    });
  </script>
    <script>
        $('#alertReq').fadeOut();
        $('#dialog').hide();
        $('#send').click(function () {
            $("#alertReq").removeClass('alert-success').removeClass('alert-danger');

            var sarajevo = $('#sarajevo').is(':checked');
            var mostar = $('#mostar').is(':checked');
            var jajce = $('#jajce').is(':checked');
            var konjic = $('#konjic').is(':checked');
            var bjelasnica = $('#bjelasnica').is(':checked');
            var trebevic = $('#trebevic').is(':checked');
            var igman = $('#igman').is(':checked');
            var jahorina = $('#jahorina').is(':checked');
            var other = $('#other').val();
            var session = $('#session').val();

            var check = "";

            var checked = 0;

            if(sarajevo == true) {
                checked += 1;
                check += "sarajevo,"
                console.log(check);
            }
            if(mostar == true) {
                checked += 1;
                check += "mostar,"
                console.log(check);
            }
            if(jajce == true) {
                checked += 1;
                check += "jajce,"
                console.log(check);
            }
            if(konjic == true) {
                checked += 1;
                check += "konjic,"
                console.log(check);
            }
            if(bjelasnica == true) {
                checked += 1;
                check += "bjelasnica,"
                console.log(check);
            }
            if(trebevic == true) {
                checked += 1;
                check += "trebevic,"
                console.log(check);
            }
            if(igman == true) {
                checked += 1;
                check += "igman,"
                console.log(check);
            }
            if(jahorina == true) {
                checked += 1;
                check += "jahorina,"
                console.log(check);
            }
            if(other == "Zenica"){
                checked += 1;
                check += "Zenica,"
                console.log(check);
            }else if( other == "Kravice") {
                checked += 1;
                check += "Kravice,"
                console.log(check);
            } else if(other == "Travnik"){
                checked += 1;
                check += "Travnik,"
                console.log(check);
            }
            console.log(other);
            console.log(checked);
            var budget = $('#budget').val();
            var people = $('#people').val();


            var price = $('#price').val();

            var length = $('#length').val();

            var zima = $('#zima').is(':checked');
            var ljeto = $('#ljeto').is(':checked');
            var proljece = $('#proljece').is(':checked');
            var jesen = $('#jesen').is(':checked');

            var period = "";

            if(zima == true) {
                period += "zima,"
                console.log(period);
            }
            if(ljeto == true) {
                period += "ljeto,"
                console.log(period);
            }
            if(proljece == true) {
                period += "proljece,"
                console.log(period);
            }
            if(jesen == true) {
                period += "jesen,"
                console.log(period);
            }

            var yes = $('#yes').is(':checked');
            var no = $('#no').is(':checked');

            var checkyes = "";

            if(yes == true){
                checkyes += "yes"
                console.log(checkyes);
            } else if(no == true) {
                checkyes += "no"
                console.log(checkyes);
            }



            if(sarajevo == false && mostar == false && jajce == false && konjic == false && bjelasnica == false && trebevic == false && igman == false && jahorina == false && other == ""){
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select at least 1 (one) place you want to visit!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (checked > 5){
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("You can choose at the most 5 (five) cities!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            }else if (people == 0 || people == "") {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please enter how many people will be!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (length == 0 || length == "") {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please enter the tour's length!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (zima == false && proljece == false && jesen == false && ljeto == false) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please choose 1 (one) season!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if( yes == false && no == false) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select if you need interpreter or not!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (budget < price) {
                $( "#dialog" ).show();
                $( "#dialog" ).dialog();
            } else {
                $.ajax({
                    url: "dbSend/makeRequest?task=request&check="+check+"&people="+people+"&length="+length+"&period="+period+"&checkyes="+checkyes+"&price="+price+"&budget="+budget+"&session="+session,
                    success: function (data){
                        if(data.indexOf('sent') > -1){
                            $("#alertReq").addClass('alert-success');
							$("#alertReq").html('Request sent!!!');
							$("#alertReq").slideDown(500).delay(1000).slideUp(500);
                            $('#other').val("");
                            $('#length').val("");
                            $('#budget').val("");
                            $('#people').val("");
                            $('#price').val(0);
                            $('#sarajevo').prop('checked', false);
                            $('#jajce').prop('checked', false);
                            $('#mostar').prop('checked', false);
                            $('#igman').prop('checked', false);
                            $('#konjic').prop('checked', false);
                            $('#bjelasnica').prop('checked', false);
                            $('#trebevic').prop('checked', false);
                            $('#igman').prop('checked', false);
                            $('#jahorina').prop('checked', false);
                            $('#yes').prop('checked', false);
                            $('#no').prop('checked', false);
                            $('#zima').prop('checked', false);
                            $('#proljece').prop('checked', false);
                            $('#jesen').prop('checked', false);
                            $('#ljeto').prop('checked', false);
                        } else {
                            $("#alertReq").addClass('alert-danger');
							$("#alertReq").html('Error occured');
							$("#alertReq").slideDown(500).delay(1000).slideUp(500);
                        }
                    },
                    error: function (data, err){
                        $("#alertLog").addClass('alert-danger');
                        $("#alertLog").html('Some problem occured. We are sorry.');
                        $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                    }
                })
            }
        });
        function price() {

            var price = 0;

            var sarajevo = document.getElementById("sarajevo").checked;
            var mostar = document.getElementById("mostar").checked;
            var jajce = document.getElementById("jajce").checked;
            var konjic = document.getElementById("konjic").checked;
            var bjelasnica = document.getElementById("bjelasnica").checked;
            var trebevic = document.getElementById("trebevic").checked;
            var igman = document.getElementById("igman").checked;
            var jahorina = document.getElementById("jahorina").checked;
            var other = document.getElementById("other").value;

            if (sarajevo == true) {
                price += 100;
            }
            if (mostar == true) {
                price += 250;
            }
            if (jajce == true) {
                price += 150;
            }
            if (konjic == true) {
                price += 150;
            }
            if (bjelasnica == true) {
                price += 125;
            }
            if (trebevic == true) {
                price += 149;
            }
            if (igman == true) {
                price += 120;
            }
            if (jahorina == true) {
                price += 180;
            }
            if (other == "Zenica") {
                price += 120;
            } else if (other == "Kravice") {
                price += 300;
            } else if (other == "Travnik") {
                price += 200;
            }

            var budget = document.getElementById('budget').value;

            var people = document.getElementById('people').value;
            if(people != 0) {
                if (people < 5 ) {
                    price += 200;
                } else if (people < 10) {
                    price += 250;
                } else {
                  price += 350;
                }
            }
            var length = document.getElementById('length').value;
            if(length != 0) {
                if (length < 3) {
                    price += 35;
                } else if (length < 5) {
                    price += 50;
                } else if (length < 8) {
                    price += 75;
                } else {
                    price += 100;
                }
            }

            var zima = document.getElementById('zima').checked;
            var ljeto = document.getElementById('ljeto').checked;
            var proljece = document.getElementById('proljece').checked;
            var jesen = document.getElementById('jesen').checked;

            if (zima == true) {
                price -= 75;
            }
             if (ljeto == true) {
                price += 100;
            }

            var yes = document.getElementById('yes').checked;
            var no = document.getElementById('no').checked;

            if (yes == true) {
                price += 100;
            }
            document.getElementById("price").value = price;

            var budget = document.getElementById('budget').value;
        }
    </script>

</body>

</html>
