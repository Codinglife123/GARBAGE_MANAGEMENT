<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Clean Odisha</title>
    <style>
        body {
   background-image:url('69.jpg');
  
}
        </style>
  </head>
  <body>
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
                        <a class="nav-link a1" href="../About2.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="disposal.html">Our Mission</a>
                    </li>
            </ul>
          </div>
        </div>
    </nav>
</div>
    <div class="container">
    <form class="row g-3" action="public-reqst-check.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NAME</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="Address" id="inputAddress" placeholder="1234 Main St" Required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control"  id="inputCity" value="BHUBANESWAR" disabled>
    <input type="text" class="form-control" name="city" id="inputCity" value="BHUBANESWAR" hidden>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" >AREA/UNIT</label>
    <select id="inputState" name="unit" class="form-select">
      <option selected>Choose...</option>
      <option value="UNIT-1">UNIT-1</option>
      <option value="UNIT-1">UNIT-2</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" Required>
      <label class="form-check-label" for="gridCheck">
        AGREE ALL TERMS AND CONDITION
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">NEXT</button>
  </div>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>