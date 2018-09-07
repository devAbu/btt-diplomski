<?php

require 'connection/connect.php';

$idnum = $_REQUEST['idnum'];
$tourType = $_REQUEST['tourType'];
$tourTitle = $_REQUEST['tourTitle'];
$tourDescription = $_REQUEST['tourDescription'];
$people = $_REQUEST['people'];
$tourAvailable = $_REQUEST['tourAvailable'];
$tourPrice = $_REQUEST['tourPrice'];
$tourDays = $_REQUEST['tourDays'];
$tourImage = $_REQUEST['tourImage'];


$query = "INSERT INTO tourplan (`type`, `title`, `description`, `people`, `available`, `price`, `days`, `img`) VALUES ('$tourType','$tourTitle', '$tourDescription', '$people', '$tourAvailable', '$tourPrice', '$tourDays', '$tourImage')";

$result = mysqli_query($dbc, $query);
if ($result) {
    $query2 = "Delete from confrimedtour where ID = $idnum ";
    $result2 = mysqli_query($dbc, $query2);
    if($result2){
      header("location: requestedTour.php");
    }

} else {
    mysqli_error();
}
