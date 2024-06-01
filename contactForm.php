<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        .hello{
    margin: 0;
    padding:0;
}
    .he{
            font-weight: bold;
            background-color: lightgray;
            opacity:0.9;
        }
        .send{
            margin-top: 25px;
        }
        
       .he{
            margin-top: 20px;
        }
       
        body {
   background-image:url('69.jpg');
  
}
    </style>
</head>
<body>
    <div class="container-fluid hello">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mp-0">
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
<div class="container he" style="border:2px solid black">
    <h1 class="h1-responsive font-weight-bold text-center my-4">Contact us</h1><hr>

    <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    
    <!--Section description-->
    <h3 class="text-center w-responsive mx-auto mb-5"><strong>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</strong></h3>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <!-- <form  action="mailto:skgarena120@gmail.com"id="contact-form" name="contact-form" method="POST"> -->
                <form action="mailto:biswajitmahapatra833@gmail.com" method="post" enctype="text/plain">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                           
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary send" placeholder="submit" onclick="alert('clicked')">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Bhubaneswar,India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+918117830811</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>techforindia@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>