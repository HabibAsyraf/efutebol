<?php $this->load->view('user/v2/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green-hulk">
			<div class="portlet-title">
				<div class="caption">
					Reservation Receipt
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" method="POST" class="form-horizontal form-check">
					<div class="form-body">
						<?php 
						// get_message(); 
						if($row_booking !== false){ ?>
							<div style="color: steelblue; font-weight: bold;" class="alert blink_me alert-success alert-dismissable">
								Booking has been confirmed.<br/>
								Please show this receipt at the counter.<br/>
								Please arrive atleast 15 minutes early before your booked time!
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Booking ID:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo str_pad($row_booking->booking_id, 4, "0", STR_PAD_LEFT); ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Name:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->name; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Email Address:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->email_address; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Contact No:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->contact_no; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Date:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->booking_date; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Time:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->booking_time; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Duration:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->duration . ' ' . ($row_booking->duration > 1 ? 'Hours' : 'Hour'); ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Court Number:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->court_name; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-bottom: 0;">
										<label class="control-label col-md-6 bold">Amount:</label>
										<div class="col-md-6">
											<p class="form-control-static"> RM <?php echo number_format($row_booking->amount, 2, ".", ""); ?> </p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label col-md-6 bold">Payment Method:</label>
										<div class="col-md-6">
											<p class="form-control-static"> <?php echo $row_booking->payment_method; ?> </p>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						else{ ?>
							<h4 class="text-center bold font-red">Booking details not found</h4>
							<?php
						} ?>
					</div>
					<div class="form-actions fluid">
						<div class="row">
							<div class="col-md-12 text-center">
								<a hred="javascript:;" class="btn green-hulk" onclick="javascript:window.print();">Print <i class="fa fa-print"></i></a>
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
	
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>