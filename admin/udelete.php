<?php

    require '../dbcon.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id = '$id';";
    $res = mysqli_query($con, $sql);

    if($res){
      echo "User deleted";
      header('location:./adashboard.php');
    }else{
      echo "Failed to delete";
    }