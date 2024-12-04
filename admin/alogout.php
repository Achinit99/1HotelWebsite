<?php
    session_start();

    if(isset($_SESSION['auser'])){
      session_unset();
      session_destroy();
      Header("location: adminlogin.php");
    }
?>