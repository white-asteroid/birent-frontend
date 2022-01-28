<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets\style\bootstrap-5.1.3-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets\fonts\fontawesome-free-5.15.4-web\css\all.min.css">
  <link rel="stylesheet" href="assets\style\css\owl.carousel.min.css">
  <link rel="stylesheet" href="assets\style\css\header.css">
  <link rel="stylesheet" href="assets\style\css\mycss.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="assets\fonts\icomoon\style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>2-Rent home</title>
</head>

<body>
  <?php include('includes\headers.php'); ?>
  <!-- slider start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner slide-inner">
      <div class="carousel-item slide-item slide=item active">
        <img class="d-block slide-img w-100" src="assets\images\slide1.jpg" alt="First slide">
      </div>
      <div class="carousel-item slide-item">
        <img class="d-block w-100" src="assets\images\slide2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item slide-item">
        <img class="d-block w-100" src="assets\images\slide3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- slider end -->


  <!-- section of quick view start-->

  <div class="section-padding">
    <div class="container">
      <div class="section-header text-center">
        <h2>Find the Best <span>BikeForYou</span></h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      </div>
      <div class="row">

        <!-- Nav tabs -->
        <div class="recent-tab">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#resentnewBike" role="tab" data-toggle="tab">New Bike</a></li>
          </ul>
        </div>
        <!-- Recently Listed New Bikes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="resentnewBike">

            <div class="row">
              <div class="col-sm-6  ">
                <div class="card p-3">
                  <img src="assets\images\slide3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Honda activa 6G</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card p-3">
                  <img src="assets\images\slide3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">honda activa 6G</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mt-4">
                <div class="card p-3">
                  <img src="assets\images\slide3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">honda activa 6G</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mt-4">
                <div class="card p-3 ">
                  <img src="assets\images\slide3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">honda activa 6G</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mt-4">
                <div class="card p-3">
                  <img src="assets\images\slide3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">honda activa 6G</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section quick view end -->
  <?php include('includes\footer.php'); ?>





  <!-- login modal starts -->


  <div class="w3-container mt-5">
    <!-- <h2>W3.CSS Login Modal</h2>
    <button onclick="document.getElementById('login-101').style.display='block'" class="w3-button w3-green w3-large">Login</button> -->

    <div id="login-101" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <form class="w3-container" action="/action_page.php">
          <div class="w3-section">
            <label><b>Username</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
          </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('login-101').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
        </div>

      </div>
    </div>
  </div>

  <!-- login modal ends -->
</body>

</html>