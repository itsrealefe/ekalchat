<?php
  $hostname = "sql6.freesqldatabase.com";
  $username = "sql6639744";
  $password = "cpGIQ6CNds";
  $dbname = "sql6639744";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
