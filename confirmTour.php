<?php
  require 'connection/connect.php';

  $tourType = $_REQUEST['tourType'];
  $tourTitle = $_REQUEST['tourTitle'];
  $tourDescription = $_REQUEST['tourDescription'];
  $people = $_REQUEST['people'];
  $tourAvailable = $_REQUEST['tourAvailable'];
  $tourPrice = $_REQUEST['tourPrice'];
  $tourDays = $_REQUEST['tourDays'];
  $tourImage = $_REQUEST['tourImage'];

  if ($_REQUEST['task'] == "add") {
      $query = "INSERT INTO confrimedtour (`type`, `title`, `description`, `people`, `available`, `price`, `days`, `img`) VALUES ('$tourType','$tourTitle', '$tourDescription', '$people', '$tourAvailable', '$tourPrice', '$tourDays', '$tourImage')";

      $response = @mysqli_query($dbc, $query);
      if ($response) {
          echo ('add');
      } else {
          echo mysqli_error($dbc);
      }
  }

 ?>
