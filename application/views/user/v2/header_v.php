<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>eFutebol <?php echo $meta_title != "" ? '| ' . $meta_title : ''; ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="eFutebol <?php echo $meta_title != "" ? '| ' . $meta_title : ''; ?>" name="description" />
		<meta content="" name="author" />
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="<?php echo base_url(); ?>assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN THEME LAYOUT STYLES -->
		<link href="<?php echo base_url(); ?>assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/layouts/layout3/css/themes/blue-hoki.min.css" rel="stylesheet" type="text/css" id="style_color" />
		<link href="<?php echo base_url(); ?>assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/anati-design/engine1/style.css" rel="stylesheet" type="text/css" />
		<style>
			//Kat sini semua design yg custom made punya
		
			.page-wrapper .page-wrapper-middle {
				background: unset;
			}
			.page-header-top{
				background: url(<?php echo base_url(); ?>assets/images/header.jpg) left center no-repeat;
				background-size: cover;
			}
			.page-header .page-header-top {
				height: 150px;
			}
			.page-header .page-header-menu {
				background: #000000e3;
			}
			.page-header .page-header-menu .hor-menu .navbar-nav>li.active>a, .page-header .page-header-menu .hor-menu .navbar-nav>li.active>a:hover, .page-header .page-header-menu .hor-menu .navbar-nav>li.current>a, .page-header .page-header-menu .hor-menu .navbar-nav>li.current>a:hover {
				color: #000000;
				background: #ffffff;
			}
			.page-header .page-header-menu .hor-menu .navbar-nav>li.open>a, .page-header .page-header-menu .hor-menu .navbar-nav>li:hover>a, .page-header .page-header-menu .hor-menu .navbar-nav>li>a:active, .page-header .page-header-menu .hor-menu .navbar-nav>li>a:focus, .page-header .page-header-menu .hor-menu .navbar-nav>li>a:hover {
				background: #c2c2c2!important;
			}
			.page-header .page-header-menu .hor-menu .navbar-nav>li.open>a, .page-header .page-header-menu .hor-menu .navbar-nav>li:hover>a, .page-header .page-header-menu .hor-menu .navbar-nav>li>a:active, .page-header .page-header-menu .hor-menu .navbar-nav>li>a:focus, .page-header .page-header-menu .hor-menu .navbar-nav>li>a:hover {
				color: #ffffff;
			}
			.page-header .page-header-menu .hor-menu .navbar-nav>li .dropdown-menu {
				background: #ffffff;
			}
			.page-header .page-header-menu .hor-menu .navbar-nav>li .dropdown-menu li>a {
				color: #000000;
			}
			.page-footer {
				background: #000000e3;
				color: #ffffff;
			}
			#wowslider-container1{
				max-height: unset;
				max-width: unset;
			}
			#wowslider-container1 .ws_images {
				max-height: unset;
				max-width: unset;
			}
			.portlet.box.black>.portlet-title, .portlet.black, .portlet>.portlet-body.black {
				background-color: #000000;
			}
			.portlet.box.green-hulk>.portlet-title, .portlet.green-hulk, .portlet>.portlet-body.green-hulk {
				background-color: #007400;
			}
			.portlet.box.green-hulk{
				border: 1px solid #007400;
			}
			.btn.green-hulk:not(.btn-outline) {
				color: #FFF;
				background-color: #007400;
				border-color: #427400;
			}
			.btn.green-hulk:not(.btn-outline).active, .btn.green-hulk:not(.btn-outline):active, .btn.green-hulk:not(.btn-outline):hover, .open>.btn.green-hulk:not(.btn-outline).dropdown-toggle {
				color: #FFF;
				background-color: #217ebd;
				border-color: #1f78b5;
			}
			.btn.green-hulk:not(.btn-outline).active, .btn.green-hulk:not(.btn-outline):active, .btn.green-hulk:not(.btn-outline):hover, .open>.btn.green-hulk:not(.btn-outline).dropdown-toggle {
				color: #FFF;
				background-color: #276c27;
				border-color: #027002;
			}
			.alert{
				padding: 10px;
			}
			.alert-dismissable .close, .alert-dismissible .close {
				top: 5px;
				right: 0px;
			}
			body{
				background: url(<?php echo base_url(); ?>assets/images/background3.jpg) center bottom no-repeat;
				background-size: cover;
				background-attachment: fixed;
			}
			.table-scrollable>.table-bordered>thead>tr:last-child>th, .table.table-bordered thead>tr>th {
				text-align: center;
			}
			
			.table-scrollable {
				border-radius: 5px;
			}
			
			.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
				padding: 5px;
			}
		</style>
		<!-- END THEME LAYOUT STYLES -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/icon.jpg" />
	</head>
	<!-- END HEAD -->
	
	<body class="page-container-bg-solid">
		<div class="page-wrapper">
			<div class="page-wrapper-row">
				<div class="page-wrapper-top">
					<!-- BEGIN HEADER -->
					<div class="page-header">
						<!-- BEGIN HEADER TOP -->
						<div class="page-header-top">
							<div class="container">
								<!-- BEGIN RESPONSIVE MENU TOGGLER -->
								<a href="javascript:;" class="menu-toggler"></a>
								<!-- END RESPONSIVE MENU TOGGLER -->
							</div>
						</div>
						<!-- END HEADER TOP -->
						<!-- BEGIN HEADER MENU -->
						<div class="page-header-menu">
							<div class="container">
								<!-- BEGIN MEGA MENU -->
								<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
								<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
								<div class="hor-menu">
									<ul class="nav navbar-nav">
										<?php
										//Cara panjang
										/* if($controller == "home"){
											echo "active";
										}
										else{
											echo "";
										} */
										?>
										<?php 
										//Cara pendek
										// echo $controller == "home" ? 'active' : ''; 
										?>
										
										<li class="<?php echo $controller == "home" ? 'active' : ''; ?>">
											<a href="<?php echo base_url(); ?>">
												Home
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="<?php echo $controller == "page" && $method == "futsal_court" ? 'active' : ''; ?>">
											<a href="<?php echo base_url(); ?>page/futsal_court">
												Futsal Court
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="<?php echo $controller == "reservation" ? 'active' : ''; ?>">
											<a href="<?php echo base_url(); ?>reservation/reservation_form">
												Reservations
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="<?php echo $controller == "page" && $method == "events" ? 'active' : ''; ?>">
											<a href="<?php echo base_url(); ?>page/events">
												Events
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="<?php echo $controller == "page" && $method == "contact_us" ? 'active' : ''; ?>">
											<a href="<?php echo base_url(); ?>page/contact_us">
												Contact Us
											</a>
										</li>
									</ul>
								</div>
								<div class="hor-menu" style="float: right;">
									<ul class="nav navbar-nav">
										<?php
										if(isset($this->session->userdata('login_user')['logged_in']) && $this->session->userdata('login_user')['logged_in'] == TRUE){ ?>
											<li class="<?php echo $controller == "user" && $method == "change_password" ? 'active' : ''; ?>">
												<a href="<?php echo base_url(); ?>user/change_password">
													Change Password
												</a>
											</li>
											<li class="">
												<a href="<?php echo base_url(); ?>user/logout">
													Logout
												</a>
											</li>
											<?php
										}
										else{ ?>
											<li class="<?php echo $controller == "user" && $method == "registration_form" ? 'active' : ''; ?>">
												<a href="<?php echo base_url(); ?>user/registration_form">
													Sign Up
												</a>
											</li>
											<li class="<?php echo $controller == "user" && $method == "login_form" ? 'active' : ''; ?>">
												<a href="<?php echo base_url(); ?>user/login_form">
													Log In
												</a>
											</li><?php
										} ?>
									</ul>
								</div>
								<!-- END MEGA MENU -->
							</div>
						</div>
						<!-- END HEADER MENU -->
					</div>
					<!-- END HEADER -->
				</div>
			</div>
			<div class="page-wrapper-row full-height">
				<div class="page-wrapper-middle">
					<!-- BEGIN CONTAINER -->
					<div class="page-container">
						<!-- BEGIN CONTENT -->
						<div class="page-content-wrapper">
							<!-- BEGIN CONTENT BODY -->
							<!-- BEGIN PAGE CONTENT BODY -->
							<div class="page-content">
								<div class="container">
									<!-- BEGIN PAGE CONTENT INNER -->
									<div class="page-content-inner">
										<div class="mt-content-body">