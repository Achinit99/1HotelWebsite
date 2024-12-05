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
          <?php
            session_start();

            if(!isset($_SESSION['user'])){
              ?>
               <a href="./login.php" class="btn btn-success btn-sm">Login</a>
               <?php
            }else{
              ?>
              <a href="./logout.php" class="btn btn-warning btn-sm">Logout</a>
              <?php
            }
           ?>
    </nav>

    <main class="my-5">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Welcome to Central Province</h1>
          <p class="text-muted lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Suscipit eligendi aliquid, id voluptate consequatur magni unde blanditiis corporis quaerat cumque! 
            Quasi velit, neque quod beatae asperiores consectetur numquam vero perspiciatis!</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                     <img class="card-img-top" style="height:200px;" src="./img/hotel1.jpg" alt="Hotel img">

                     <div class="card-body">
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi atque laboriosam aperiam, 
                          itaque blanditiis molestias labore commodi dolor saepe. Rerum odio illum mollitia molestiae 
                          ad tempora similique vitae magni deleniti.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                              <button type="button" class="btn btn-outline-success btn-sm">Book Now</button>

                          </div>
                          <small class="text-muted">Rs. 15000 per day</small>
                        </div>
                     </div>

                  </div>
              </div>


              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                     <img class="card-img-top" style="height:200px;" src="./img/hotel2.jpg" alt="Hotel img">

                     <div class="card-body">
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi atque laboriosam aperiam, 
                          itaque blanditiis molestias labore commodi dolor saepe. Rerum odio illum mollitia molestiae 
                          ad tempora similique vitae magni deleniti.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                              <button type="button" class="btn btn-outline-success btn-sm">Book Now</button>

                          </div>
                          <small class="text-muted">Rs. 25000 per day</small>
                        </div>
                     </div>

                  </div>
              </div>

              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                     <img class="card-img-top" style="height:200px;" src="./img/hotel3.jpg" alt="Hotel img">

                     <div class="card-body">
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi atque laboriosam aperiam, 
                          itaque blanditiis molestias labore commodi dolor saepe. Rerum odio illum mollitia molestiae 
                          ad tempora similique vitae magni deleniti.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                              <button type="button" class="btn btn-outline-success btn-sm">Book Now</button>

                          </div>
                          <small class="text-muted">Rs. 35000 per day</small>
                        </div>
                     </div>

                  </div>
              </div>
            </div>
          
        </div>
      </div>
    </main>

    <!-- footer section -->
     <footer class="text-muted">
      <p class="text-center">2024 &copy; Achini Thathsarani</p>
     </footer>


  </body>
</html>