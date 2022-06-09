<?php
session_start();
include_once ("database.php");
if (isset($_POST['user_login'])){
    extract($_REQUEST);
    $en_pass = md5($password);
    $login_query = "SELECT * FROM `user` WHERE `user_email` = '$email' AND `user_password` = '$en_pass'";
    $result = mysqli_query($con,$login_query);
    $num_of_rows = mysqli_num_rows($result);
    if ($num_of_rows == 1){
        //$_SESSION['login'] = true;
        $_SESSION['email'] = $email;
        header("location: user_dashboard.php");
    }else{
        $_SESSION['errorMessage'] = "Invalid Credential";
        header("location: user_signin.html");
    }
}