<?php
  require 'connection/connect.php';

  $apartmentTitle = $_REQUEST['apartmentTitle'];
  $apartmentDescription = $_REQUEST['apartmentDescription'];
  $apartmentPlace = $_REQUEST['apartmentPlace'];
  $apartmentImage = $_REQUEST['apartmentImage'];

  if ($_REQUEST['task'] == "add") {
      $query = "INSERT INTO apartment (`title`, `description`, `place`, `img`) VALUES ('$apartmentTitle','$apartmentDescription', '$apartmentPlace', '$apartmentImage')";

      $response = @mysqli_query($dbc, $query);
      if ($response) {
          echo ('add');
      } else {
          echo mysqli_error($dbc);
      }
  }

 ?>
