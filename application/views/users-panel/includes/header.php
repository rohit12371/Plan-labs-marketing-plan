<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Plan Labs Business Plan (User Dashboard)</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master_style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/horizontal_menu_style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="<?php echo base_url(); ?>assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_components/morris.js/morris.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
<style type="text/css">
body {
    font-family: 'Yantramanav', sans-serif !important;
}
  p{ font-size:15px;}
 .btn-success{ background:#6fd62b; border-color:#6fd62b;}
 .note{background:#007bff; color:#fff; width:300px; padding:0px 6px 0px 6px; height:180px; position:relative; top:-100px}
 .note textarea{ height:120px;}
</style>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<header class="main-header">
  <div class="inside-header">
    <!-- Logo -->
    <a href="index.html" class="logo"> <b class="logo-mini"> <span class="light-logo"><img src="<?php echo base_url(); ?>assets/images/plan-lab-logo.png" alt="logo" width="150px"></span> <span class="dark-logo"><img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="logo" width="150px"></span> </b> <span class="logo-lg"> <img src="<?php echo base_url(); ?>assets/images/plan-lab-logo.png" alt="logo" class="light-logo"> <img src="<?php echo base_url(); ?>assets/images/plan-lab-logo.png" alt="logo" class="dark-logo" width="150px"> </span> </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top"> <a href="#" class="sidebar-toggle d-block d-lg-none" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      <ul class="navbar-nav mr-auto mt-md-0">
        <li class="nav-item dropdown mega-dropdown">
          <div class="dropdown-menu scale-up-down"> </div>
        </li>
      </ul>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">  </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header"> <img src="<?php echo base_url(); ?>assets/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">
                <p> Plan Labs <small class="mb-5">planlabs@gmail.com</small> <a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a> </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left"> <a href="#"><i class="ion ion-person"></i> My Profile</a> </div>
                  <div class="col-12 text-left"> <a href="#"><i class="ion ion-email-unread"></i> Inbox</a> </div>
                  <div class="col-12 text-left"> <a href="#"><i class="ion ion-settings"></i> Setting</a> </div>
                  <div class="col-12 text-left"> <a href="#"><i class="fa fa-power-off"></i> Logout</a> </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<div class="main-nav">
  <nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard mr-5"></i> <span>Dashboard</span></a> </li>
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-cube mr-5"></i> <span>My Plans</span> </a>
          <ul class="dropdown-menu multilevel scale-up-left">
           <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('plans/listOfAllPlans'); ?>"><span class="active-item-here"></span> <span>List Of Existing Created Plans</span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('plans/planStep1'); ?>"><span class="active-item-here"></span> <span>Create New Plans</span></a> </li>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('marketingEbook'); ?>"><span class="active-item-here"></span><i class="fa fa-th mr-5"></i> <span>Marketing Ebooks</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('settings/accountSettings'); ?>"><span class="active-item-here"></span><i class="fa fa-bars mr-5"></i> <span>Account Settings</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('settings'); ?>"><span class="active-item-here"></span><i class="fa fa-user-circle mr-5"></i> <span>Change Password</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('logout'); ?>"><span class="active-item-here"></span><i class="fa fa-lock mr-5"></i> <span>Logout</span></a> </li>
      </ul>
    </div>
  </nav>
</div>
