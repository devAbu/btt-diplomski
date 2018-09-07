<?php

require 'connection/connect.php';

$idnum = $_REQUEST['idnum2'];
$tourType = $_REQUEST['tourType2'];
$tourTitle = $_REQUEST['tourTitle2'];
$tourDescription = $_REQUEST['tourDescription2'];
$people = $_REQUEST['people2'];
$tourAvailable = $_REQUEST['tourAvailable2'];
$tourPrice = $_REQUEST['tourPrice2'];
$tourDays = $_REQUEST['tourDays2'];
$tourImage = $_REQUEST['tourImage2'];

$query = "update tourPlan set type = '$tourType', title = '$tourTitle', description = '$tourDescription', people = '$people', available = '$tourAvailable', price = '$tourPrice', days = '$tourDays', img = '$tourImage' where ID = $idnum ";

echo "query: " . $query;

$result = mysqli_query($dbc, $query);

if ($result) {
    echo ('Updated');
    header("location: admin.php");
} else {
    mysqli_error( $dbc);
}
