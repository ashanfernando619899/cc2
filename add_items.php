<?php
//include('lib/data.php');


class suv
{
  public $name;
  public $des;
  public $price;
  public $type;
  public $hp;
  public $pet;
  public $myear;
  public $condition;
  public $milage;
  public $ecapacity;
  public $manual;
  public $image;
  public $image2;
  public $image3;
  public $image4;
  public $sname;
  public $semail;
  public $stel;
  public $sinfo;
  public $status;

  function insert_into_image()
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


    $sql="insert into vehicles
    (name,des,price,type,Horse_power,Petrol_Desel,Manufactured_year,Used_Brandnew,Milage,Engine_capacity,Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,status)

    values('$this->name','$this->des','$this->price',
           '$this->type','$this->hp','$this->pet',
           '$this->myear','$this->condition',
           '$this->milage','$this->ecapacity',
           '$this->manual','$this->image',
            '$this->image2','$this->image3',
              '$this->image4','$this->sname','$this->semail','$this->stel','$this->sinfo','$this->status'


           )";


      if ($conn->query($sql) === TRUE)
      {
        echo '<script type="text/javascript">';
        echo ' alert("Advert Added successfully")';  //not showing an alert box.
        echo '</script>';
      }

      else
      {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

      }

  }


  class contactus
  {
    public $name;
    public $des;

    public $hp;

    public $myear;


    function insert_into_image()
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


      $sql="insert into enquiries
      (name,email,subject,enquiry)

      values('$this->name','$this->des','$this->hp',
             '$this->myear'


             )";


        if ($conn->query($sql) === TRUE)
        {
          echo '<script type="text/javascript">';
          echo ' alert("Enquiry sent successfully")';  //not showing an alert box.
          echo '</script>';
        }

        else
        {
           echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        }

    }

    class contactusbuyer
    {
      public $name;
      public $des;

      public $hp;

      public $myear;


      function insert_into_image()
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


        $sql="insert into enquiriesbuyer
        (name,email,subject,enquiry)

        values('$this->name','$this->des','$this->hp',
               '$this->myear'


               )";


          if ($conn->query($sql) === TRUE)
          {
            echo '<script type="text/javascript">';
            echo ' alert("Enquiry sent successfully")';  //not showing an alert box.
            echo '</script>';
          }

          else
          {
             echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();

          }

      }







 ?>
