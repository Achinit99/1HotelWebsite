<?php
    session_start();

    if(!isset($_SESSION['auser'])){
      header('location: adminlogin.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Travel LK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light justyfy-content-between mx-3">
      <a href="./index.php" class="navbar-brand">Travel LK</a>
      <a href="./adashboard.php" class="btn btn-warning btn-sm">Back to Dashboard</a>
    </nav>

    <main class="my-5">
      <h2 class="text-center my-2">Admin - User Update</h2>

      <?php
      $id=$_GET['id'];
      require '../dbcon.php';
      
      $sql = "SELECT * FROM user WHERE id='$id';";
      $res = mysqli_query(mysql: $con, query: $sql);

      if(mysqli_num_rows(result: $res) > 0){
        //values found
        $row = mysqli_fetch_assoc(result: $res);
        //key : value
        ?>


      <form class="w-50 mx-auto mt-5" action="../process.php" method="post">
        <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="uname" class="form-control" value="<?php echo $row['name']; ?>">
        </div><br>

        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="uemail" class="form-control" value="<?php echo $row['email']; ?>">
        </div><br>

        <div class="form-group">
          <label>Password</label>
          <input type="text" name="upass" class="form-control" value="<?php echo $row['pw']; ?>">
        </div><br>

        <div class="form-group">
          <label>Gender</label><br>
          <input type="radio" name="ugender" value="male">Male
          <input type="radio" name="ugender" value="female">Female
          <input type="radio" name="ugender" value="<?php echo $row['gender']; ?>">


        </div><br>

        <div class="form-group">
          <label>City</label>
          <input type="text" name="ucity" class="form-control" value="<?php echo $row['city']; ?>">
        </div><br>

        <button type="submit" class="btn btn-success" name="aUserUpdate">Update User</button>
      </form>

      <?php
      }
      
      ?>
    </main>

    <!-- footer section -->
     <footer class="fixed-bottom text-muted">
      <p class="text-center">2024 &copy; Achini Thathsarani</p>
     </footer>


  </body>
</html>