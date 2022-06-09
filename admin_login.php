<?php
session_start();
include_once ("database.php");
if (isset($_POST['admin_login'])){
    extract($_REQUEST);
    $en_pass = $password;
    $login_query = "SELECT * FROM `admin` WHERE `admin_email` = '$email' AND `admin_password` = '$en_pass'";
    $result = mysqli_query($con,$login_query);
    $num_of_rows = mysqli_num_rows($result);
    if ($num_of_rows == 1){
        $_SESSION['admin_login'] = true;
        header("location: Admin/dashboard.php");
        echo "log in done";
    }else{
        $_SESSION['errorMessage'] = "Invalid Credential";
        header("location: admin_login.html");
    }
}