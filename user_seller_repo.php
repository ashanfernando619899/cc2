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

</head>

<br><br><br>
<div class="section-heading">
<center>  <h2><div class="page-content">Buyer Report </div></center></h2></center>

</div>

<?php
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


$sql = "SELECT id,username,email,create_at FROM tbl_buyer1";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "
  <table >




            </table>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {



      echo "
              <center>
            <div class='col-lg-4 col-md-6'>



              <div class='product-item'>
                <a href='vehicledetails.php'></a>
                <div class='down-content'>
                  <a href='vehicledetails.php'><h4>".$row["username"]."</h4></a>

                    <h6>Buyer ID -&nbsp;".$row["id"]."</h6>
                  <h6>email -&nbsp;".$row["email"]."</h6>
                    <h6>Joined date -&nbsp;".$row["create_at"]."</h6>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      </center>";
    }
      ;
      /*<td>".'<input type="button" name="add_cart" value="Add to cart" onclick="addToCart('.$row["id"].',"'.$row["name"].'")">'."</td>*/
}
if(isset($_POST['add_cart']))
{
    echo "111111";
    /*
    $sql="insert into tbl_cart(id,name,description,price)
            values(id,'$row['name']','$row['description']','$row['price']')";

    if ($conn->query($sql) === TRUE)
    {
            echo "New record created successfully";
    } else
    {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
}
$conn->close();

?>
