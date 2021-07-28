<?php
  $conn = mysqli_connect("localhost","root","","polling");
  if(!$conn) {
      echo "Database Conected" .mysqli_connect_error();
  } 
?>