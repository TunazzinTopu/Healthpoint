<?php

    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'healthdb';

     $link = mysqli_connect($host,$username,$password,$db);

        // if(!$link)
       //  {
            echo mysqli_connect_error();
        // }
      //  else
        // {
        //   echo 'connected';
         //   echo '<br>';
        // }
    

?>