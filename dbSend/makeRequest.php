<?php

require '../connection/connect.php';

$check = $_REQUEST['check'];
$people = $_REQUEST['people'];
$length = $_REQUEST['length'];
$period = $_REQUEST['period'];
$checkyes = $_REQUEST['checkyes'];
$price = $_REQUEST['price'];
$budget = $_REQUEST['budget'];
$session = $_REQUEST['session'];

if ($_REQUEST['task'] == "request") {
    $query = "INSERT INTO tourrequest (`name`, `city`, `length`, `budget`, `people`, `period`, `interpreter`, `price`) VALUES ('$session', '$check', '$length',  '$budget', '$people',  '$period', '$checkyes', '$price')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
