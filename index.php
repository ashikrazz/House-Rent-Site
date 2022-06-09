<?php include_once ("database.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>House Rent | Home</title>
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
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="aa-header-left">
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
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="aa-header-right">
                                <a href="admin_login.html" class="aa-login">Admin Login</a>
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
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li class="active"><a href="index.php">HOME</a></li>
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

<!-- Start slider  -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <!-- Top slider -->
        <div class="aa-top-slider">
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/slider/3.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/slider/2.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/slider/1.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/slider/5.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/slider/4.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <div class="aa-top-slider-single">
                <img src="img/slider/6.jpg" alt="img">
            </div>
            <!-- / Top slider single slide -->
        </div>
    </div>
</section>
<!-- End slider  -->

<!-- About us -->
<section id="aa-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-about-us-area">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="aa-about-us-left">
                                <img src="img/about-us.jpg" alt="image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="aa-about-us-right">
                                <div class="aa-title">
                                    <h2>About Us</h2>
                                    <span></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / About us -->

<!-- Latest property -->
<section id="aa-latest-property">
    <div class="container">
        <div class="aa-latest-property-area">
            <div class="aa-title">
                <h2>Latest Agent Properties</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <div class="aa-latest-properties-content">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM `create_post` ORDER BY `post_id` DESC LIMIT 6";
                    $posts = mysqli_query($con,$query);
                    $count = 1;
                    while ($row = mysqli_fetch_array($posts)){
                    ?>
                    <div class="col-md-4">
                        <article class="aa-properties-item">
                            <a href="properties-detail.php?id=<?php echo $row['post_id']?>" class="aa-properties-item-img">
                                <img src="post_image/<?php echo $row['post_image'] ?>" alt="img" height="240px" width="370px">
                            </a>
                            <div class="aa-properties-item-content">
                                <div class="aa-properties-info">
                                    <span>For : <?php echo $row['post_category'] ?></span>
                                    <span>Type : <?php echo $row['post_type'] ?></span>
                                    <span>Sublet : <?php echo $row['sublet'] ?></span>
                                </div>
                                <div class="aa-properties-about">
                                    <h3><a href="properties-detail.php?id=<?php echo $row['post_id']?>"><?php echo $row['post_title'] ?></a></h3>
                                    <p><?php echo $row['post_description'] ?></p>
                                </div>
                                <div class="aa-properties-detial">
                    <span class="aa-price">
                      <?php echo $row['price'] ?> BDT/month
                    </span>
                                    <a class="aa-secondary-btn" href="properties-detail.php?id=<?php echo $row['post_id']?>">View Details</a>
                                </div>
                            </div>
                        </article>
                    </div>
                        <?php
                        $count++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="aa-latest-property">
    <div class="container">
        <div class="aa-latest-property-area">
            <div class="aa-title">
                <h2>Latest User Properties</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <div class="aa-latest-properties-content">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM `create_user_post` ORDER BY `user_post_id` DESC LIMIT 6";
                    $posts = mysqli_query($con,$query);
                    $count = 1;
                    while ($row = mysqli_fetch_array($posts)){
                        ?>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="user_properties-detail.php?id=<?php echo $row['user_post_id']?>" class="aa-properties-item-img">
                                    <img src="post_image/<?php echo $row['user_post_image'] ?>" alt="img" height="240px" width="370px">
                                </a>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>For : <?php echo $row['user_post_category'] ?></span>
                                        <span>Type : <?php echo $row['user_post_type'] ?></span>
                                        <span>Sublet : <?php echo $row['sublet'] ?></span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="user_properties-detail.php?id=<?php echo $row['user_post_id']?>"><?php echo $row['user_post_title'] ?></a></h3>
                                        <p><?php echo $row['user_post_description'] ?></p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            <?php echo $row['price'] ?> BDT/month
                                        </span>
                                        <a class="aa-secondary-btn" href="user_properties-detail.php?id=<?php echo $row['user_post_id']?>">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php
                        $count++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Latest property -->

<!-- Service section -->
<section id="aa-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-service-area">
                    <div class="aa-title">
                        <h2>Our Service</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                    </div>
                    <!-- service content -->
                    <div class="aa-service-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Flat Rent</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Room Rent</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Seat Rent</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="aa-single-service">
                                    <div class="aa-service-icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <div class="aa-single-service-content">
                                        <h4><a href="#">Floor Rent</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Service section -->

<!-- Promo Banner Section -->
<section id="aa-promo-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-banner-area">
                    <h3>Find Your Best Property for Rent</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
                    <a href="properties.html" class="aa-view-btn">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo Banner Section -->

<!-- Our Agent Section-->
<section id="aa-agents">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-agents-area">
                    <div class="aa-title">
                        <h2>Our Agents</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
                    </div>
                    <!-- agents content -->
                    <div class="aa-agents-content">
                        <ul class="aa-agents-slider">
                            <?php
                            $query = "SELECT * FROM `agents` ORDER BY `agent_id` DESC ";
                            $agents = mysqli_query($con,$query);
                            $count = 1;
                            while ($row = mysqli_fetch_array($agents)){
                                ?>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="image/<?php echo $row['image']?>" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#"><?php echo $row['name']?></a></h4>
                                            <span><?php echo "Agent"?></span>
                                            <span><?php echo $row['phone'] ?></span>
                                            <span><?php echo $row['email'] ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                $count++;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Our Agent Section-->

<!-- Client Testimonial -->
<section id="aa-client-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-testimonial-area">
                    <div class="aa-title">
                        <h2>What Client Say</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
                    </div>
                    <!-- testimonial content -->
                    <div class="aa-testimonial-content">
                        <!-- testimonial slider -->
                        <ul class="aa-testimonial-slider">
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="img/testimonial-1.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>David Muller</p>
                                        <span>Businessman</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="img/testimonial-3.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>Jessica Wrake</p>
                                        <span>University Student</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="aa-testimonial-single">
                                    <div class="aa-testimonial-img">
                                        <img src="img/testimonial-2.png" alt="testimonial img">
                                    </div>
                                    <div class="aa-testimonial-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                    </div>
                                    <div class="aa-testimonial-bio">
                                        <p>Alex Mica</p>
                                        <span>Employee</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Testimonial -->

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