<?php 
    $connection = mysqli_connect("localhost", "root", "pulkit2608", "Echo");
    mysqli_select_db($connection, "echo");
    if(!$connection)
        die("Could not connect: ".mysqli_connect_error());
    else
        //echo "Connection Established";
?>