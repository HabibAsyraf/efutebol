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
			#wowslider-container1 {
				padding-left: 30px;
				padding-top: 10px;
				padding-right: 10px;
			}
			header {
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
			#main {
				height: 448px;
				width: 1024px;
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
			#form8 {
				font-family: sans-serif;
				font-size: 35px;
				text-decoration: none;
				color: #FF6;
			}
			#form9 {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: 15px;
				color: #FFF;
				border-top-color: #0FC;
				border-right-color: #0FC;
				border-bottom-color: #0FC;
				border-left-color: #0FC;
			}
			#login{
				position: absolute;
				top:50%;
				left:50%;
				bottom: 10%;
				transform:translate(-50%, -50%);
				}
			#login h2{
				text-align: center;
				color: white;
				font-family: sans-serif;
				font-size: 35px;
				}
			#login input{
				display: block;
				width: 320px;
				height: 40px;
				padding: 10px;
				font-size: 14px;
				font-family: sans-serif;
				color: white;
				background: rgba(0,0,0,0.3);
				outline: none;
				border: 1px solid rgba(0,0,0,0.3);
				border-radius: 5px;
				box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2),0px 1px 1px rgba(255,255,255,0.2);
				margin-bottom: 10px; 
				}
			#login #login-btn{
				background: #55acee;
				font-size: 18px;
				text-align: center;
				vertical-align: middle;
				line-height: 20px;
				}
			#login form p {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				color: #FFF;
			}
			#main #contentTwo {
				height: 250px;
				width: 500px;
				float: left;
				background-color: #292931;
				border-top-style: dotted;
				border-right-style: dotted;
				border-bottom-style: dotted;
				border-left-style: dotted;
				border-top-color: #FF9;
				border-right-color: #FF9;
				border-bottom-color: #FF9;
				border-left-color: #FF9;
			}
			#main #contentThree {
				height: 250px;
				width: 500px;
				float: right;
				background-color: #292931;
				border-top-style: dotted;
				border-right-style: dotted;
				border-bottom-style: dotted;
				border-left-style: dotted;
				border-top-color: #FF9;
				border-right-color: #FF9;
				border-bottom-color: #FF9;
				border-left-color: #FF9;
			}
			#form2 {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: xx-large;
				color: #FFF;
				background-color: #292931;
			}
			#form3 {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: medium;
				font-weight: normal;
				border-top-color: #36F;
				border-right-color: #36F;
				border-bottom-color: #36F;
				border-left-color: #36F;
				color: #FFF;
				background-color: #292931;
			}
			#form4 {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: xx-large;
				color: #FFF;
				background-color: #292931;
			}
			#form5 {
				font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				font-size: 15px;
				color: #FFF;
				background-color: #292931;
			}
			header {
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
			#main {
				height: 448px;
				width: 1024px;
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
				<a href="<?php echo base_url(); ?>booking"> Reservations </a>
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