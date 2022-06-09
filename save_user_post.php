<?php
include_once ("database.php");
if (isset($_POST['submit'])){
    extract($_REQUEST);
    $target_directory = "post_image/";
    $uploaded_image = $_FILES['post_image']['tmp_name'];
    $ext = pathinfo($_FILES['post_image']['name'],PATHINFO_EXTENSION);
    $image_name = $post_title.".".$ext;
    if(move_uploaded_file($uploaded_image,$target_directory.$image_name)){
        $insert_query = "INSERT INTO `create_user_post`(`user_post_title`,`user_post_description`,`user_post_image`,`user_post_category`,`user_post_type`,`sublet`,`month`,`district`,`area_name`,`address`,`price`,`negotiable`,`user_id`) VALUES ('$post_title','$post_description','$image_name','$category','$post_type','$sublet','$month','$district','$area_name','$address','$price','$negotiable','$user_id')";
        if (mysqli_query($con,$insert_query)){
            header("location: user_dashboard.php");
        } else{
            echo "Error".mysqli_error($con);
        }
    }
}