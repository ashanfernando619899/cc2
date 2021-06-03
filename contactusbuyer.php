<?php

include ('add_items.php');

$obj_image = new contactusbuyer();

if(isset($_POST['Save']))
{
  /*$obj_image->name=str_replace("'","''", $_POST['txt_image_name']);
  $obj_image->des=str_replace("'","''", $_POST['txt_image_description']);
  $obj_image->price=str_replace("'","''", $_POST['txt_image_price']);*/

$obj_image->name=$_POST['txt_image_name'];
$obj_image->des=$_POST['txt_image_description'];

$obj_image->hp=$_POST['txt_image_hp'];

$obj_image->myear=$_POST['txt_image_myear'];








//echo 'aaa', $_POST['txt_image_name'], 'xxxx', $obj_image->name, 'zzz', $obj_image->des;

$obj_image->insert_into_image();


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
                  <a class="nav-link" href="buyerhome.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>

              <li class="nav-item"><a class="nav-link" href="customer_buy_vehicle.php">Buy vehicle</a></li>






              <li class="nav-item"><a class="nav-link" href="contactusbuyer.php">Contact Us</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">log out</a></li>


              <li>

                 <form method="post" enctype="multipart/form-data">
                 <input  name="search" type="text" placeholder="Type here">
                    <input  type="submit" name="Search">
                  </form>


              </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

<br>
<br>

<body>

	<div class="phppot-container">




    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
            <CENTER>  <h2>Send us your Reviews</h2></CENTER>

            </div>
          </div>
        </div>
        </div>
        </div>

    <center>
          <form method="post" enctype="multipart/form-data">
            <table border="0" width="40%">
              <tr>

                <th width="50%">Customer name</th>
                <td width="50%"><input type="text" name="txt_image_name"></td>

              </tr>

              <tr>
                <th width="50%">Email address</th>
                <td width="50%"><input type="text" name="txt_image_description"></td>
              </tr>




              <tr>
                <th width="50%">Enquiry subject</th>
                <td width="50%"><input type="text" name="txt_image_hp"></td>
              </tr>

              <tr>
                <th width="50%">Enquiry</th>
                <td width="50%"><input type="text" name="txt_image_myear"></td>
              </tr>

              <tr>
                <td></td>
                <td>
                  <br><br>
                  <input type="submit" name="Save" value="Send message">
                    <br><br>
                </td>
              </tr>



























          </form>
        </center>

    </html>
