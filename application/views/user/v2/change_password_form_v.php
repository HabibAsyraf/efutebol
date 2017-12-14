<?php $this->load->view('user/v2/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-hulk">
			<div class="portlet-title">
				<div class="caption">
					Change My Password
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" method="POST" class="form-change">
					<div class="form-body">
						<?php get_message(); ?>
						<?php /* <div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['current_password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Current Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="form-control input-sm current_password" name="current_password" value="<?php echo isset($user_reg->current_password) ? $user_reg->current_password : ''; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="form-control input-sm password" name="password" value="<?php echo isset($user_reg->password) ? $user_reg->password : ''; ?>">
									<span class="help-block small"> Password length must be 6 character </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['confirm_password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Confirm Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="form-control input-sm confirm_password" name="confirm_password" value="<?php echo isset($user_reg->confirm_password) ? $user_reg->confirm_password : ''; ?>">
									<span class="help-block small"> Password length must be 6 character </span>
								</div>
							</div>
						</div> */ ?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['current_password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Current Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="input-sm current_password" name="current_password" value="<?php echo isset($user_reg->current_password) ? $user_reg->current_password : ''; ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="input-sm password" name="password" value="<?php echo isset($user_reg->password) ? $user_reg->password : ''; ?>">
									<span class="help-block small"> Password length must be 6 character </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['confirm_password']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Confirm Password <span class="required bold">*</span></label>
									<input autocomplete="off" type="password" class="input-sm confirm_password" name="confirm_password" value="<?php echo isset($user_reg->confirm_password) ? $user_reg->confirm_password : ''; ?>">
									<span class="help-block small"> Password length must be 6 character </span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<?php /* <button type="submit" class="btn green-hulk">Submit</button>
								<a href="<?php echo base_url(); ?>user/registration_form" class="btn btn-default">Reset</a> */ ?>
								<button type="submit" class="">Submit</button>
								<a href="<?php echo base_url(); ?>user/registration_form" class="">Reset</a>
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
		$('.form-change').on('submit', function(){
			$('.loading-overlay').show();
		});
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>