<?php

require '../connection/connect.php';

$feedback = $_REQUEST['feedback'];
$session = $_REQUEST['session'];

if ($_REQUEST['task'] == "feedback") {
    $query = "INSERT INTO feedback (`name`, `content`) VALUES ('$session','$feedback')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
