<?php
include_once ("database.php");
if (isset($_POST['create_user'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_nid_number = $_POST['user_nid_number'];
    extract($_REQUEST);
    $target_directory = "user_image/";
    $uploaded_image = $_FILES['image']['tmp_name'];
    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image_name = $name.".".$ext;
    if (move_uploaded_file($uploaded_image,$target_directory.$image_name)){
        $insert_query = "INSERT INTO `user` (`user_name`,`user_phone`,`user_email`,`user_password`,`user_nid_number`,`user_image`) VALUES ('$name','$phone','$email','".md5($password)."','$user_nid_number','$image_name')";
        if (mysqli_query($con,$insert_query)){
            header("location: user_signin.html");
        }
        else{
            echo "Error".mysqli_error($con);
        }
    }
}