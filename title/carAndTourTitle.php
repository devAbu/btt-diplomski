<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$conn = new mysqli("localhost", "abu", "aburefko159753", "btt");
$result = $conn->query("SELECT `title`, `type` FROM " . $obj->table);
$output = array();
$output = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($output);
