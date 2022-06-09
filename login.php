<?php
session_start();
include_once ("database.php");
if (isset($_POST['login'])){
    extract($_REQUEST);
    $en_pass = md5($password);
    $login_query = "SELECT * FROM `agents` WHERE `email` = '$email' AND `password` = '$en_pass'";
    $result = mysqli_query($con,$login_query);
    $num_of_rows = mysqli_num_rows($result);
    if ($num_of_rows == 1){
        //$_SESSION['login'] = true;
        $_SESSION['email'] = $email;
        header("location: agent_dashboard.php");
    }else{
        $_SESSION['errorMessage'] = "Invalid Credential";
        header("location: signin.html");
    }
}