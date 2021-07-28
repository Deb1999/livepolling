<?php
  session_start();
  include_once "config.php";
  $voteFor = mysqli_real_escape_string($conn,$_POST['language']);
  $email = $_SESSION['email'];
  
  
  if(!empty($voteFor)) {
      $sql = mysqli_query($conn,"SELECT vote_for FROM users WHERE email = '{$email}'");
      $row = mysqli_fetch_array($sql);
      
      if(mysqli_num_rows($sql) == 1) {
           if($row['vote_for']==null) {
                $sql2 = mysqli_query($conn,"UPDATE users SET vote_for = '{$voteFor}' WHERE email = '{$email}';");
                  if($sql2) {
                       echo "success";
                       
                    }
           } 
           else {
               echo "You have already casted your vote";  
            }
        } 
   } 
   else {
       echo "Select an Option";
   }
      
?>