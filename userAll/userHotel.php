<?php
require '../connection/connect.php';

$email = $_REQUEST['session'];
$hotelID = $_REQUEST['idnum'];

$query = "INSERT INTO userhotel (`name`, `hotelID`) VALUES ('$email', '$hotelID')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    echo ('sent');
    header('location: myCart.php');
} else {
    echo mysqli_error($dbc);
}
