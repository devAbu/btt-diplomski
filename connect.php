<?php
$hostname = "localhost";
$username = "abu";
$pass = "aburefko159753";
$dataBaseName = "btt";

$connection = mysqli_connect($hostname, $username, $pass);
$selection = mysqli_select_db($connection, $dataBaseName);

$success = true;

if (!$connection) {
    die("connection failed " . mysqli_error());
    $success = false;
}
if (!$selection) {
    die("selection failed " . mysqli_error());
    $success = false;
}

if ($success) {
    echo ("Connect successfully to " . $dataBaseName);
}

?>