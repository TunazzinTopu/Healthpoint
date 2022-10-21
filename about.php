<?php
session_start();

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
    <title>About</title>
	
	<link rel ="stylesheet" type="text/css" href="css/aboutstyle.css"/>

    <script src="https://kit.fontawesome.com/1c17e31fd4.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css" />


    <link rel="stylesheet" media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">


</head>


<body class="about-body">

    <section class="header">
        <?php
        include 'header.php';
        ?>
    </section>


    <section class="about-content layer">
        <div class="container  justify-content-center justify-content-sm-between justify-content-md-between">
            <!-- <h2 class="display-4 recipe-section-title text-center">About Us</h2> -->
            <h2 class="display-4 about-section-title text-center px-5">About Project</h2>
            <div class="about-us-intro">

                <p class="display-4 text-center">
                    Our website is providing the oportunity to manage appointment of doctors worldwide via internet.You don't need any manual process for that.Visit Out website,create a accout to manage appointment.
                </p>

            </div>




            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-8 col-8 mb-3 text-center">

                    <div class="about-us-card">
                      

                        <div class="col-md-6 about-us-member-info pt-2 pb-1 px-4">
                            <p class="m-0">Tunazzin Rahman Topu</p>
							<p class="m-0"> +880 1706465506</p>
                        </div>

                        <div class="member-social pb-2 px-4">
                            <a href="https://www.facebook.com/tunazzin.rahman"><i class="fab fa-facebook-f fa-2x mr-3 footer-social-info"></i></a>
                            <a href="#"><i class="fab fa-pinterest fa-2x mr-3 footer-social-info"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x mr-3 footer-social-info"></i></a>
                            <a href="#"><i class="fab fa-linkedin fa-2x mr-3 footer-social-info"></i></a>

                        </div>

                    </div>


                </div>

                <div class="col-lg-6 col-md-6 col-sm-8 col-8 mb-3 text-center">

                    <div class="about-us-card">
                        

                        <div class="col-md-6 about-us-member-info pt-2 pb-1 px-4">
                            <p class="m-0"> &nbsp;  Salman Ur Rahman Symon</p>
							<p class="m-0"> +880 1778307646</p>
                        </div>

                        <div class="member-social pb-2 px-4">
                            <a href="https://www.facebook.com/salman.saimon46"><i class="fab fa-facebook-f fa-2x mr-3 footer-social-info"></i></a>
                            <a href="#"><i class="fab fa-pinterest fa-2x mr-3 footer-social-info"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x mr-3 footer-social-info"></i></a>
                            <a href="#"><i class="fab fa-linkedin fa-2x mr-3 footer-social-info"></i></a>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section>




    <section class="footer">
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
            $(".card").hover(
                function() {
                    $(this).addClass('shadow-lg').css('cursor', 'pointer');
                },
                function() {
                    $(this).removeClass('shadow-lg');
                }
            );




            // document ready  
        });
    </script>


</body>

</html>