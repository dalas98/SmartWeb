<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Meetix</title>
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/ico/apple-icon-120.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/ico/favicon.ico') ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vendors.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/extensions/unslider.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/weather-icons/climacons.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/meteocons/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/charts/morris.css') ?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/app.css') ?>">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/core/menu/menu-types/vertical-menu-modern.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/core/colors/palette-gradient.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/simple-line-icons/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/core/colors/palette-gradient.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/timeline.css') ?>">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css"> -->
    <!-- END Custom CSS-->
</head>

<body>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-6 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <a href="<?=site_url()?>"><img src="<?php echo base_url('assets/images/logo/stack-logo-dark.png') ?>" alt="branding logo"></a>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>Please Sign Up</span>
                                    </h6>
                                    <?php if($this->session->flashdata('nomatch')): ?>
                                    <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>password not match</strong>
                                    </div>
                                    <?php elseif($this->session->flashdata('sucess')):?>
                                        <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Success Your Account Hasbeen Created<br> 
                                            Please <a href="<?=site_url('Login')?>">Login</a> to Continue
                                        </strong>
                                    </div>
                                    <?php elseif($this->session->flashdata('user')):?>
                                        <div class="alert alert-icon-left alert-warning alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Failed To create Account username was registered</strong>
                                    </div>
                                    <?php endif?>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="<?=site_url('Register/create')?>" method="post">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <fieldset class="form-group position-relative has-icon-left">
                                                        <input type="text" name="first_name" id="first_name" class="form-control form-control-lg" placeholder="First Name" tabindex="1" required>
                                                        <div class="form-control-position">
                                                            <i class="ft-user"></i>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <fieldset class="form-group position-relative has-icon-left">
                                                        <input type="text" name="last_name" id="last_name" class="form-control form-control-lg" placeholder="Last Name" tabindex="2">
                                                        <div class="form-control-position">
                                                            <i class="ft-user"></i>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" tabindex="3" required data-validation-required-message="Please enter username.">
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                                <div class="form-text font-small-3"></div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" tabindex="5" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                                <div class="form-text font-small-3"></div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" placeholder="Confirm Password" tabindex="6" data-validation-matches-match="password" data-validation-matches-message="Password & Confirm Password must be the same." required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                                <div class="form-text font-small-3"></div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                <i class="ft-user"></i> Register</button>
                                        </form>
                                    </div>
                                    <p class="text-center">Already have an account ?
                                        <a href="<?=site_url('Login')?>" class="card-link">Login</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018
                <a class="text-bold-800 grey darken-2" href="https://www.facebook.com/Hans.lnside" target="_blank">HansJr</a>, All rights reserved. </span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url('assets/vendors/js/vendors.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url('assets/vendors/js/charts/raphael-min.js')?>" type="text/javascript"></script>
    <!-- <script src="<?php #echo base_url('assets/vendors/js/charts/morris.min.js')?>" type="text/javascript"></script> -->
    <script src="<?php echo base_url('assets/vendors/js/extensions/unslider-min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/timeline/horizontal-timeline.js')?>" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url('assets/js/core/app-menu.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/core/app.js')?>" type="text/javascript"></script>
    <!-- <script src="<?php #echo base_url('assets/js/scripts/customizer.js')?>" type="text/javascript"></script> -->
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="<?php #echo base_url('assets/js/scripts/pages/dashboard-ecommerce.js')?>" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL JS-->
</body>

</html>