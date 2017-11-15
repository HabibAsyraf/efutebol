<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $meta_title; ?></title>
		<style type="text/css">
			#container {
				height: 600px;
				width: 1024px;
				margin-right: auto;
				margin-left: auto;
			}
			header{
				height: 125px;
				width: 1024px;
				color: #FFF;
				background-color: #000;
			}
			#titleBar {
				height: 35px;
				width: 1024px;
			}
			#topNav {
				height: 35px;
				width: 1009px;
				padding-top: 5px;
				padding-left: 15px;
			}
			#topNav a:hover {
				text-decoration: line-through;
				border: 2px none #000;
				color: #FF3;
				font-style: normal;
				text-transform: uppercase;
			}
			#topNav a {
				text-transform: uppercase;
				color: #FFF;
				text-decoration: none;
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-weight: bold;
				display: inline-block;
				margin-right: 15px;
				padding-top: 10px;
				font-size: 15px;
			}
			body{
				background: #292931;
			}
			footer {
				color: #FFF;
				padding-right: 40px;
				padding-left: 340px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 12px;
				border: thin solid #000;
				background-color: #000;
			}
			#container #main #contentOne #form1 div div p {
				font-family: Verdana, Geneva, sans-serif;
				font-size: x-large;
				color: #FFF;
			}
			#container #main #contentOne #form1 div div table tr td {
				font-family: Verdana, Geneva, sans-serif;
				font-size: medium;
				color: #FFF;
				border-top-style: none;
				border-right-style: none;
				border-bottom-style: none;
				border-left-style: none;
			}
		</style>
		
		<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/anati-design/engine1/style.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/anati-design/engine1/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->
	</head>
	
	<body>
		<div id="container"><header><img src="<?php echo base_url(); ?>assets/anati-design/Header.jpg" width="1024" height="125" alt="headerimg" /></header>
			<title> Transparent Navbar </title>
			<nav id="topNav">
				<a href="<?php echo base_url(); ?>">Home</a> 
				<a href="#"></a>
				<a href="<?php echo base_url(); ?>page/futsal_court"> Futsal Court </a>
				<a href="#"></a>
				<a href="<?php echo base_url(); ?>reservation/reservation_form"> Reservations </a>
				<a href="#"></a>
				<a href="<?php echo base_url(); ?>page/events"> Events </a>
				<a href="#"></a>
				<a href="<?php echo base_url(); ?>page/contact_us"> Contact Us </a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				
				<?php
				if(isset($this->session->userdata('login_user')['logged_in']) && $this->session->userdata('login_user')['logged_in'] == TRUE){ ?>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="<?php echo base_url(); ?>user/logout"> Logout </a><?php
				}
				else{ ?>
					<a href="<?php echo base_url(); ?>user/register_form"> Sign Up </a>
					<a href="#"></a>
					<a href="<?php echo base_url(); ?>user/login_form"> Login </a><?php
				}
				?>
			</nav><!-- end topNav -->
			<div id="main">