<?php
    $con = mysqli_connect("localhost", "root", "usbw", "pharmacy");


    if(!$con){
        echo "<h1>CONNECTION failed</h1>";
        die();
    }
?>