<?php
include_once ("database.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>House Rent | User Properties Details</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="aa-price-range">
<!-- Pre Loader -->
<div id="aa-preloader-area">
    <div class="pulse"></div>
</div>
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-left">
                                <div class="aa-telephone-no">
                                    <span class="fa fa-phone"></span>
                                    1-900-523-3564
                                </div>
                                <div class="aa-email hidden-xs">
                                    <span class="fa fa-envelope-o"></span> shikhon@gmail.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="aa-header-right">
                                <a href="register.html" class="aa-register">Agent Register</a>
                                <a href="signin.html" class="aa-login">Agent Login</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="aa-header-right">
                                <a href="user_register.html" class="aa-register">User Register</a>
                                <a href="user_signin.html" class="aa-login">User Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="index.php"> House <span>Rent</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.php"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="properties.php">AGENT PROPERTIES</a></li>
                    <li><a href="user_properties.php">USER PROPERTIES</a></li>
                    <li><a href="agents.php">AGENTS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="payment.html">PAYMENT</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu section -->

<!-- Start Proerty header  -->
<section id="aa-property-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-property-header-inner">
                    <h2>User Properties Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">HOME</a></li>
                        <li class="active">APPARTMENT TITLE</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Proerty header  -->

<!-- Start Properties  -->
<section id="aa-properties">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM `create_user_post` as c ,`user` as a  WHERE c.user_post_id = $id AND c.user_id=a.user_id ";
            $posts = mysqli_query($con,$query);
            $row = mysqli_fetch_array($posts);
            ?>
            <div class="col-md-10">
                <div class="aa-properties-content">
                    <!-- Start properties content body -->
                    <div class="aa-properties-details">
                        <div class="aa-properties-details-img">
                            <img src="post_image/<?php echo $row['user_post_image'] ?>" alt="img">
                        </div>
                        <div class="aa-properties-info">
                            <h2><?php echo $row['user_post_title'] ?></h2>
                            <span class="aa-price"><?php echo $row['price'] ?> BDT/month</span>
                            <h4>Property Details</h4>
                            <p><?php echo $row['user_post_description'] ?></p>
                            <ul>
                                <li>Property For : <?php echo $row['user_post_category'] ?></li>
                                <li>Property Type : <?php echo $row['user_post_type'] ?></li>
                                <li>Sublet : <?php echo $row['sublet'] ?></li>
                                <li>Month : <?php echo $row['month'] ?></li>
                                <li>District : <?php echo $row['district'] ?></li>
                                <li>Name of The Area : <?php echo $row['area_name'] ?></li>
                                <li>Full Address : <?php echo $row['address'] ?></li>
                                <li>Negotiable : <?php echo $row['negotiable']?></li>
                            </ul>
                            <h4>User Contact</h4>
                            <ul>
                                <li>User Name : <?php echo $row ['user_name']?> </li>
                                <li>User Phone : <?php echo $row ['user_phone']?> </li>
                                <li>User Email : <?php echo $row ['user_email']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Properties  -->

<!-- Footer -->
<footer id="aa-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-area">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="aa-footer-left">
                                <p>Designed by Abu Noman Shikhon</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="aa-footer-middle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="aa-footer-right">
                                <a href="index.php">Home</a>
                                <a href="properties.php">Agent Properties</a>
                                <a href="user_properties.php">User Properties</a>
                                <a href="contact.html">Contact</a>
                                <a href="signin.html">Agent Login</a>
                                <a href="register.html">Agent Register</a>
                                <a href="user_signin.html">User Login</a>
                                <a href="user_register.html">User Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / Footer -->

<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="js/nouislider.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<!-- Custom js -->
<script src="js/custom.js"></script>

</body>
</html>