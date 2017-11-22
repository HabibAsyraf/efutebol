<?php $this->load->view('user/v2/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					Court Floor Plan 
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#">
					<div class="form-body">
						<div class="form-group">
							<img src="<?php echo base_url(); ?>assets/anati-design/courtplan.jpg" style="width: 100%; height: 600px;" class="img-responsive" />
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					Pricing
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#">
					<div class="form-body" style="height: 170px;">
						<div class="form-group">
							<table width="509" border="0.5" cellspacing="15">
								<tr>
									<td width="299">Monday - Friday (7.00am - 4.00pm)</td>
									<td width="22">:</td>
									<td width="129">RM80 per hour</td>
								</tr>
								<tr>
									<td>Monday - Friday (4.00pm - 12.00am)</td>
									<td>:</td>
									<td>RM90 per hour</td>
								</tr>
								<tr>
									<td>Saturday &amp; Sunday (7.00am - 12.00am)</td>
									<td>:</td>
									<td>RM100 per hour</td>
								</tr>
							</table>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					Rules and Regulations
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#">
					<div class="form-body">
						<div class="form-group">
							<ul>
								<li>No studded or spike shoes</li>
								<li>Arrive atleast 15 minutes early before your booked time</li>
								<li>Strictly 'NO SMOKING' and 'NO LIQUOR' will be allowed within the premises</li>
								<li>Minimum numbers of players (6), however comfortable players are 10 within the courts and 2 subs</li>
							</ul>
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