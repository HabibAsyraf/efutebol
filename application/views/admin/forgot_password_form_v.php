<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8" />
		<title> Administrator | Forgot Password </title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="Administrator | Forgot Password " name="description" />
		<meta content="" name="author" />
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="<?php echo base_url(); ?>assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="<?php echo base_url(); ?>assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
		<!-- END PAGE LEVEL STYLES -->
		<!-- BEGIN THEME LAYOUT STYLES -->
		<!-- END THEME LAYOUT STYLES -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/icon.jpg" />
		<style>
			.login .content .form-actions {
				clear: both;
				border: 0;
				border-bottom: 0px solid #eee;
				padding: 0px 30px;
				margin-left: -30px;
				margin-right: -30px;
			}
			.login .content .form-control {
				color: #010101;
			}
		</style>
	</head>
	<!-- END HEAD -->
	
	<body class="login" style="background: url(<?php echo base_url(); ?>assets/images/background3.jpg) center bottom no-repeat; background-size: cover; background-attachment: fixed;">
		<!-- BEGIN LOGO -->
		<div class="logo">
			<a href="<?php echo base_url(); ?>admin">
				<img src="<?php echo base_url(); ?>assets/images/admin-login-logo.jpg" alt="" /> </a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN LOGIN -->
		<div class="content">
			<!-- BEGIN FORGOT PASSWORD FORM -->
			<form class="form-forgot-password" action="" method="post">
				<h3 class="font-dark">Forgot Password ?</h3>
				<p> Enter your e-mail address below to reset your password. </p>
				<?php get_message(); ?>
				<div class="form-group <?php echo isset($error_field['email_address']) ? 'has-error' : ''; ?>">
					<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
					<label class="control-label visible-ie8 visible-ie9">Email Address</label>
					<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Address" name="email_address" value="<?php echo isset($user_log->email_address) ? $user_log->email_address : ''; ?>" />
				</div>
				<div class="form-actions">
					<a class="btn green btn-outline" href="<?php echo base_url(); ?>admin/login">Back</a>
					<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
				</div>
			</form>
			<!-- END FORGOT PASSWORD FORM -->
		</div>
		<?php $this->load->view('public/loading_overlay_v'); ?>
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
		<script src="<?php echo base_url(); ?>assets/global/plugins/ie8.fix.min.js"></script> 
		<![endif]-->
		<!-- BEGIN CORE PLUGINS -->
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		<!-- END THEME LAYOUT SCRIPTS -->
		<script>
			$(function(){
				$('.form-forgot-password').on('submit', function(){
					$('.loading-overlay').show();
				});
			});
		</script>
	</body>
	<?php
	/* <div class="alert alert-danger display-hide" style="display: block;">
		<button class="close" data-close="alert"></button>
		<span> Enter any username and password. </span>
	</div> */ ?>
</html>