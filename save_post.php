<?php
include_once ("database.php");
if (isset($_POST['submit'])){
    extract($_REQUEST);
    $target_directory = "post_image/";
    $uploaded_image = $_FILES['post_image']['tmp_name'];
    $ext = pathinfo($_FILES['post_image']['name'],PATHINFO_EXTENSION);
    $image_name = $post_title.".".$ext;
    if(move_uploaded_file($uploaded_image,$target_directory.$image_name)){
        $insert_query = "INSERT INTO `create_post`(`post_title`,`post_description`,`post_image`,`post_category`,`post_type`,`sublet`,`month`,`district`,`area_name`,`address`,`price`,`negotiable`,`agent_id`) VALUES ('$post_title','$post_description','$image_name','$category','$post_type','$sublet','$month','$district','$area_name','$address','$price','$negotiable','$agent_id')";
        if (mysqli_query($con,$insert_query)){
            header("location: agent_dashboard.php");
        } else{
            echo "Error".mysqli_error($con);
        }
    }
}