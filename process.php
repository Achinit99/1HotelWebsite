<?php

require './dbcon.php';
session_start();

// User register
    if(isset($_POST['register'])){
      //echo "clicked register";
      $uname = $_POST['uname'];
      $uemail = $_POST['uemail'];
      $upass = $_POST['upass'];
      $ugender = $_POST['ugender'];
      $ucity = $_POST['ucity'];

      //echo $ucity;

      $sql = "INSERT INTO user(name,email,pw,gender,city) VALUES ('$uname', '$uemail', '$upass', '$ugender', '$ucity')";

      //execute Query
      $res = mysqli_query($con, $sql);

      if($res){
        echo "Successfully inserted";
        header('location:login.php');
      } else{
        echo "Failed to insert";
        header('location:register.php');

      }

    }


    // user login
    if(isset($_POST['login'])){
      echo "login success";
    }
