<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Task Management </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.-->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css"> 

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="assets/css/demo.min.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="http://www.enkayhomes.com/favicon_enkay.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		

	</head>
        <style>
            #datatable_fixed_column_filter,#dt_basic_filter{display:none;}
        </style>
<body class="">
<form>
  <!-- HEADER -->
  <header id="header">
    <div id="logo-group"> 
      
      <!-- PLACE YOUR LOGO HERE --> 
      <span id="logo"> <a href="{{ URL('/') }}"><img src="assets/img/logo.png" alt="SmartAdmin"> {!! Auth::user()->username !!} </span> 
      <!-- END LOGO PLACEHOLDER --> 
      
    </div>
    
    <!-- pulled right: nav area -->
    <div class="pull-right"> 
      
      <!-- #MOBILE --> 
      <!-- Top menu profile link : this shows only when top menu is active --> 
      
      <!-- logout button -->
      <div id="logout" class="btn-header transparent pull-right"> <span> <a href="logout" title="Sign Out" data-action="userLogout"><i class="fa fa-sign-out"></i></a> </span> </div>
      
      
    </div>
    <!-- end pulled right: nav area --> 
    
  </header>