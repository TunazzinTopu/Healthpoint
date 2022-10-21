<?php


session_start();

include 'dbConnect.php';

$name = $phoneNo = $message = '';
$nameErr = $phoneNoErr = $messageErr = '';
$success ='';

if (!empty($_POST)) {
    if (!empty(trim($_POST['name']))) {
        $name = htmlspecialchars($_POST['name']);
    }

    if (!empty(trim($_POST['phoneNo']))) {
        $phoneNo = htmlspecialchars($_POST['phoneNo']);
    }

    if (!empty(trim($_POST['message']))) {
        $message = htmlspecialchars($_POST['message']);
    }

    $Time = date("Y-m-d H:i:s");

    $sql  = 'insert into contactus (Name, PhoneNo, Message, Time) values ("'.$name.'","'.$phoneNo.'","'.$message.'","'.$Time.'")';

    $resultInsert = mysqli_query($link, $sql);

    if ($resultInsert) {
        $success = '<div class="alert alert-success" role="alert" style="width:100%">Thank You! Wait for our response.</div>';
        unset($_POST);
        $name = $phoneNo = $message = '';
    } else {
        $success = '<div class="alert alert-danger" role="alert">Unable to submit. Please try again. </div>';
      
    }
}


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
    <title>Contact Us</title>

    <script src="https://kit.fontawesome.com/1c17e31fd4.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css" />


    <link rel="stylesheet" media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">



</head>

<body class="">



    <section class="header">
        <?php
        include 'header.php';
        ?>
    </section>

    <section class="contact-body">

        <div class="container layer3" style="padding-bottom: 100px; padding-top: 80px;">
            <div class="row  justify-content-center">
                <div class="col-8">
                    <div class="login-header">
                        <p class="display-4 text-center">
                            Contact Us
                        </p>
                        <hr class="bg-light">
                        <!-- <h3 class="display-5 text-center">You can give us feedback as well</h3> -->
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="form-row">
                        <div class="col-md-12 ">
                            <?php echo $success; ?> 
                        </div>
                    </div>
                </div>
            </div>


            <form method="post">
                <div class="row  justify-content-center" style="">
                    <div class="col-6">
                        <div class="form-row">
                            <div class=" col-md-12 mb-3 justify-content-center">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" value="<?php echo htmlspecialchars($name) ?>" required>
                                <div class="validation-error-red">
                                    <?php echo "<p>" . $nameErr . "</p>"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="col-md-12 mb-3 justify-content-center">
                                <label for="phoneNo">Phone No.</label>
                                <input type="tel" class="form-control " id="phoneNo" pattern="^\d{11}" name="phoneNo" placeholder="Phone No" required title="Phone no must be 11 digits long" value="<?php echo htmlspecialchars($phoneNo) ?>">
                                <div class="validation-error-red">
                                    <?php echo "<p>" . $phoneNoErr . "</p>"; ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                

                <div class="row justify-content-center">
                    <div class="col-6">  
                    <div class="form-row">
                            <div class="col-md-12 mb-3 justify-content-center">
                                <label for="message">Message</label>
                                <textarea class="form-control rounded-0" id="message" name="message" rows="3" value="<?php echo htmlspecialchars($message) ?>" required></textarea>
                                <div class="validation-error-red">
                                    <?php echo "<p>" . $messageErr . "</p>"; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row justify-content-center" style="margin-top : 30px;">
                    <div class="col-6">
                        <button class="btn btn-message" style="width: 100%; font-size:20px;" type="submit">Send Message</button>
                    </div>
                </div>


            </form>

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
                    $(this).addClass('shadow-lg1').css('cursor', 'pointer');
                },
                function() {
                    $(this).removeClass('shadow-lg1');
                }
            );

            // document ready  
        });
    </script>


</body>

</html>