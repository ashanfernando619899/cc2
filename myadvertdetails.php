<?php

//$refererQueryString = parse_url(urldecode($_SERVER['HTTP_REFERER']), PHP_URL_QUERY);



$type= $_GET['type'];
$name= $_GET['name'];
$price= $_GET['price'];
$Engine_capacity= $_GET['Engine_capacity'];
$Petrol_Desel= $_GET['Petrol_Desel'];
$Manufactured_year= $_GET['Manufactured_year'];
$Used_Brandnew= $_GET['Used_Brandnew'];
$Milage= $_GET['Milage'];
$Horse_power= $_GET['Horse_power'];
$Manual_auto= $_GET['Manual_auto'];
$des= $_GET['des'];
$seller_name= $_GET['seller_name'];
$email= $_GET['email'];
$tel= $_GET['tel'];
$extra_info= $_GET['extra_info'];
$id= $_GET['id'];


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "carmart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image,image2,image3,image4,id FROM vehicles WHERE id= $id";
$result = $conn->query($sql);




include ('adminaprove.php');

$obj_image = new aproved();

if(isset($_POST['Save']))
{

/*$obj_image->id=$_GET['id'];
$obj_image->insert_into_aprove();*/
$sql="UPDATE vehicles SET status = 'aproved' WHERE id = $id  ";

  if ($conn->query($sql) === TRUE)
  {
    echo '<script type="text/javascript">';
    echo ' alert("Advert published successfully")';  //not showing an alert box.
    echo '</script>';

  }
  else
  {
     echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();


}

else if (isset($_POST['decline']))
{
  $sql="DELETE FROM vehicles WHERE id = $id  ";

    if ($conn->query($sql) === TRUE)
    {
      echo '<script type="text/javascript">';
      echo ' alert("Advert removed successfully")';  //not showing an alert box.
      echo '</script>';

    }
    else
    {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


 ?>

 <!DOCTYPE html>
<html lang="en">

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



  </head>

  <body>



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
                    <a class="nav-link" href="home.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li>


                  <li class="nav-item"><a class="nav-link" href="customer_sell_vehicle.php">Sell vehicle</a></li>





                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">log out</a></li>



            </ul>
          </div>
        </div>
      </nav>
    </header>
  <br>
  <br>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
              <img src=<?php



              if ($result->num_rows > 0)
              {
              echo "<table ></table>";
                // output data of each row
                while($row = $result->fetch_assoc()){ echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';}
            }
              $conn->close();

               ?>
            </div>





            <br>

            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-2-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-3-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>




            </div>
          </div>



          <div class="col-md-6">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Type</span>

                         <strong class="pull-right"><?php echo $type; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Name</span>

                         <strong class="pull-right"><?php echo $name; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Price</span>

                         <strong class="pull-right">LKR <?php echo $price; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Power</span>

                         <strong class="pull-right"><?php echo $Engine_capacity; ?>hp</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fuel</span>

                         <strong class="pull-right"><?php echo $Petrol_Desel; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Manufactured year</span>

                         <strong class="pull-right"><?php echo $Manufactured_year; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Condition</span>

                         <strong class="pull-right"><?php echo $Used_Brandnew; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Milage</span>

                         <strong class="pull-right"><?php echo $Milage; ?></strong>
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Engine capacity</span>

                         <strong class="pull-right"><?php echo $Horse_power; ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Gearbox</span>

                         <strong class="pull-right"><?php echo $Manual_auto; ?></strong>
                    </div>
               </li>




              </ul>




          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Vehicle Description</h2>
            </div>

            <div class="left-content">
              <p><?php echo $des; ?><br></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="section-heading">
              <h2>Contact Details</h2>
            </div>

            <div class="left-content">

              <div class="left-content">
                <p>
                  <span>Name</span>

                  <br>

                  <strong><?php echo $seller_name; ?></strong>
                </p>

                <p>
                  <span>Phone</span>

                  <br>

                  <strong>
                    <a href="tel:123-456-789"><?php echo $tel; ?></a>
                  </strong>
                </p>


                <p>
                  <span>Email</span>

                  <br>

                  <strong>
                    <a href="mailto:john@carsales.com"><?php echo $email; ?></a>
                  </strong>
                </p>

                <p>
                  <span>Extra info</span>

                  <br>

                  <strong><?php echo $extra_info; ?></strong>
                </p>

                <input type="submit" name="Save" value="Update Advert">
                <br>
                <br>
                  <input type="submit" name="decline" value="Delete Advert">

              </div>

  </form>





            </div>
          </div>
        </div>
      </div>
    </div>



    <br><br>




    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
