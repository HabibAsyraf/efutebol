<?php $this->load->view('user/v2/header_v'); ?>
<style>
.date-picker[readonly]{
	background-color: #ffffff;
	cursor: pointer;
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-hulk">
			<div class="portlet-title">
				<div class="caption">
					Reservation 
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" method="POST" class="form-check">
					<div class="form-body">
						<?php get_message(); ?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label class="control-label"> Booking Date <span class="required">*</span></label>
									<div class="input-group">
										<input type="text" name="booking_date" readonly="readonly" class="form-control input-sm date-picker booking_date" 
										data-date-start-date="<?php echo date("d/m/Y", strtotime(date("Y-m-d") . " +1 day")); ?>" 
										data-date="<?php echo date("d/m/Y", strtotime(date("Y-m-d") . " +1 day")); ?>" 
										data-date-format="dd/mm/yyyy" value="<?php echo date("d/m/Y", strtotime(date("Y-m-d") . " +1 day")); ?>">
										
										<span class="input-group-btn">
											<button title="Pick a date" class="btn btn-sm green-hulk btn-show-calendar" type="button">
												<i class="fa fa-calendar"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label class="control-label"> Booking Time <span class="required">*</span></label>
									<input type="text" name="booking_time" class="booking_time form-control input-sm timepicker timepicker-default" style="background-color: #ffffff; cursor: pointer;"
									value="<?php echo isset($monday_open_time) && $monday_open == "O" ? date("h:i A", strtotime($monday_open_time)) : ''; ?>" readonly> 
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label class="control-label"> Duration <span class="required">*</span></label>
									<select name="duration" class="form-control duration"> 
										<option value="1">1 Hour</option>
										<option value="2">2 Hours</option>
										<option value="3">3 Hours</option>
									</select> 
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label class="control-label"> Court Number <span class="required">*</span></label>
									<select name="court_id" class="form-control court_id">
										<?php
										if($query_court->num_rows() > 0){
											foreach($query_court->result() as $row_court){ ?>
												<option value="<?php echo $row_court->court_id; ?>"><?php echo $row_court->court_name; ?></option><?php
											}
										}
										?>
									</select> 
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<a hred="javascript:;" class="btn btn-check green-hulk">Check Availability</a>
								<a href="<?php echo base_url(); ?>reservation/reservation_form" class="btn btn-default">Reset</a>
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-booking modal-overflow" tabindex="-1" data-width="900" data-backdrop="static" data-keyboard="false">
	<div class="modal-header font-white bg-dark">
		<button title="Close" type="button" style="float: right;" class="btn btn-xs white btn-close-modal" data-dismiss="modal"><span class="fa fa-times"></span></button>
		<h4 class="modal-title bold">Court Is Available</h4>
	</div>
	<div class="modal-body form">
		<form action="<?php echo base_url(); ?>reservation/confirm" class="form-horizontal form-confirm-booking" method="POST">
			<input type="hidden" name="booking_data" class="booking_data" value="" />
			<div class="form-body">
				<div class="div-error-msg"></div>
				<h3 class="form-section" style="margin: 0;">Reservation Info</h3>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="control-label col-md-3 bold">Date:</label>
							<div class="col-md-9">
								<p class="form-control-static booking_date">  </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="control-label col-md-3 bold">Time:</label>
							<div class="col-md-9">
								<p class="form-control-static booking_time"> </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="control-label col-md-3 bold">Duration:</label>
							<div class="col-md-9">
								<p class="form-control-static duration">  </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="control-label col-md-3 bold">Court Number:</label>
							<div class="col-md-9">
								<p class="form-control-static court_name"> </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group" style="margin-bottom: 0;">
							<label class="control-label col-md-3 bold">Amount:</label>
							<div class="col-md-9">
								<p class="form-control-static amount"> </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label col-md-3 bold">Payment Method:</label>
							<div class="col-md-9">
								<select name="payment_method" class="form-control payment_method"> 
									<option value="Pay at Venue">Pay At Venue</option>
									<option value="Pay Online" disabled>Pay Online(Unavailable)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-sm btn-outline dark btn-close-modal"> Close </button>
		<button type="button" class="btn btn-sm dark btn-confirm-booking"> Confirm & Get My Receipt </button>
	</div>
</div>
<div class="modal fade modal-alert modal-overflow" tabindex="-1" data-width="900" data-backdrop="static" data-keyboard="false">
	<div class="modal-header font-white bg-red">
		<button title="Close" type="button" style="float: right;" class="btn btn-xs white btn-close-modal" data-dismiss="modal"><span class="fa fa-times"></span></button>
		<h4 class="modal-title bold">Court Unavailable</h4>
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-sm btn-outline dark btn-close-modal"> Close </button>
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
	var checkAvailability = function(){
		$.ajax({
			url: baseUrl + 'reservation/check_availability',
			method: "POST",
			data: $('.form-check').serialize(),
			dataType: 'json',
			async: false,
			success: function(result){
				if(result['result'] == "failed"){
					$('.modal-alert').find('.modal-body').html(result['message']);
					$('.modal-alert').modal('show');
				}
				else{
					$('.modal-booking').find('.booking_date').html(result['booking_details']['date']);
					$('.modal-booking').find('.booking_time').html(result['booking_details']['start_end']);
					$('.modal-booking').find('.duration').html(result['booking_details']['duration_view']);
					$('.modal-booking').find('.court_name').html(result['booking_details']['court_name']);
					$('.modal-booking').find('.amount').html('RM ' + result['booking_details']['amount']);
					$('.modal-booking').find('.booking_data').val(result['encrypted_booking']);
					$('.modal-booking').find('.div-error-msg').html("");
					
					$('.modal-booking').modal('show');
				}
			}
		});
	}
	
	var checkLogin = function(){
		$.ajax({
			url: baseUrl + 'user/check_login',
			method: "POST",
			dataType: 'json',
			async: false,
			success: function(result){
				if(result['result'] == "failed"){
					location.href = baseUrl + 'user/login_form/' + result['back_to'];
				}
				else{
					checkAvailability();
				}
			}
		});
	}
	
	var msgParser = function(message = "Error has been occured. Please try again later.", msgtType = "danger"){
		return '<div style="color: black; display: block;" class="alert alert-'+msgtType+' alert-dismissable">'+message+'<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button></div>';
	}
	
	$(function(){
		$('.date-picker').datepicker();
		$('.btn-show-calendar').on('click', function(){
			$(this).closest('.form-group').find('.date-picker').datepicker('show');
		});
		$('.date-picker').on('change', function(){
			$(this).datepicker('hide');
			if($(this).val() != ""){
				$('.form-check').find('.btn-check').removeClass('disabled');
			}
			else{
				$('.form-check').find('.btn-check').addClass('disabled');
			}
		});
		
		$('.btn-check').on('click', function(){
			checkLogin();
		});
		
		$(".timepicker-default").timepicker({ defaultTime: '08:00', autoclose: true, showSeconds: false,showMeridian: false,minuteStep: 60 });
		$('.btn-confirm-booking').on('click', function(){
			$('.form-confirm-booking').ajaxSubmit({
				dataType: 'json',
				async: false,
				beforeSend: function(){
					
				},
				error: function(){
					$('.modal-booking').find('.div-error-msg').html(msgParser());
				},
				success: function(result){
					if(result['result'] == "failed"){
						$('.modal-booking').find('.div-error-msg').html(msgParser(result['message']));
					}
					else{
						location.href = baseUrl + 'reservation/receipt/' + result['booking_id'];
					}
				}
			});
		});
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>