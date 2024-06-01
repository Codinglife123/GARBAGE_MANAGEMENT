<?php
include 'connection.php';
session_start();

$file = $_SESSION['file'];

// echo $wid;

if (isset($_POST['submit'])) {
//   $name = $_POST['name'];
  $lat = $_POST['latitude'];
  $lon = $_POST['longitude'];
  // echo $lat;

// $lat = 20.8384994;
// $lon = 84.3187631;
  //echo "User Has submitted the form and entered this name : <b> $name </b>";
//   echo "<br>Latitude: $lat.";
//   echo "<br>Longitude: $lon.";

  $sql = "UPDATE public_work SET latitude = '$lat',longitude = '$lon' WHERE image='$file'";

  $result = mysqli_query($conn, $sql);

  header('Location: garbage-rqst.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      var x = document.getElementById("demo");
      function getLocation()
      {
        if (navigator.geolocation)
        {
          navigator.geolocation.getCurrentPosition(bindPosition);
        }
        else {
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }
      function bindPosition(position) {
        $("input[name='latitude']").val(position.coords.latitude);
        $("input[name='longitude']").val(position.coords.longitude);
      }
    </script>
      <style>
         body {
   background-image:url('69.jpg');
  
}


.grid{
    padding: 7% 15%;
    text-align: center;
  
}
.he{
  text-align :center;
  font-size: large;
  font-weight: bold;
  margin-top: 30px;
  color: white;
}

.cen{
  text-align: center;
}



        </style>
  </head>
  <body onload="getLocation()">
  <div class="container-fluid hello">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                GARBAGE MANAGEMENT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active a1" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="./About2.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="contactForm.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="disposal.html">Our Mission</a>
                    </li>
            </ul>
          </div>
        </div>
    </nav>
</div>
<div class="container cen">

    <form id="form1" name="form1" method="post" action="">
        <label class="he">WE WANT YOUR CURRENT LOCATION</label>
        <br><br>
        <input type='hidden' value='' name='latitude'/>
        <input type='hidden' value='' name='longitude'/>
        <input type="submit" name="submit" id="submit" class="btn btn-danger btn-lg"value="Submit Info"/>
      </p>
    </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
  </body>
</html>