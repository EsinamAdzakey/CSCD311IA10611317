<?php


    session_start();
    $connection = mysqli_connect("localhost:3306","root","","loginpage");

    if(mysqli_connect_error()){
        echo "failed to connect". mysqli_connect_error();
    }

    

?>