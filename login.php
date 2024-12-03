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
      <a href="./index.php" class="btn btn-warning btn-sm">Back to Home</a>
    </nav>

    <main class="my-5">
      <h2 class="text-center my-2">Welcome to User Login</h2>
      <form class="w-50 mx-auto mt-5" action="process.php" method="post">
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="uemail" class="form-control" placeholder="Enter email..">
        </div><br>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="upass" class="form-control" placeholder="Enter password..">
        </div><br>

        <button type="submit" class="btn btn-primary" name="login">Login</button>
        <a class="btn btn-secondary btn-sm" href="./register.php">Don't have an account? Register</a>


      </form>
    </main>

    <!-- footer section -->
     <footer class="fixed-bottom text-muted">
      <p class="text-center">2024 &copy; Achini Thathsarani</p>
     </footer>


  </body>
</html>