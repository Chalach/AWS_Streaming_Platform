<?php
/*
Author: Rafael Steiner
*/

$conn = mysqli_connect("localhost","ali_user","L?mi782j","ali_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>