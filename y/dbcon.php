<?php
$con = mysqli_connect("localhost","root","","login2");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    echo "aight"; 
} 
?>
