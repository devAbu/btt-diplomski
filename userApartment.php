<?php
require 'connect.php';

$email = $_REQUEST['session'];
$apartmentID = $_REQUEST['idnum'];

$query = "INSERT INTO userapartment (`name`, `apartmentID`) VALUES ('$email', '$apartmentID')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    echo ('sent');
    header('location: myCart.php');
} else {
    echo mysqli_error($dbc);
}
