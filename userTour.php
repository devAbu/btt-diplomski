<?php
require 'connection/connect.php';

$email = $_REQUEST['session'];
$tourID = $_REQUEST['idnum'];

$query = "INSERT INTO usertour (`name`, `tourID`) VALUES ('$email', '$tourID')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    echo ('sent');
    header('location: myCart.php');
} else {
    echo mysqli_error($dbc);
}
