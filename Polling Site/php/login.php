<?php
  session_start();
  include_once "config.php";
  $fname = mysqli_real_escape_string($conn,$_POST['fname']); 
  $lname = mysqli_real_escape_string($conn,$_POST['lname']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  
  
  if(!empty($fname) && !empty($lname) && !empty($email)) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
              if(mysqli_num_rows($query) == 0) { 
                     $sql = mysqli_query($conn,"INSERT INTO users(fname,lname,email) VALUES ('{$fname}' ,'{$lname}','{$email}')");
                     $_SESSION['login_id'] = "loggedin";
                     $_SESSION['email'] = $email;
                     echo "success";
                   } else {
                   echo "Email already used!";   
                }
          
      } else {
         echo "Enter Valid Email Address!";
     }
} else {
    echo "All fields are required!";
}
      
?>