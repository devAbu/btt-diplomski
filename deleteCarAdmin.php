<?php

require 'connection/connect.php';

$idnum = $_REQUEST['idnum'];
$session = $_REQUEST['session'];

echo "idnum = " . $idnum;
echo "session = " . $session;

$query = "Delete from cars where ID = $idnum ";

echo "query:" . $query;

$result = mysqli_query($dbc, $query);
if ($result) {
    echo ('Deleted');
    header("location: cars.php");
} else {
    mysqli_error();
}
