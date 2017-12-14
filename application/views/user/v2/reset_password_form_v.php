<?php $this->load->view('user/v2/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-hulk">
			<div class="portlet-title">
				<div class="caption">
					Forgot Password
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" method="POST" class="form-reset">
					<div class="form-body">
						<?php get_message(); ?>
						<?php /* <div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['email_address']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Email Address <span class="required bold">*</span></label>
									<input autocomplete="off" type="text" class="form-control input-sm email_address" name="email_address" value="<?php echo isset($user_reg->email_address) ? $user_reg->email_address : ''; ?>">
									<span class="help-block small"> </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<br/>
								Already have a eFutebol account? <a href="<?php echo base_url(); ?>user/login_form">Log In Now</a>
							</div>
						</div> */ ?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['email_address']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Email Address <span class="required bold">*</span></label>
									<input autocomplete="off" type="text" class="input-sm email_address" name="email_address" value="<?php echo isset($user_reg->email_address) ? $user_reg->email_address : ''; ?>">
									<span class="help-block small"> </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<br/>
								Already have a eFutebol account? <a href="<?php echo base_url(); ?>user/login_form">Log In Now</a>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<?php /* <button type="submit" class="btn green-hulk">Submit</button>
								<a href="<?php echo base_url(); ?>user/forgot_password" class="btn btn-default">Reset</a> */ ?>
								<button type="submit" class="">Submit</button>
								<a href="<?php echo base_url(); ?>user/forgot_password" class="">Reset</a>
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
		$('.form-reset').on('submit', function(){
			$('.loading-overlay').show();
		});
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>