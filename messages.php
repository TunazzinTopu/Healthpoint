<?php

include 'dbConnect.php';


$sql = "select * from contactus order by Time";

$result = mysqli_query($link, $sql);

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
    <title>Bootstrap</title>

    <script src="https://kit.fontawesome.com/1c17e31fd4.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css" />


    <link rel="stylesheet" media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">


</head>

<body>

    <section>

        <?php
        include 'header.php';
        ?>

    </section>

    <section class="content" style="margin-top: 200px;">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <h2 class="display-4 text-center"> Messages </h2>
                     <hr class="bg-light">

                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone no.</th>
                                <th>Message</th>
                                <th>Date & Time</th>
                            </tr>

                        </thead>


                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                            <tbody>

                                <?php

                                    if (!empty($row)) {
                                        echo '<tr>';

                                        foreach ($row as $key => $value) {
                                            echo '<td>';
                                            echo $value;
                                            echo '</td>';
                                        }

                                        echo '</tr>';

                                        

                                    }
                                    ?>

                            </tbody>

                        <?php
                        }
                        ?>

                    </table>

                </div>

            </div>

        </div>


    </section>

    <section >
    <?php
        include 'footer.php';
        ?>      
    </section>


</body>

</html>