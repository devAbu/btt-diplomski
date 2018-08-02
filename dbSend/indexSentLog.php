<?php

require '../connection/connect.php';

$emailLog = $_REQUEST['emailLog'];
$passLog = $_REQUEST['passLog'];

if ($_REQUEST['task'] == "login") {

    $sql = "SELECT `email`, `password` FROM `registacija` WHERE `email` = '$emailLog'";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $emailLog) {
                if (password_verify('$passLog', '$row["password"]')) {
                    $query = "INSERT INTO `login` (`name`,`password`) VALUES ('$emailLog', '$row[password]')";

                    $response = @mysqli_query($dbc, $query);
                    if ($response) {
                        echo ('sent');
                        session_start();
                        $_SESSION["email"] = $row["email"];
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
