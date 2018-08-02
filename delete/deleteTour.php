<?php

require '../connection/connect.php';

$idnum = $_REQUEST['idnum'];
$session = $_REQUEST['session'];

echo "idnum = " . $idnum;
echo "session = " . $session;

//echo var_dump($session);

/* $oba = mysqli_real_escape_string($dbc, $session);
echo $abu; */
$query = "Delete from usertour where tourID = $idnum and name LIKE '%" . trim($session) . "%' ";
//$query = "Delete from usertour where tourID = $idnum and name LIKE '%$session%' ";
//$query = "Delete from usertour where tourID = $idnum and name LIKE concat('%', '$session', '%') ";
//$query = "DELETE FROM `usertour` WHERE `tourID` = '" . $idnum . "' AND `name` LIKE '%" . mysqli_real_escape_string($dbc, $session) . "%' ";
echo "query:" . $query;
/* $query = "DELETE from usertour where tourID = $idnum and name like '$abu' "; */
$result = mysqli_query($dbc, $query);
if ($result) {
    echo ('Deleted');
    header("location: tourPlans");
} else {
    mysqli_error();
}
