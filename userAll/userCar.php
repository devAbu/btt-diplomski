<?php
require '../connection/connect.php';

$email = $_REQUEST['session'];
$carID = $_REQUEST['idnum'];

$query = "INSERT INTO usercar (`name`, `carID`) VALUES ('$email', '$carID')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    echo ('sent');
    header('location: myCart.php');
} else {
    echo mysqli_error($dbc);
}
