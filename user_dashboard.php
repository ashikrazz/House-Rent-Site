<?php
session_start();
include_once ("database.php")?>
<?php
$check = $_SESSION['email'];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>House Rent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="user_dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="create_user_post.php">Create Post</a></li>
                <li class="breadcrumb-item"><a href="user_logout.php">Logout</a></li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="row gutters-sm">
            <?php
            $query = "SELECT * from `user` WHERE `user_email`='$check';";
            $result = mysqli_query($con,$query);
            $res = mysqli_fetch_array($result);
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="user_image/<?php echo $res['user_image']?>" alt="User" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?php echo $res['user_name'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $res['user_name'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $res['user_email'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $res['user_phone'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">NID Number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $res['user_nid_number'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">User ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $res['user_id'] ?>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>