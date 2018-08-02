<?php

/* define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'btt');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

mysqli_set_charset($dbc, "utf8"); */

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
