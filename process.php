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
      //echo "login success";

      $uemail = $_POST['uemail'];
      $upass = $_POST['upass'];

      $sql = "SELECT * FROM user WHERE email='$uemail' AND pw='$upass';";
      $res = mysqli_query(mysql: $con, query: $sql);

      if(mysqli_num_rows(result: $res) > 0){
        //echo "Login success";
        $_SESSION['user'] = $uemail;
        header('location:booking.php');
      }else{
        //echo "wrong credentials";
        header('location:login.php');
      }
    }

    // booking
    if(isset($_POST['booking'])){
      $uemail = $_POST['uemail'];
      $hotelname = $_POST['hotel'];
      $startdate = $_POST['sdate'];
      $enddate = $_POST['edate'];

      $sql = "INSERT INTO booking (uemail,hotel,startdate,enddate) VALUES ('$uemail', '$hotelname', '$startdate', '$enddate')";
      $res = mysqli_query($con, $sql);

      if($res){
        echo "Booking added";
        header('location:index.php');
      }else{
        echo "Failed to add booking";
        header('location:booking.php');

      }
    } 

    //admin login
    if(isset($_POST['adminlogin'])){
      //echo "Admin login";
      $username = $_POST['username'];
      $pw = $_POST['adminpw'];

      $sql = "SELECT * FROM admin WHERE username = '$username' AND pw = '$pw'";
      $res = mysqli_query(mysql: $con, query: $sql);

      if(mysqli_num_rows(result: $res) > 0){
        $_SESSION['auser']=$username;
        echo "Login admin success";
        header('location:admin/adashboard.php');
      }else{
        header('location:admin/adminlogin.php');
        echo "failed to login";
      }

    }

    //add user through admin
    if(isset($_POST['aUserRegister'])){
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
        header('location:./admin/adashboard.php');
      } else{
        echo "Failed to insert";
        header('location:./admin/aUserRegister.php');

      }

    }

//update user
if(isset($_POST['aUserUpdate'])){
  //echo "Update clicked";
  $id = $_POST['id'];
  $uname = $_POST['uname'];
  $uemail = $_POST['uemail'];
  $upass = $_POST['upass'];
  $ugender = $_POST['ugender'];
  $ucity = $_POST['ucity'];

  //query to update
  $sql = "UPDATE user set name='$uname',email='$uemail',pw='$upass',gender='$ugender',city='$ucity' WHERE id='$id';";

  $res=mysqli_query($con, $sql);

  if($res){
    echo "Update success";
    header('location:./admin/adashboard.php');
  }else{
    echo "Failed to update";
  }
}