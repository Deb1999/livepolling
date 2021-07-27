<?php
  session_start();
  include_once "config.php";

  $java = "Java";
  $python = "Python";
  $csharp ="C#";
  $cplusplus ="C++";

  $sql1 =  mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE vote_for = '{$java}'");
  $row1 = mysqli_fetch_array($sql1,MYSQLI_NUM);
  $java_count = $row1[0];

  $sql2 =  mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE vote_for = '{$python}'");
  $row2 = mysqli_fetch_array($sql2,MYSQLI_NUM);
  $python_count = $row2[0];

  $sql3 =  mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE vote_for = '{$csharp}'");
  $row3 = mysqli_fetch_array($sql3,MYSQLI_NUM);
  $csharp_count = $row3[0];

  $sql4 =  mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE vote_for = '{$cplusplus}'");
  $row4 = mysqli_fetch_array($sql4,MYSQLI_NUM);
  $cplusplus_count = $row4[0];

  $total_votes = $java_count + $python_count + $csharp_count + $cplusplus_count;
  
  $java_percent = ($java_count/$total_votes)*100;
  $python_percent = ($python_count/$total_votes)*100;
  $csharp_percent = ($csharp_count/$total_votes)*100;
  $cplusplus_percent = ($cplusplus_count/$total_votes)*100;

  $_SESSION['java'] = round($java_percent);
  $_SESSION['python'] = round($python_percent);
  $_SESSION['csharp'] = round($csharp_percent);
  $_SESSION['cplusplus'] = round($cplusplus_percent);
?>