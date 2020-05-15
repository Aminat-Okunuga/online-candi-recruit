<?php
include "auto_load.php";
?>

<!doctype html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <!--  <title>Home Page</title> -->
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='img/logo2.png'>
    <!-- Normalize CSS -->
    <link rel='stylesheet' href='css/normalize.css'>
    <!-- Main CSS -->
    <link rel='stylesheet' href='css/main.css'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <!-- Animate CSS -->
    <link rel='stylesheet' href='css/animate.min.css'>
    <!-- Font-awesome CSS-->
    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <!-- Owl Caousel CSS -->
    <link rel='stylesheet' href='vendor/OwlCarousel/owl.carousel.min.css'>
    <link rel='stylesheet' href='vendor/OwlCarousel/owl.theme.default.min.css'>
    <!-- Main Menu CSS -->
    <link rel='stylesheet' href='css/meanmenu.min.css'>
    <!-- nivo slider CSS -->
    <link rel='stylesheet' href='vendor/slider/css/nivo-slider.css' type='text/css'/>
    <link rel='stylesheet' href='vendor/slider/css/preview.css' type='text/css' media='screen'/>
    <!-- Switch Style CSS -->
    <link rel='stylesheet' href='css/hover-min.css'>
    <!-- ReImageGrid CSS -->
    <link rel='stylesheet' href='css/reImageGrid.css'>
    <!-- Custom CSS -->
    <!--  <link rel='stylesheet' href='css/mystyle.css'> -->
    <link rel='stylesheet' type='text/css' href='css/style3.css'>
</head>

<body>
<!-- Header Area Start Here -->
<header>
    <div id='header2' class='header2-area'>
        <div class='header-top-area'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                        <div class='header-top-left'>
                        </div>
                    </div>

                    <!--Login area-->
                    <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 '>
                        <div class='header-top-right'>
                            <ul>
                                <?php
                                if (isset($_SESSION['user_id'])) {
                                    if ($user->setUser($_SESSION['user_id'])) {
                                        ?>
                                        <li>
                                            <div class='apply-btn-area'>
                                                <a href='logout.php' class='login-btn-area'><i
                                                            class='fa fa-lock'></i>Logout</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class='apply-btn-area'>
                                                <div style="color: #a6c9e2; text-transform: capitalize;">
                                                    <?php
                                                    echo $user->getUserName();
                                                    ?>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                } else { ?>
                                    <li>
                                        <div class='apply-btn-area'>
                                            <a href='login.php' class='login-btn-area'><i
                                                        class='fa fa-lock'></i>Sign In</a>
                                        </div>
                                    </li>

                                    <!--user registration-->
                                    <li>
                                        <div class='apply-btn-area'>
                                            <a href='sign_in_form.php' class='apply-now-btn'>Apply Now</a>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-area bg-textPrimary" id="sticker">
                <div class="container">
                    <div class="row" >
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <div class="logo-area">
                                <a href="index.php"><img style="width: 95px; height: 70px;" class="img-responsive"
                                                         src="img/logo2.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <nav id="desktop-nav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li class="active"><a href="index.php">About Us</a></li>
                                    <li class="active"><a href="index.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php">About Us</a></li>
                                    <li><a href="index.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
</header>

