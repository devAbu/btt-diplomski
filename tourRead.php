<!DOCTYPE html>
<html>
<body>
<?php

define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');
define('DB_HOST', 'localhost');
define('DB_NAME', 'btt');

header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tourplan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $myJSON = json_encode($row);
        echo "$myJSON";
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<p id="demo"></p>

<script>

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(myJSON);
        document.getElementById("demo").innerHTML = myObj.title;
    }
};
xmlhttp.open("GET", "tourRead.php", true);
xmlhttp.send();

</script>
</body>
</html>