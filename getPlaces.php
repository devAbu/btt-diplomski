<?php
header("Content-Type: application/json; charset=UTF-8");
//header('Content-Type:image/jpeg');
$obj = json_decode($_GET["x"], false);

$conn = new mysqli("localhost", "abu", "aburefko159753", "btt");
$result = $conn->query("SELECT * FROM " . $obj->table . " LIMIT " . $obj->limit);
$output = array();
$output = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($output);
