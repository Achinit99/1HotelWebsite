<?php session_start(); ?>

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
      <a href="./logout.php" class="btn btn-warning btn-sm">Logout</a>
    </nav>

    <main class="my-5">
      <h2 class="text-center my-2">Book a Hotel</h2>
      <form class="w-50 mx-auto mt-5" action="process.php" method="post">

        <div class="row">
          <div class="col-6 form-group">
            <label>Your Email: </label>
            <input readonly type="email" name="uemail" value="<?php echo $_SESSION['user']; ?>" class="form-control  border-primary">
          </div>

          <div class="form-group col-6">
            <label>Hotel Name</label>
            <select class="form-control  border-primary" name="hotel">
              <option disabled selected>Select an hotel</option>
              <option value="Mahaweli Reach">Mahaweli Reach</option>
              <option value="Earls Regent">Earls Regent</option>
              <option value="Ganga addara">Ganga addara</option>
            </select>
          </div>
        </div><br><br>

        <div class="row">
          <div class="form-group col-6">
            <label>When you are coming?</label>
            <input type="date" name="sdate" class="form-control border-primary">
          </div>

          <div class="form-group col-6">
            <label>When you plan to leave?</label>
            <input type="date" name="edate" class="form-control border-primary">
          </div>
        </div>

        <button type="submit" class="btn btn-warning mt-5" name="booking">Book Hotel</button>
      </form>
    </main>

    <!-- footer section -->
     <footer class="fixed-bottom text-muted">
      <p class="text-center">2024 &copy; Achini Thathsarani</p>
     </footer>


  </body>
</html>