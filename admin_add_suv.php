<?php

include ('add_items.php');

$obj_image = new suv();

if(isset($_POST['Save']))
{
  /*$obj_image->name=str_replace("'","''", $_POST['txt_image_name']);
  $obj_image->des=str_replace("'","''", $_POST['txt_image_description']);
  $obj_image->price=str_replace("'","''", $_POST['txt_image_price']);*/

$obj_image->name=$_POST['txt_image_name'];
$obj_image->des=$_POST['txt_image_description'];
$obj_image->price=$_POST['txt_image_price'];
$obj_image->type=$_POST['txt_image_type'];
$obj_image->hp=$_POST['txt_image_hp'];
$obj_image->pet=$_POST['txt_image_pet'];
$obj_image->myear=$_POST['txt_image_myear'];
$obj_image->condition=$_POST['txt_image_condition'];
$obj_image->milage=$_POST['txt_image_milage'];
$obj_image->ecapacity=$_POST['txt_image_ecapacity'];
$obj_image->manual=$_POST['txt_image_manual'];

$image = $_FILES['txt_image']['tmp_name'];
$obj_image->image = addslashes(file_get_contents($image));

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
                  <a class="nav-link" href="adminhome.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>

              <li class="nav-item"><a class="nav-link" href="admin_add_suv.php">Add vehicle</a></li>
                <li class="nav-item"><a class="nav-link" href="addvehicle.php">View vehicle</a></li>




                <li class="nav-item"><a class="nav-link" href="adminregistration.php">Add new admin</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact user</a></li>

              <li class="nav-item"><a class="nav-link" href="logout.php">log out</a></li>
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
              <CENTER>  <h2>ADD NEW VEHICLE ADVERT</h2></CENTER>

              </div>
            </div>
          </div>
          </div>
          </div>

          <center>
                <form method="post" enctype="multipart/form-data">
                  <table border="1" width="80%">
                    <tr>
                      <th width="50%">Vehecle name</th>
                      <td width="50%"><input type="text" name="txt_image_name"></td>
                    </tr>

                    <tr>
                      <th width="50%">Vehecle description</th>
                      <td width="50%"><input type="text" name="txt_image_description"></td>
                    </tr>

                    <tr>
                      <th width="50%">price</th>
                      <td width="50%"><input type="text" name="txt_image_price"></td>
                    </tr>


                    <tr>
                      <th width="50%">Horse power</th>
                      <td width="50%"><input type="text" name="txt_image_hp"></td>
                    </tr>

                    <tr>
                      <th width="50%">Manufactured year</th>
                      <td width="50%"><input type="text" name="txt_image_myear"></td>
                    </tr>

                    <tr>
                      <th width="50%">Milage</th>
                      <td width="50%"><input type="text" name="txt_image_milage"></td>
                    </tr>

                    <tr>
                      <th width="50%">Engine capacity</th>
                      <td width="50%"><input type="text" name="txt_image_ecapacity"></td>
                    </tr>



                    <tr>

                      <th width="50%">Upload image</th>
                      <td width="50%"><input type="file" name="txt_image"></td>
                    </tr>

                    <tr>
                      <th width="50%">Vehicle type</th>
                      <td width="50%">
                        <select name="txt_image_type" id="cars">
                           <option value="suv">suv</option>
                           <option value="van">van</option>
                           <option value="hybrid">hybrid</option>
                           <option value="truck">truck</option>
                            <option value="sadan">sadan</option>
                              <option value="crossover">Crossover</option>
                      </select>
                      </td>
                    </tr>


                    <tr>
                      <th width="50%">Petrol/Diesel</th>
                      <td width="50%">
                        <select name="txt_image_pet" id="cars">
                           <option value="Petrol">Petrol</option>
                           <option value="Diesel">Diesel</option>
                      </select>
                      </td>
                    </tr>





                    <tr>
                      <th width="50%">Used/Brand new</th>
                      <td width="50%">
                        <select name="txt_image_condition" id="cars">
                           <option value="Used">Used</option>
                           <option value="Brandnew">Brand new</option>
                      </select>

                      </td>
                    </tr>





                    <tr>
                      <th width="50%">Manual/Auto</th>
                      <td width="50%">
                        <select name="txt_image_manual" id="cars">
                           <option value="Manual">Manual</option>
                           <option value="Auto">Auto</option>
                      </select>

                      </td>
                    </tr>

                    <tr>
                      <td></td>
                      <td>
                        <br>
                        <input type="submit" name="Save" value="Add Advert">
                      </td>
                    </tr>
                  </table>
                </form>
              </center>
        

    </html>
