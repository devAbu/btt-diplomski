<?php

require 'connect.php';

$emailLog = $_REQUEST['emailLog'];
$passLog = $_REQUEST['passLog'];

if ($_REQUEST['task'] == "login") {

    $sql = "SELECT email FROM registacija WHERE email = '$emailLog'";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $emailLog) {

                $query = "UPDATE registacija set password = '$passLog' where email = '$emailLog'";

                $response = @mysqli_query($dbc, $query);
                if ($response) {
                    echo ('sent');
                } else {
                    echo mysqli_error($dbc);
                }

                /* session_start();
            $_SESSION['email'] == $emailLog; */
            } else {
                echo ('mail');
            }
        }
/* $query = "INSERT INTO login (name,`password`) VALUES ('$emailLog', '$passLog')";

$response = @mysqli_query($dbc, $query);
if ($response) {
echo ('sent');
} else {
echo mysqli_error($dbc);
} */
    }
}
