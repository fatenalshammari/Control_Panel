<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_control ="controlpanel";


// Create connection
$conn = new mysqli($servername, $username, $password, $db_control);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['forward'])) {

      $query = "select forward from control";
      $result = mysqli_query($conn, $query);
      if($result == true)
      {
        while($row = $result->fetch_assoc()) {
        echo $row["forward"];
      }
    } else {
      echo "0 results";
    }
  }

  if(isset($_POST['backward'])) {

        $query = "select backward from control";
        $result = mysqli_query($conn, $query);
        if($result == true)
        {
          while($row = $result->fetch_assoc()) {
          echo $row["backward"];
        }
      } else {
        echo "0 results";
      }
    }

    if(isset($_POST['left'])) {

          $query = "select left_ from control";
          $result = mysqli_query($conn, $query);
          if($result == true)
          {
            while($row = $result->fetch_assoc()) {
            echo $row["left_"];
          }
        } else {
          echo "0 results";
        }
      }

      if(isset($_POST['right'])) {

            $query = "select right_ from control";
            $result = mysqli_query($conn, $query);
            if($result == true)
            {
              while($row = $result->fetch_assoc()) {
              echo $row["right_"];
            }
          } else {
            echo "0 results";
          }
        }

        if(isset($_POST['stop'])) {

              $query = "select stop from control";
              $result = mysqli_query($conn, $query);
              if($result == true)
              {
                while($row = $result->fetch_assoc()) {
                echo $row["stop"];
              }
            } else {
              echo "0 results";
            }
          }

    $conn->close();




?>
