<?php



session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {

    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}





?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>CarMart</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets\css\adminportal_styles.css">

</head>





  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Car<em>Mart</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="adminhome.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>


                <li class="nav-item"><a class="nav-link" href="addvehicle.php">View vehicle</a></li>




                <li class="nav-item"><a class="nav-link" href="adminregistration.php">Add new admin</a></li>
              <li class="nav-item"><a class="nav-link" href="reports.php">View Reports</a></li>

              <li class="nav-item"><a class="nav-link" href="logout.php">log out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<br>
<br>







<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Sort by type</h2>
          <a href="cars.html">view more <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="product-item">
          <a href="display_suv.php"><img src="assets/images/suv.jpg" alt=""></a>
          <div class="down-content">
            <a href="display_suv.php"><h4>SUV's</h4></a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6">
        <div class="product-item">
          <a href="car-details.html"><img src="assets/images/van.jpg" alt=""></a>
          <div class="down-content">
            <a href="car-details.html"><h4>Vans</h4></a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6">
        <div class="product-item">
          <a href="car-details.html"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="car-details.html"><h4>Hybrids</h4></a>
          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-6">
        <div class="product-item">
          <a href="car-details.html"><img src="assets/images/Truck.jpg" alt=""></a>
          <div class="down-content">
            <a href="car-details.html"><h4>Trucks</h4></a>
          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-6">
        <div class="product-item">
          <a href="car-details.html"><img src="assets/images/sedan.jpg" alt=""></a>
          <div class="down-content">
            <a href="car-details.html"><h4>Sedans</h4></a>

          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-6">
        <div class="product-item">
          <a href="car-details.html"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="car-details.html"><h4>Crossovers</h4></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






</body>

</HTML>
