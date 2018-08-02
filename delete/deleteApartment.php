<?php

require '../connection/connect.php';

$idnum = $_REQUEST['idnum'];
$session = $_REQUEST['session'];

echo "idnum = " . $idnum;
echo "session = " . $session;

$query = "Delete from userapartment where apartmentID = $idnum and name LIKE '%" . trim($session) . "%' ";

echo "query:" . $query;

$result = mysqli_query($dbc, $query);
if ($result) {
    echo ('Deleted');
    header("location: ../apartment.php");
} else {
    mysqli_error();
}
