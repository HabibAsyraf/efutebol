<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic Admin Theme #3 | User Login 1</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="Preview page of Metronic Admin Theme #3 for " name="description" />
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
			<!-- BEGIN LOGIN FORM -->
			<form class="login-form" action="" method="post">
				<h3 class="form-title font-dark">Administrator Login</h3>
				<?php get_message(); ?>
				<div class="form-group <?php echo isset($error_field['email_address']) ? 'has-error' : ''; ?>">
					<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
					<label class="control-label visible-ie8 visible-ie9">Email Address</label>
					<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Address" name="email_address" value="<?php echo isset($user_log->email_address) ? $user_log->email_address : ''; ?>" />
				</div>
				<div class="form-group <?php echo isset($error_field['password']) ? 'has-error' : ''; ?>">
					<label class="control-label visible-ie8 visible-ie9">Password</label>
					<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="<?php echo isset($user_log->password) ? $user_log->password : ''; ?>" />
				</div>
				
				<div class="form-actions text-center" >
					<button type="submit" style="float: left;" class="btn green uppercase">Login</button> 
					<span style="position: absolute; bottom: 41px; left: 140px;">OR</span> 
					<a href="<?php echo base_url(); ?>" style="float: right;" class="btn red uppercase">Back To Front End</a>
					<?php /* <label class="rememberme check mt-checkbox mt-checkbox-outline">
						<input type="checkbox" name="remember" value="1" />Remember
						<span></span>
					</label>
					<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a> */ ?>
				</div>
				<div class="login-options" hidden>
					<h4>Or login with</h4>
					<ul class="social-icons">
						<li>
							<a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
						</li>
						<li>
							<a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
						</li>
						<li>
							<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
						</li>
						<li>
							<a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
						</li>
					</ul>
				</div>
				<div class="create-account" hidden>
					<p>
						<a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
					</p>
				</div>
			</form>
			<!-- END LOGIN FORM -->
			<!-- BEGIN FORGOT PASSWORD FORM -->
			<form class="forget-form" action="index.html" method="post">
				<h3 class="font-green">Forget Password ?</h3>
				<p> Enter your e-mail address below to reset your password. </p>
				<div class="form-group">
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
				<div class="form-actions">
					<button type="button" id="back-btn" class="btn green btn-outline">Back</button>
					<button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
				</div>
			</form>
			<!-- END FORGOT PASSWORD FORM -->
		</div>
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
			$(document).ready(function()
			{
				$('#clickmewow').click(function()
				{
					$('#radio1003').attr('checked', 'checked');
				});
			})
		</script>
	</body>
	<?php
	/* <div class="alert alert-danger display-hide" style="display: block;">
		<button class="close" data-close="alert"></button>
		<span> Enter any username and password. </span>
	</div> */ ?>
</html>