<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Error | Meetix</title>
  <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/core/menu/menu-types/horizontal-menu.css">
  <link rel="stylesheet" type="text/css" href="assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="assets/css/pages/timeline.css">
  <link rel="stylesheet" type="text/css" href="assets/css/pages/error.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-menu 1-column   menu-expanded blank-page blank-page"
data-open="hover" data-menu="horizontal-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
              <div class="card-header bg-transparent border-0">
                <h1 class="text-center"><?php echo $heading; ?></h1>
                <h3 class="text-uppercase text-center"><?php echo $message; ?></h3>
              </div>
              <div class="card-content">
                <div class="row py-2 justify-content-center">
                  <div class="col-12 col-sm-6 col-md-6 ">
                    <a href="index.php" class="btn btn-primary btn-block"><i class="ft-home"></i> Back to Home</a>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="row">
                  <p class="text-muted text-center col-12 py-1">© <?php echo date("Y")?> <a class="text-bold-800 grey darken-2" href="https://www.facebook.com/Hans.lnside" target="_blank">Meetix</a></p>
                  <div class="col-12 text-center">
                    <a href="https://www.facebook.com/Hans.lnside" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                      <span class="fa fa-facebook"></span>
                    </a>
                    <a href="https://twitter.com/yusuf_fh" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                    <a href="https://www.instagram.com/yfh__" class="btn btn-social-icon mr-1 mb-1 btn-outline-instagram">
                      <span class="fa fa-instagram"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script src="assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="assets/js/core/app.js" type="text/javascript"></script>
  <script src="assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script src="assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>