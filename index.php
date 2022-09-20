<?php include "db_conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FreeFolio - Freelancer Portfolio Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->

    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">1983</span>px</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="login.php" class="nav-item nav-link">Upload</a>
               
            </div>
            <!-- <a href="" class="btn btn-menu d-none d-lg-block" style="background-color:#457efa; color: #ffffff;">Hire Me</a> -->
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hello, my name</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;">Nandalal</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">welcome to, my personal gallery</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <!-- <a href="" class="btn btn-white mr-4">Download CV</a>

                        <a href="" class="btn btn-blue d-none d-sm-block">Play Video</a> -->
                    </div>
                </div>
                <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/user.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Portfolio Start -->
    <!-- <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container"> -->
            <div class="position-relative d-flex align-items-center justify-content-center" id="base">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">1983px</h1>
            </div>





            <div id="main">
                <div class="contain">

                    <?php
                    $conn = mysqli_connect("railway","containers-us-west-80.railway.app","IydtOL4J7OXSWWHwDfVT","root","mysql");


//                     $conn = mysqli_connect('localhost', 'root', '', 'test_db');

                    $query  = "SELECT * FROM images";

                    $run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($run) > 0) {

                        while ($row = mysqli_fetch_array($run)) {

                            $image = $row['image_url']; ?>



                            <div class="gallery-container ">

                                <div class="image">

                                    <a href="uploads/<?php echo $image; ?>" data-lightbox="image-1">

                                        <img src="uploads/<?php echo $image; ?>" data-lightbox="image-1">

                                    </a>
                                </div>
                            </div>
                    <?php

                        }
                    }



                    ?>

                </div>
            </div>
        </div>
    </div>






                <!-- Footer Start -->
                <div class="container-fluid bg-primary text-white mt-5 py-1 px-sm-1 px-md-5">
                    <div class="container text-center py-5">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a class="text-white" href="#">Privacy</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#">Terms</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#">FAQs</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#">Help</a>
                        </div>
                        <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">nandxlal</a>. All Rights Reserved. 
                        </p>
                    </div>
                </div>
                <!-- Footer End -->

                <!-- Scroll to Bottom -->
                 <!-- <a href="#Upload" class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i></a> -->
                <!-- <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom scroll-down "></i> -->
                   <a href="#base">
      <div class="scroll-down"></div>
    </a>
<!-- <a href="#Upload" class ="scroll-down"></a> -->
                <!-- Back to Top -->
                <a href="#Home" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


                <!-- JavaScript Libraries -->
                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                <script src="lib/typed/typed.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/isotope/isotope.pkgd.min.js"></script>
                <script src="lib/lightbox/js/lightbox.min.js"></script>

                <!-- Contact Javascript File -->
                <script src="mail/jqBootstrapValidation.min.js"></script>
                <script src="mail/contact.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
</body>

</html>
