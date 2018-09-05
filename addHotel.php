<?php
  require 'connection/connect.php';

  $hotelTitle = $_REQUEST['hotelTitle'];
  $hotelDescription = $_REQUEST['hotelDescription'];
  $hotelPlace = $_REQUEST['hotelPlace'];
  $hotelImage = $_REQUEST['hotelImage'];

  if ($_REQUEST['task'] == "add") {
      $query = "INSERT INTO hotel (`title`, `description`, `place`, `img`) VALUES ('$hotelTitle','$hotelDescription', '$hotelPlace', '$hotelImage')";

      $response = @mysqli_query($dbc, $query);
      if ($response) {
          echo ('add');
      } else {
          echo mysqli_error($dbc);
      }
  }

 ?>
