<?php $this->load->view('admin/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					<?php
					echo isset($row_user->user_id) && $row_user->user_id > 0 ? 'Edit User' : 'Add New User';
					?>
				</div>
				<div class="actions">
					<a href="<?php echo base_url(); ?>admin/user" class="btn btn-default btn-sm">
						Back To User Listing
					</a>
					<a href="<?php echo base_url(); ?>admin/user/form" class="btn btn-default btn-sm">
						Add New User 
					</a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" method="POST" class="form-register">
					<input type="hidden" class="user_id" name="user_id" value="<?php echo isset($row_user->user_id) && $row_user->user_id > 0 ? $row_user->user_id : ''; ?>">
					<div class="form-body">
						<?php get_message(); ?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['name']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Name <span class="required bold">*</span></label>
									<input autocomplete="off" type="text" class="form-control input-sm name" name="name" value="<?php echo isset($row_user->name) ? $row_user->name : ''; ?>">
									<span class="help-block small"> </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['contact_no']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Contact No. <span class="required bold">*</span></label>
									<input autocomplete="off" type="text" class="form-control input-sm contact_no" name="contact_no" value="<?php echo isset($row_user->contact_no) ? $row_user->contact_no : ''; ?>">
									<span class="help-block small"> </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['email_address']) ? 'has-error' : ''; ?>">
									<label class="control-label"> Email Address <span class="required bold">*</span></label>
									<input autocomplete="off" type="text" class="form-control input-sm email_address" name="email_address" value="<?php echo isset($row_user->email_address) ? $row_user->email_address : ''; ?>">
									<span class="help-block small"> </span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group <?php echo isset($error_field['user_type']) ? 'has-error' : ''; ?>">
									<label class="control-label"> User Type <span class="required bold">*</span></label>
									<select class="form-control input-sm user_type" name="user_type">
										<option value=""></option>
										<option value="admin" <?php echo isset($row_user->user_type) && $row_user->user_type == "admin" ? 'selected="selected"' : ''; ?>>Admin</option>
										<option value="user" <?php echo isset($row_user->user_type) && $row_user->user_type == "user" ? 'selected="selected"' : ''; ?>>User</option>
									</select>
									<span class="help-block small"> </span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn dark">Submit</button>
								<a href="<?php echo base_url(); ?>admin/user/form<?php echo isset($row_user->user_id) && $row_user->user_id > 0 ? "/".base64url_encode($row_user->user_id) : ''; ?>" class="btn btn-default">Reset</a>
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin/footer_v'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<?php $this->load->view('admin/footer_pre_close_v'); ?>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN CUSTOM SCRIPTS -->
<script type="text/javascript">
	$(function(){
		
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('admin/footer_close_v'); ?>