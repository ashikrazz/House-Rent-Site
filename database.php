<?php
    $con = mysqli_connect("localhost","root","","house_rent_database");
    if (!$con){
        die("There is an error try again later.".mysqli_error());
    }
?>