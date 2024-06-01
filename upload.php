<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <style>  body {
   background-image:url('69.jpg');
  
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


	<div id="content" class="container">
		<form method="POST" action="image-upload.php" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>
