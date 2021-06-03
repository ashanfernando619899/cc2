

<?php

class aproved{

public $id;


function insert_into_aprove()
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

echo $id;
$sql="UPDATE vehicles SET status = 'aproved' WHERE id = $id  ";

  if ($conn->query($sql) === TRUE)
  {
    echo "New record updated successfully";
  }

  else
  {
     echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  }


}






   ?>
