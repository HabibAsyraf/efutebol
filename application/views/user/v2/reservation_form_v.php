<?php $this->load->view('user/v2/header_v'); ?>
<?php #style="border-top-right-radius: 3px; border-bottom-right-radius: 3px; height: 30px;" ?>
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
										<input type="text" name="booking_date" readonly="readonly" class="form-control input-sm date-picker booking_date" data-date-start-date="<?php echo date("d/m/Y", strtotime(date("Y-m-d") . " +1 day")); ?>" data-date="<?php echo date("d/m/Y", strtotime(date("Y-m-d") . " +1 day")); ?>" data-date-format="dd/mm/yyyy" value="">
										<span class="input-group-btn">
											<button title="Pick a date" class="btn btn-sm green-hulk btn-show-calendar" type="button">
												<i class="fa fa-calendar"></i>
											</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<a hred="javascript:;" class="btn btn-check green-hulk disabled">Check Available Time</a>
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
		<h4 class="modal-title bold">Available Court & Booking Time</h4>
	</div>
	<div class="modal-body">
		<form action="#" class="form-horizontal form-booking" method="POST">
			<div class="form-body">
				<div class="div-error-msg"></div>
				<pre>Work In Progress</pre>
				<?php /* <div class="form-group">
					<label class="col-md-12 small"> Service ID </label>
					<div class="col-md-12">
						<input type="text" class="form-control input-sm service_id2" placeholder="Auto Generated" value="<?php echo isset($service_id) ? $service_id : ''; ?>" readonly="readonly" />
					</div>
				</div> */ ?>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-sm btn-outline dark btn-close-modal"> Close </button>
		<button type="button" class="btn btn-sm dark btn-save-modal"> Proceed </button>
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
			url: baseUrl + 'user/check_login',
			method: "POST",
			dataType: 'json',
			async: false,
			success: function(result){
				if(result['result'] == "failed"){
					location.href = baseUrl + 'user/login_form/' + result['back_to'];
				}
				else{
					$('.modal-booking').modal('show');
				}
			}
		});
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
			checkAvailability();
			// location.href = baseUrl + 'user/login_form';
		});
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>