<?php $this->load->view('user/v2/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-hulk">
			<div class="portlet-title">
				<div class="caption">
					Log In 
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" method="POST" class="form-register">
					<div class="form-body">
						<?php get_message(); ?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['email_address']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Email Address <span class="required bold">*</span></label>
									<input autocomplete="off" type="text" class="form-control input-sm email_address" name="email_address" value="<?php echo isset($user_log->email_address) ? $user_log->email_address : ''; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="form-control input-sm password" name="password" value="<?php echo isset($user_log->password) ? $user_log->password : ''; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<br/>
								Doesn't has eFutebol account? <a href="<?php echo base_url(); ?>user/registration_form">Sign Up Now</a>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn green-hulk">Log In</button>
								<a href="<?php echo base_url(); ?>user/login_form" class="btn btn-default">Reset</a>
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('user/v2/footer_v'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<?php $this->load->view('user/v2/footer_pre_close_v'); ?>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN CUSTOM SCRIPTS -->
<script type="text/javascript">
	$(function(){
		
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>