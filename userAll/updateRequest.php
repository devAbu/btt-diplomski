<?php

require '../connection/connect.php';

$session = $_REQUEST['session'];
$people = $_REQUEST['people'];
$budget = $_REQUEST['budget'];
$length = $_REQUEST['length'];
$price = $_REQUEST['price'];

if ($_REQUEST['task'] == "update") {
    $query = "Update tourrequest set price = $price, length = $length, budget= $budget, people = $people where name like '%" . trim($session) . "%' ";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
