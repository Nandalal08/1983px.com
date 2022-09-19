

<style>
#inpt
{
margin-bottom: 80px;
/* margin-left: 20px; */
margin-top: 20px;
}
 .bg-gradient-primar {
    background-color:  #DD517F;
    /* background-image: linear-gradient(180deg,#000000 10%,#060606 100%); */
    background-size: cover;
} 

.bg-login-imag {
  background: url("https://source.unsplash.com/600x800/?aesthetic"); 
  background-position: center;
  background-size: cover;
}

</style>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
   <link href="sbb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbb/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primar">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                             <div class="col-lg-6 d-none d-lg-block bg-login-imag"></div> 
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hey nandhu !! <br>
                                          upload your image....</h1>
                                    </div>


    <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
<br>
           <input type="file" name="my_image" id="inpt">
                  <!-- <br>
                  <br>
                  <br> -->
                  <!-- <br -->
                  <spans style ="padding-bottom:120px"></span>

           <input type="submit" name="submit" id="inpt" value="Upload"> 
     	



                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="sbb/vendor/jquery/jquery.min.js"></script>
    <script src="sbb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sbb/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sbb/js/sb-admin-2.min.js"></script>

</body>

</html>


        