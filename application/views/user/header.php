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

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              <img class="brand-logo" alt="stack admin logo" src="<?php echo base_url('assets/images/logo/stack-logo-light.png')?>">
              <h2 class="brand-text">MeetiX</h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item"><a class="nav-link" href="#"><i class="ficon ft-home"></i>Home</a>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Type Anything ...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-1.png')?>" alt="avatar"><i></i></span>
                <span class="user-name"><?php echo $this->session->userdata('nama')?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a>
                <a
                class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= site_url('login?logout=signout')?>"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>