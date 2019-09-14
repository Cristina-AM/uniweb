<?php
  $servername = "localhost";
  $username = "uniwebro";
  $password = "Fc86q2S2ce";
  $dbname = "uniwebro_db";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // else{
  //   echo "connection successful";
  // }
?>
