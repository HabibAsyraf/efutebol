<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>eFutebol</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="eFutebol" name="description" />
		<meta content="" name="author" />
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<link href="../global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
		<link href="../global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="../global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
		<link href="../global/css/plugins.min.css" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN THEME LAYOUT STYLES -->
		<link href="../layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
		<link href="../layouts/layout3/css/themes/blue-hoki.min.css" rel="stylesheet" type="text/css" id="style_color" />
		<link href="../layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
		<link href="../anati-design/engine1/style.css" rel="stylesheet" type="text/css" />
		<!-- DO NOT TOUCH THIS PART ANATI! -->
		<style>
			.page-wrapper .page-wrapper-middle {
				background: unset;
			}
			.page-header-top{
				background: url(../images/header.jpg) left center no-repeat;
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
				background: url(../images/background3.jpg) center bottom no-repeat;
				background-size: cover;
				background-attachment: fixed;
			}
			.table-scrollable>.table-bordered>thead>tr:last-child>th, .table.table-bordered thead>tr>th {
				text-align: center;
			}
			
			.table-scrollable {
				border-radius: 5px;
			}
			
			@media (min-width: 1200px){
				.container {
					width: 1500px;
				}
			}
			
			.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
				padding: 5px;
			}
		</style>
		<!-- END THEME LAYOUT STYLES -->
		<link rel="shortcut icon" href="../images/icon.jpg" />
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
										<li class="">
											<a href="#">
												Home
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="">
											<a href="#">
												Futsal Court
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="">
											<a href="#">
												Reservations
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="">
											<a href="#">
												Events
											</a>
										</li>
									</ul>
									<ul class="nav navbar-nav">
										<li class="">
											<a href="">
												Contact Us
											</a>
										</li>
									</ul>
								</div>
								<div class="hor-menu" style="float: right;">
									<ul class="nav navbar-nav">
										<li class="">
											<a href="#">
												Sign Up
											</a>
										</li>
										<li class="">
											<a href="#">
												Log In
											</a>
										</li>
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
											<div class="row">
												<div class="col-md-12">
													<div class="portlet box green-hulk">
														<div class="portlet-title">
															<div class="caption">
																Sign Up 
															</div>
														</div>
														<div class="portlet-body">
															
															
															
															
															
															
															
															
															
															
															<!-- DEAR ANATI, APA-APA TUKAR DARI SINI -->
															<div class="row">
                                                                <div class="col-md-offset-6 col-md-6">
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" class="form-control">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn blue" type="button">Go!</button>
                                                                        </span>
                                                                    </div>
                                                                    <!-- /input-group -->
                                                                </div>
                                                                <!-- /.col-md-6 -->
                                                            </div>
															
															<div class="table-scrollable">
																<table class="table table-bordered table-hover">
																	<thead>
																		<tr class="bg-dark font-white">
																			<th> # </th>
																			<th> Column </th>
																			<th> Column </th>
																			<th> Column </th>
																			<th> Column </th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td class="text-center"> 1 </td>
																			<td class=""> data 1 </td>
																			<td class=""> data 2 </td>
																			<td class=""> data 3 </td>
																			<td style="width: 1%; min-width: 115px" class="">
																				<a class="btn blue btn-xs">Edit</a>
																				<a class="btn red btn-xs">Delete</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-center"> 2 </td>
																			<td class=""> data 1 </td>
																			<td class=""> data 2 </td>
																			<td class=""> data 3 </td>
																			<td style="width: 1%; min-width: 115px" class="">
																				<a class="btn blue btn-xs">Edit</a>
																				<a class="btn red btn-xs">Delete</a>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-center"> 3 </td>
																			<td class=""> data 1 </td>
																			<td class=""> data 2 </td>
																			<td class=""> data 3 </td>
																			<td style="width: 1%; min-width: 115px" class="">
																				<a class="btn blue btn-xs">Edit</a>
																				<a class="btn red btn-xs">Delete</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<!-- APA TUKAR SAMPAI TAKAT SINI JE -->
															
															
															
															
															
															
															
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- END PAGE CONTENT INNER -->
								</div>
							</div>
							<!-- END PAGE CONTENT BODY -->
							<!-- END CONTENT BODY -->
						</div>
						<!-- END CONTENT -->
					</div>
					<!-- END CONTAINER -->
				</div>
			</div>
			<div class="page-wrapper-row">
				<div class="page-wrapper-bottom">
					<!-- BEGIN FOOTER -->
					<!-- BEGIN INNER FOOTER -->
					<div class="page-footer">
						<div class="container">
							Designed by Anati Radzi © 2017 eFutebol. All Rights Reserved.
						</div>
					</div>
					<div class="scroll-to-top">
						<i class="icon-arrow-up"></i>
					</div>
					<!-- END INNER FOOTER -->
					<!-- END FOOTER -->
				</div>
			</div>
		</div>
		<!--[if lt IE 9]>
		<script src="../global/plugins/respond.min.js"></script>
		<script src="../global/plugins/excanvas.min.js"></script> 
		<script src="../global/plugins/ie8.fix.min.js"></script> 
		<![endif]-->
		
		<!-- BEGIN CORE PLUGINS -->
		<script src="../global/plugins/jquery.min.js" type="text/javascript"></script>
		<script src="../global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../global/plugins/js.cookie.min.js" type="text/javascript"></script>
		<script src="../global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="../global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="../global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="../global/plugins/moment.min.js" type="text/javascript"></script>
		<script src="../global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="../global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
		<script src="../global/plugins/morris/morris.min.js" type="text/javascript"></script>
		<script src="../global/plugins/morris/raphael-min.js" type="text/javascript"></script>
		<script src="../global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
		<script src="../global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
		<script src="../global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
		<script src="../global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
		<script src="../global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
		<script src="../global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
		<script src="../global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
		<script src="../global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
		<script src="../global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
		<script src="../global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
		<script src="../global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="../global/scripts/app.min.js" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
		<script src="../layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
		<script src="../layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
		<script src="../layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
	</body>
</html>