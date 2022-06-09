<?php
include_once ("database.php");
if (isset($_POST['create'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    extract($_REQUEST);
    $target_directory = "image/";
    $uploaded_image = $_FILES['image']['tmp_name'];
    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image_name = $name.".".$ext;
    if (move_uploaded_file($uploaded_image,$target_directory.$image_name)){
        $insert_query = "INSERT INTO `agents` (`name`,`phone`,`email`,`password`,`image`) VALUES ('$name','$phone','$email','".md5($password)."','$image_name')";
        if (mysqli_query($con,$insert_query)){
            header("location: signin.html");
        } else{
            echo "Error".mysqli_error($con);
        }
    }
}