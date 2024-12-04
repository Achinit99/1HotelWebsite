<?php include('../dbcon.php'); ?>
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
      <a href="../index.php" class="navbar-brand">Travel LK</a>
      <a href="./alogout.php" class="btn btn-warning btn-sm">Admin Logout</a>
    </nav>

    <main class="my-5">
      <div class="row w-75 mx-auto">
        <div class="container">
          <h3 class="text-center mx-2">Welcome to Admin Dashboard</h3>
        </div>

        <div class="container text-start">
          <a href="addNewUser.php" class="btn btn-primary btn-sm mx-2">Add New User</a>
        </div>

        <table class="table mt-2">
          <thead class="table-start">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
            <th>Action</th>
          </thead>

          <tbody>

              <?php
                  $sql = "SELECT * FROM user";
                  $res = mysqli_query(mysql: $con, query: $sql);

                  if(mysqli_num_rows(result: $res) > 0){
                    while($row = mysqli_fetch_assoc(result: $res)){
                    ?>
                      <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td>
                      <a href="./uedit.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="./udelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                      </tr>
                  <?php
                    }
                  }
              ?>
          </tbody>

        </table>
      </div>
    </main>

    <!-- footer section -->
     <footer class="fixed-bottom text-muted">
      <p class="text-center">2024 &copy; Achini Thathsarani</p>
     </footer>


  </body>
</html>