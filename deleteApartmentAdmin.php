<?php

require 'connection/connect.php';

$idnum = $_REQUEST['idnum'];
$session = $_REQUEST['session'];

echo "idnum = " . $idnum;
echo "session = " . $session;

$query = "Delete from apartment where ID = $idnum ";

echo "query:" . $query;

$result = mysqli_query($dbc, $query);
if ($result) {
    echo ('Deleted');
    header("location: hotels.php");
} else {
    mysqli_error();
}
