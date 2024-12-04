<?php

    require '../dbcon.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id = '$id';";
    $res = mysqli_query($con, $sql);

    if($res){
      header('location:./adashboard.php');
    }