<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Login</title>
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
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?php echo base_url('assets/images/logo/stack-logo-dark.png') ?>" alt="branding logo">
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" action="<?php echo site_url('Login/validate')?>" method="post">
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" class="form-control form-control-lg" name="username" id="user-name" placeholder="Your Username"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg" name="password" id="user-password" placeholder="Enter Password"
                        required>
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
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
  <script src="<?php echo base_url('assets/vendors/js/vendors.min.js') ?>" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="<?php echo base_url('assets/vendors/js/ui/jquery.sticky.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/vendors/js/charts/jquery.sparkline.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendors/js/forms/icheck/icheck.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/vendors/js/forms/validation/jqBootstrapValidation.js') ?>"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="<?php echo base_url('assets/js/core/app-menu.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/core/app.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/scripts/customizer.js') ?>" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/scripts/ui/breadcrumbs-with-stats.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/scripts/forms/form-login-register.js') ?>" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>