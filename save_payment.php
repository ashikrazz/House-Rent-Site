<?php
include_once ("database.php");
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $method = $_POST['method'];
    $method_number = $_POST['method_number'];
    $amount = $_POST['amount'];
    $p_t_id = $_POST['p_t_id'];
    $date = $_POST['date'];
    extract($_REQUEST);
    $target_directory = "payment_image/";
    $uploaded_image = $_FILES['image']['tmp_name'];
    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image_name = $p_t_id.".".$ext;
    if (move_uploaded_file($uploaded_image,$target_directory.$image_name)){
        $insert_query = "INSERT INTO `payment` (`name`,`email`,`phone`,`type`,`method`,`method_number`,`amount`,`p_t_id`,`date`,`image`) VALUES ('$name','$email','$phone','$type','$method','$method_number','$amount','$p_t_id','$date','$image_name')";
        if (mysqli_query($con,$insert_query)){
            header("location: index.php");
        } else{
            echo "Error".mysqli_error($con);
        }
    }
}