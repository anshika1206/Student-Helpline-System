<?php
   if(!session_id())session_start();
    require_once('_database/database.php');
    $user_username = mysqli_real_escape_string($database,$_REQUEST["user_username"]);
    $current_user = isset($_SESSION["user_username"]);
    if(isset($_SESSION["user_username"])){
        header("location:profile.php?user_username=$user_username&current_user=$current_user");
    }
?>