<?php
session_start();

include 'dbConnect.php';


mysqli_close($link);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Healthpoint</title>

  <script src="https://kit.fontawesome.com/1c17e31fd4.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->


  <link rel="stylesheet" href="css/style.css" />


  <link rel="stylesheet" media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">


</head>

<body class="home-body">

  <?php

  include 'header.php';

  ?>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/ind1.jpg')">
          <div class="carousel-caption">
          

          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/ind5.jpg')">
          <div class="carousel-caption ">
           

          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/ind3.jpg')">
          <div class="carousel-caption">
           
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


  <!-- Page Content -->
  <div class="gap" </div>

         <div class="container">
		
		  
		   <div class="blog_text_"> Login for Details</div>
		
            <div class="row">
                <div class="col-md-4 col-sm-6 p_0 ">
                    <div class="  image_fulwidth text-center  border " >
                        <img src="images/blog1.png" alt="images">
                        <h3 class="inner_text">Register And Book Appointment</h3>
                        <a href="signup.php">Click Here</a>

                    </div>
                </div><!--col-md-4 -->

                <div class="col-md-4 col-sm-6 p_0">
                    <div class="  image_fulwidth text-center  border" >
                        <img src="images/blog2.png" alt="images">
                        <h3 class="inner_text">Register as a Doctor</h3>
                        <a href="signupDoctor.php">Click Here</a>
						
                    </div>
                </div><!--col-md-4 -->

                <div class="col-md-4 col-sm-6 p_0 "> 
                    <div class="  image_fulwidth text-center  border" >
                        <img src="images/blog3.png" alt="images">
                        <h3  class="inner_text">Admin Registration</h3>
                        <a href="login.php">Click Here</a>

						</div>
						
                    </div>
                </div><!--col-md-4 -->
				 
            </div><!--row -->
        </div><!--container-fluid -->
   
  
  
<div class="gap" </div>

  <section>
    <?php

    include 'footer.php';

    ?>


  </section>


  <!-- /.container -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"> </script>


  <script>
    $(document).ready(function() {
      // executes when HTML-Document is loaded and DOM is ready
      console.log("document is ready");

      // document ready  
    });
  </script>


</body>

</html>