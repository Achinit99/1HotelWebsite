<?php
// Logout
    session_start();

    if(isset($_SESSION['user'])){
      session_unset();
      session_destroy();
      Header("location: index.php");
    }
?>