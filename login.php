<?php

    include 'dbConnect.php';


    
    
    $phoneNo = $password = '';
    
    $phoneNoErr = '';
    $loginErr = '';
    $passwordEnc ='';
    $messageToUser = 'Log in';
    
    
    if(isset($_GET['status']))
    {
        $messageToUser = " ";
        unset($_GET['status']);
    }
    
    if ($_POST) {
        if (!empty(trim($_POST['phoneNo']))) {
    
            if (!preg_match('/^\+?\d+$/', $_POST['phoneNo'])) {
                $phoneNoErr = "Invalid Phone No";
            } else {
                $phoneNo = htmlspecialchars(trim($_POST['phoneNo']));
            }
        }
    
        if (!empty(trim($_POST['password']))) {
            $password = htmlspecialchars($_POST['password']);
        }
    
        $sql = 'select * from patients where patientPhone = ' . $phoneNo;
		
		echo $sql;
    
        $result = mysqli_query($link, $sql);
    
    
        $rowNum = mysqli_num_rows($result);
    
        if ($rowNum > 0) 
        {
            $passwordEnc = md5($password);
    
            if($row = mysqli_fetch_assoc($result))
            {
                    session_start();
                    $passwordDB = $row['patientpassword'];
                    $nameDB = $row['patientName'];
                    $phoneNoDB = $row['patientPhone'];
                    $genderDB = $row['patientgender'];
    
                    if(strcmp($passwordDB,$passwordEnc)==0)
                    {
                        $_SESSION['Name'] = $nameDB;
                        $_SESSION['PhoneNo']= $phoneNoDB;
                        $_SESSION['Gender']= $genderDB;
                        
                        header("Location: index.php");
                    }
                    else
                    {
                        $loginErr = "Incorrect Phone no or Password!";
                    }
    
                    mysqli_close($link);
            }
        }
        else
        {
            $loginErr = "Incorrect Phone no or Password!";
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
    <title>Log In</title>

    <script src="https://kit.fontawesome.com/1c17e31fd4.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css" />


    <link rel="stylesheet" media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">



</head>

<body class="login-body">



    <section class="header">
        <?php
        include 'header.php';

        //echo $passwordEnc;

        ?>
    </section>


    <section class="login-content layer2">

        <div class="container layer2" style="padding-bottom: 100px; padding-top: 100px;">

            <div class="login-header">
                <p class="display-4 text-center">
                    <?php
                        echo $messageToUser;
                    ?>
                </p>

            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <hr class="bg-light">
                </div>
            </div>



            <form method="post">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="phoneNo">Phone no</label>
                                <input type="text" class="form-control" id="phoneNo" name="phoneNo" value="<?php echo $phoneNo ?>" placeholder="Phone No" required>
                                <div class="validation-error">
                                    <?php
                                    echo $phoneNoErr;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationDefault04">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>" placeholder="Password" required>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center" style="">
                    <div class="col-6">
                    <div class="validation-error">
                        <?php
                       // echo $passwordEnc."<br>";
                        echo $loginErr;
                        ?>
                    </div>

                    </div>
                </div>
                
                <div class="row justify-content-center" style="margin-top : 30px;">
                    <div class="col-6">
                        <button class="btn btn-login" style="width: 100%; font-size:20px;" type="submit">Login</button>
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