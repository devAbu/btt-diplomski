<?php
  require 'connection/connect.php';

  $carTitle = $_REQUEST['carTitle'];
  $carType = $_REQUEST['carType'];
  $carDescription = $_REQUEST['carDescription'];
  $people = $_REQUEST['people'];
  $year = $_REQUEST['year'];
  $price = $_REQUEST['price'];
  $carImage = $_REQUEST['carImage'];

  if ($_REQUEST['task'] == "add") {
      $query = "INSERT INTO cars (`title`, `type`, `description`, `people`, `year`, `price`, `img`) VALUES ('$carTitle','$carType', '$carDescription', '$people', '$year', '$price',  '$carImage')";

      $response = @mysqli_query($dbc, $query);
      if ($response) {
          echo ('add');
      } else {
          echo mysqli_error($dbc);
      }
  }

 ?>
