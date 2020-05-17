<?php
/*
Author: Rafael Steiner
*/

$conn = mysqli_connect("localhost","admin","admin","login");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>