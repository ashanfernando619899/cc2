
<?php

class admin
{
  function get_from_admin()
  {
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


    $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE status='notaproved'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      echo "
      <table >




                </table>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {



          echo "<div class='latest-products'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-12'>
                  <div class='section-heading'>
                    <h2>".$row["name"]."</h2>
                    <a href='adminvehicledetails.php'>More Details <i class='fa fa-angle-right'></i></a>
                  </div>
                </div>
                <div class='col-lg-4 col-md-6'>
                  <div class='product-item'>
                    <a href='adminvehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                      && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                      && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."




                    '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

                  </div>

                </div>

                <div class='col-lg-4 col-md-6'>

                </div>

                <div class='col-lg-4 col-md-6'>



                  <div class='product-item'>
                    <a href='vehicledetails.php'></a>
                    <div class='down-content'>
                      <a href='vehicledetails.php'><h4>".$row["des"]."</h4></a>

                      <h6><small><del>V NO:&nbsp;".$row["id"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                      <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                      <small>
                        <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                      </small>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>";
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
  }

}








class suv
{
  function get_from_suv()
  {
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


        $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE type='suv'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      echo "
      <table >




                </table>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {



          echo "<div class='latest-products'>
            <div class='container'>
              <div class='row'>
                <div class='col-md-12'>
                  <div class='section-heading'>
                    <h2>".$row["name"]."</h2>

                    <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                      && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                      && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                    '>More Details <i class='fa fa-angle-right'></i></a>
                  </div>
                </div>
                <div class='col-lg-4 col-md-6'>
                  <div class='product-item'>

                  <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                    && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                    && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."



                    '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

                  </div>
                </div>

                <div class='col-lg-4 col-md-6'>

                </div>
                <div class='col-lg-4 col-md-6'>
                  <div class='product-item'>
                    <a href='car-details.html'></a>
                    <div class='down-content'>

                    <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                      && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                      && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                      '><h4>".$row["des"]."</h4></a>

                      <h6><small><del>LKR&nbsp;".$row["price"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                      <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                      <small>
                        <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                      </small>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>";
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
  }

}




/*=========================================================================================================================================================================*/

class van
{
  function get_from_van()
  {
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


    $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE type='van'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "
  <table >




            </table>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {



      echo "<div class='latest-products'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='section-heading'>
                <h2>".$row["name"]."</h2>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                '>More Details <i class='fa fa-angle-right'></i></a>
              </div>
            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>

              <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."



                '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

              </div>
            </div>

            <div class='col-lg-4 col-md-6'>

            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>
                <a href='car-details.html'></a>
                <div class='down-content'>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                  '><h4>".$row["des"]."</h4></a>

                  <h6><small><del>LKR&nbsp;".$row["price"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                  <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                  <small>
                    <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                  </small>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>";
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
}

}


/*=========================================================================================================================================================================*/

class hybrid
{
  function get_from_hybrid()
  {
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


    $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE type='hybrid'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "
  <table >




            </table>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {



      echo "<div class='latest-products'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='section-heading'>
                <h2>".$row["name"]."</h2>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                '>More Details <i class='fa fa-angle-right'></i></a>
              </div>
            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>

              <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."



                '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

              </div>
            </div>

            <div class='col-lg-4 col-md-6'>

            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>
                <a href='car-details.html'></a>
                <div class='down-content'>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                  '><h4>".$row["des"]."</h4></a>

                  <h6><small><del>LKR&nbsp;".$row["price"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                  <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                  <small>
                    <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                  </small>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>";
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
}

}



/*=========================================================================================================================================================================*/

class truck
{
  function get_from_truck()
  {
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


    $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE type='truck'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "
  <table >




            </table>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {



      echo "<div class='latest-products'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='section-heading'>
                <h2>".$row["name"]."</h2>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                '>More Details <i class='fa fa-angle-right'></i></a>
              </div>
            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>

              <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."



                '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

              </div>
            </div>

            <div class='col-lg-4 col-md-6'>

            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>
                <a href='car-details.html'></a>
                <div class='down-content'>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                  '><h4>".$row["des"]."</h4></a>

                  <h6><small><del>LKR&nbsp;".$row["price"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                  <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                  <small>
                    <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                  </small>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>";
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
}

}



/*=========================================================================================================================================================================*/

class sadan
{
  function get_from_sadan()
  {
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


    $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE type='sadan'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "
  <table >




            </table>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {



      echo "<div class='latest-products'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='section-heading'>
                <h2>".$row["name"]."</h2>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                '>More Details <i class='fa fa-angle-right'></i></a>
              </div>
            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>

              <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."



                '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

              </div>
            </div>

            <div class='col-lg-4 col-md-6'>

            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>
                <a href='car-details.html'></a>
                <div class='down-content'>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                  '><h4>".$row["des"]."</h4></a>

                  <h6><small><del>LKR&nbsp;".$row["price"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                  <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                  <small>
                    <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                  </small>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>";
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
}

}



/*=========================================================================================================================================================================*/

class crossover
{
  function get_from_crossover()
  {
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


    $sql = "SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE type='crossover'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "
  <table >




            </table>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {



      echo "<div class='latest-products'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='section-heading'>
                <h2>".$row["name"]."</h2>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                '>More Details <i class='fa fa-angle-right'></i></a>
              </div>
            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>

              <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."



                '>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</a>

              </div>
            </div>

            <div class='col-lg-4 col-md-6'>

            </div>
            <div class='col-lg-4 col-md-6'>
              <div class='product-item'>
                <a href='car-details.html'></a>
                <div class='down-content'>

                <a href='vehicledetails.php?type=".$row["type"]." && name=".$row["name"]." && price=".$row["price"]." && Engine_capacity=".$row["Engine_capacity"]." && Petrol_Desel=".$row["Petrol_Desel"]."

                  && Manufactured_year=".$row["Manufactured_year"]." && Used_Brandnew=".$row["Used_Brandnew"]." && Milage=".$row["Milage"]." && Horse_power=".$row["Horse_power"]." && Manual_auto=".$row["Manual_auto"]."

                  && des=".$row["des"]." && seller_name=".$row["seller_name"]." && email=".$row["email"]." && tel=".$row["tel"]." && extra_info=".$row["extra_info"]." && id=".$row["id"]."


                  '><h4>".$row["des"]."</h4></a>

                  <h6><small><del>LKR&nbsp;".$row["price"]."<BR></del></small>LKR&nbsp;".$row["price"]."</h6>

                  <p>".$row["Engine_capacity"]."&nbsp; hp &nbsp;/&nbsp; ".$row["Petrol_Desel"]." &nbsp;/&nbsp; ".$row["Manufactured_year"]." &nbsp;/&nbsp; ".$row["Used_Brandnew"]."</p>

                  <small>
                    <strong title='Author'><i class='fa fa-dashboard'></i> ".$row["Milage"]."</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Author'><i class='fa fa-cube'></i>".$row["Horse_power"]." </strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='Views'><i class='fa fa-cog'></i> ".$row["Manual_auto"]."</strong>
                  </small>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>";
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
}

}




   ?>
