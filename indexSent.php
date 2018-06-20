<?php

/* define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'btt');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

mysqli_set_charset($dbc, "utf8"); */

require 'connect.php';


$firstSign = $_REQUEST['firstSign'];
$lastSign = $_REQUEST['lastSign'];
$emailSign = $_REQUEST['emailSign'];
$passSign = $_REQUEST['passSign'];



if ($_REQUEST['task'] == "register") {
    $query = "INSERT INTO registacija (`name`, `surname`, email, `password`) VALUES ('$firstSign','$lastSign', '$emailSign', '$passSign')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}

?>