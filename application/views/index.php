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

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu font-large-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="<?= site_url()?>">
                            <img class="brand-logo" alt="stack admin logo" src="<?=base_url('assets/images/logo/stack-logo-light.png')?>">
                            <h2 class="brand-text">MeetiX</h2>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <!-- <form action="" class="form-inline mt-2 mt-md-0">
                        <input type="text" class="form-control mr-sm-1" placeholder="Type Anything ...">
                      </form> -->
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="#">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">or</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="<?=site_url('Login')?>">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Horizontal navigation-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="ft-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="ft-calendar"></i>
                        <span>Jadwal Event</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="ft-phone"></i>
                        <span>Hubungi Kami</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
    </div>
    <!-- Horizontal navigation-->
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Stats -->
                <div class="row">
                    <div id="control" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?=base_url('./assets/images/carousel/cover2.jpg')?>">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=base_url('./assets/images/carousel/cover2.jpg')?>">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=base_url('./assets/images/carousel/cover2.jpg')?>">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#control" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#control" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018
                <a class="text-bold-800 grey darken-2" href="" target="_blank">HansJr</a>, All rights reserved. </span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url('assets/vendors/js/vendors.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url('assets/vendors/js/charts/raphael-min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/charts/morris.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/extensions/unslider-min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/js/timeline/horizontal-timeline.js')?>" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url('assets/js/core/app-menu.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/core/app.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/scripts/customizer.js')?>" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url('assets/js/scripts/pages/dashboard-ecommerce.js')?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>