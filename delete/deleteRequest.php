<?php

require '../connection/connect.php';

$idnum = $_REQUEST['idnum'];
$session = $_REQUEST['session'];

echo "idnum = " . $idnum;
echo "session = " . $session;

$query = "Delete from tourrequest where id = $idnum and name LIKE '%" . trim($session) . "%' ";
//$query = "Delete from usertour where tourID = $idnum and name LIKE '%$session%' ";
//$query = "Delete from usertour where tourID = $idnum and name LIKE concat('%', '$session', '%') ";
//$query = "DELETE FROM `usertour` WHERE `tourID` = '" . $idnum . "' AND `name` LIKE '%" . mysqli_real_escape_string($dbc, $session) . "%' ";
echo "query:" . $query;
/* $query = "DELETE from usertour where tourID = $idnum and name like '$abu' "; */
$result = mysqli_query($dbc, $query);
if ($result) {
    echo ('Deleted');
    header("location: ../tourplans.php");
} else {
    mysqli_error();
}
