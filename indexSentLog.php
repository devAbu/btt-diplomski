<?php

define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'btt');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

mysqli_set_charset($dbc, "utf8");

$emailLog = $_REQUEST['emailLog'];
$passLog = $_REQUEST['passLog'];


if ($_REQUEST['task'] == "login") {

    $sql = "SELECT `email`, `password` FROM `registacija` WHERE `email` = '$emailLog'";
    $result = $dbc->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $emailLog) {
                if ($row['password'] == $passLog) {
                    $query = "INSERT INTO login (`name`,`password`) VALUES ('$emailLog', '$passLog')";

                    $response = @mysqli_query($dbc, $query);
                    if ($response) {
                        echo ('sent');
                    } else {
                        echo mysqli_error($dbc);
                    }

                    /* session_start();
                    $_SESSION['email'] == $emailLog; */
                } else {
                    echo ('pass');
                }
            } else {
                echo ('mail');
            }
        }
    }

    /* $query = "INSERT INTO login (`name`,`password`) VALUES ('$emailLog', '$passLog')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    } */
}

?>