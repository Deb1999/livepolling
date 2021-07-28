<?php
session_start();
include_once "config.php";
$email = $_SESSION['email'];
$sql = mysqli_query($conn,"SELECT * FROM users WHERE email='{$email}'");
$row = mysqli_fetch_array($sql);
if($sql) {
    $_SESSION['fname'] = $row['fname'];
    $user_id = row['user_id'];
    header("location:../User Interface.php");
}
?>