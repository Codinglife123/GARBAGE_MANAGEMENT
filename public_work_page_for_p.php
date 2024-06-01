<?php
include 'connection.php';
session_start();
$id = $_SESSION['id'];

$sql = "SELECT*from public_work,public_data WHERE public_work.id = public_data.id AND public_work.id=$id";

$result = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .a1{
            text-decoration: none;
            color: white;

        }
        .a1:hover{
            color: whitesmoke;
        }
        
            </style>
</head>

<body>
<div class="container-fluid ">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 p-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="./logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
<div class="container-fluid">
    <div class="text-center">
        <h1>PUBLIC REQUEST PAGE</h1>
      </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">work id</th>
                <th scope="col">Address</th>
                <th scope="col">Unit</th>
                <th scope="col">Location</th>
                <th scope="col">Garbage photos</th>
                <th scope="col">Date</th>
                <!-- <th scope="col">Public id</th> -->
                <th scope="col">Status</th>
                <!-- <th scope="col">Employee assign</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
               while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td scope="row"><?php echo $row['fname'] ?></td>
                <td scope="row"><?php echo $row['lname'] ?></td>
                <td><?php echo $row['wid'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['UNIT'] ?></td>
                <td><button type="button" class="btn btn-success"><a class="a1" href="muncipalty/maps_plot.php?id=<?php echo $row['wid']; ?>">view</a></button></td>
                <td><button type="button" class="btn btn-success"><a class="a1" href="public-garbage-image/<?php echo $row['image'] ?>">view</a></button></td>
                <td><?php echo $row['idate'] ?></td>
                <td><?php echo $row['status'] ?><td>
                <!-- <td><?php //echo $row['employee'] ?></td> -->
            </tr>
            <?php
            }
            ?>
            </tbody>
    </table>
        </div>
     
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>


</body>

</html>