<?php

require '../connection/connect.php';

$firstSign = $_REQUEST['firstSign'];
$lastSign = $_REQUEST['lastSign'];
$emailSign = $_REQUEST['emailSign'];
$passSign = $_REQUEST['passSign'];

$hashedPass = $hash_pass = password_hash($passSign, PASSWORD_DEFAULT);

if ($_REQUEST['task'] == "register") {
    $query = "INSERT INTO registacija (`name`, `surname`, email, `password`) VALUES ('$firstSign','$lastSign', '$emailSign', '$hashedPass')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
