<?php
ob_start(); //output buffering
session_start();
include_once 'standardheader.php';
$err = "";
?>

<div class="inner-page-banner-area" style="background-image: url('img/slider/recruitmenttest-3.jpg'); height: 100px;">


    <div class="container">
        <div class="pagination-area">
            <h1>Login</h1>
            <ul>
                <li><a href="index.php">Home</a> -</li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</div>

<div class="registration-page-area bg-secondary">
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php require_once 'message_alert.php'; ?>
                        <h2 class="sidebar-title">Login</h2>
                        <div class="registration-details-area inner-page-padding">
                            <fieldset style="border: 1px solid #000088; padding: 20px;">
                                <form id="checkout-form" action="controllers/login.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="user-name">Username *</label>
                                                <input type="text" name="username" id="user-name" class="form-control"
                                                       required="" placeholder="Email or Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="password">Password *</label>
                                                <input type="password" name="password" id="pass" class="form-control"
                                                       required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <span><input type="checkbox" name="remember"/>Remember Me</span>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="pLace-order mt-30">
                                                <button class="view-all-accent-btn disabled" name="login" type="submit"
                                                        value="Login">
                                                    Login
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'standardfooter.php'; ?>

