<?php

require '../connection/connect.php';

$emailLog = $_REQUEST['emailLog'];
$passLog = $_REQUEST['passLog'];

$hashedPass = $hash_pass = password_hash($passLog, PASSWORD_DEFAULT);

if ($_REQUEST['task'] == "login") {

    $sql = "SELECT email FROM registacija WHERE email = '$emailLog'";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['email'] == $emailLog) {

                $query = "UPDATE registacija set password = '$hashedPass' where email = '$emailLog'";

                $response = @mysqli_query($dbc, $query);
                if ($response) {
                    echo ('sent');
                } else {
                    echo mysqli_error($dbc);
                }

            } else {
                echo ('mail');
            }
        }
    }
}
