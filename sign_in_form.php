<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11-May-20
 * Time: 10:12 AM
 */

session_start();
include_once 'standardheader.php';
//include 'auto_load.php';

$err = "";
$success = "";

?>
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('img/slider/recruitmenttest-3.jpg'); height: 100px;">
    <div class="container">
        <div class="pagination-area">
            <h1>Sign Up</h1>
            <ul>
                <li><a href="index.php">Home</a> -</li>
                <li>Sign Up</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary">
    <div class="container">

        <h2 class="sidebar-title">Sign Up</h2>
        <div class="registration-details-area inner-page-padding">
            <fieldset style="border: 1px solid #000088; padding: 20px;">
                <form role="form" action="controllers/user.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <?php require_once 'message_alert.php'; ?>
                            <div class="form-group">
                                <label class="control-label" for="user-name">User Name *</label>
                                <input type="text" name="username" id="user-name" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label" for="password">Password *</label>
                                <input type="password" name="password" id="pass" class="form-control" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pLace-order mt-30">
                                    <button class="view-all-accent-btn disabled" name="register" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>
<!-- Registration Page Area End Here -->
<?php include_once 'standardfooter.php'; ?>
<!-- jQuery 3 -->
<script src="assets/js/custom.js"></script>
