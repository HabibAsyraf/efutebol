<?php $this->load->view('admin/header_v'); ?>
<style>
	.alert, .thumbnail {
		margin: 10px 0;
	}
	.bg-today{
		background: #ffff85!important;
	}
	.table-hover>tbody>tr.bg-today:hover, .table-hover>tbody>tr.bg-today:hover>td{
		background: #ffffdb!important;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					Reservation Listing
				</div>
				<div class="actions">
					<a href="<?php echo base_url(); ?>admin/reservation/form" class="btn btn-default btn-sm">
						Add Walk In Reservation
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-offset-6 col-md-6">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" name="search_booking" value="<?php echo isset($search_data['search_booking']) ? $search_data['search_booking'] : ''; ?>">
								<span class="input-group-btn">
									<button class="btn dark" type="submit">Search</button>
									<button class="btn red btn-reset-search" type="button">Reset</button>
								</span>
							</div>
						</div>
					</div>
				</form>
				<?php get_message(); ?>
				<div class="table-scrollable">
					<table class="table table-bordered table-hover">
						<thead>
							<tr class="bg-black font-white">
								<th style="width: 1%;"> # </th>
								<th style="width: 1%;"> Booking ID </th>
								<th class="col-md-2"> Name </th>
								<th class="col-md-1"> Contact No. </th>
								<th class="col-md-5"> Reserved Date </th>
								<th class="col-md-1"> Amount </th>
								<th class="col-md-1"> Duration </th>
								<th class="col-md-1"> Court </th>
								<th class="col-md-1" style="min-width: 100px;"> Booking Type </th>
								<th style="width: 1%; min-width: 120px" > Action </th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($query_booking) && $query_booking->num_rows() > 0){
								$count = 1 + $this->uri->segment(5);
								foreach($query_booking->result() as $row_booking){ ?>
									<tr class="<?php echo date("Ymd", strtotime($row_booking->booking_date_time)) == date("Ymd") || (date("Ymd", strtotime($row_booking->booking_date_time)) == date("Ymd", strtotime(date("Y-m-d H:i:s") . ' +1 day')) && strtotime(date("H:i", strtotime($row_booking->booking_date_time))) < strtotime("03:00")) ? 'bg-today' : ''; ?>">
										<td class="text-center"> <?php echo $count++; ?> </td>
										<td class="text-center"> <?php echo str_pad($row_booking->booking_id, 4, '0', STR_PAD_LEFT); ?> </td>
										<td class=""> <?php echo $row_booking->name; ?> </td>
										<td class=""> <?php echo $row_booking->contact_no; ?> </td>
										<td class="text-center"> <?php echo $row_booking->booking_date; ?>, <?php echo $row_booking->booking_time; ?> </td>
										<td class="text-right"> <?php echo 'RM ' . number_format($row_booking->amount, 2, ".", ""); ?> </td>
										<td class="text-center"> <?php echo $row_booking->duration . ' ' . ($row_booking->duration > 1 ? 'Hours' : 'Hour'); ?> </td>
										<td class="text-center"> <?php echo $row_booking->court_name; ?> </td>
										<td class="text-center"> <?php echo $row_booking->booking_method; ?> </td>
										<td class="text-center bold <?php echo $status_color[$row_booking->status]; ?>">
											<?php
											if($row_booking->status == "B"){ ?>
												<a href="javascript:;" data-info="<?php echo base64url_encode(serialize($row_booking)); ?>" class="btn green-jungle btn-xs btn-done <?php echo time() > strtotime($row_booking->booking_date_time) ? '': 'disabled'; ?>">Done</a>
												<a href="javascript:;" data-info="<?php echo base64url_encode(serialize($row_booking)); ?>" class="btn red btn-xs btn-cancel">Cancel</a><?php
											}
											else{
												echo $status_desc[$row_booking->status];
											} ?>
										</td>
									</tr>
									<?php
								}
							}
							else{ ?>
								<tr>
									<td colspan="10" class="text-center bold font-red"> Nothing was found </td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<?php echo $pagination; ?>
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
		$('.btn-reset-search').on('click', function(){
			location.href = baseUrl + "admin/reservation";
		});
		
		$('.btn-cancel').on('click', function(){
			if(confirm("Once cancelled cannot be reversed.\nAre you sure?")){
				location.href = baseUrl + "admin/reservation/cancel/" + $(this).data('info');
			}
		});
		
		$('.btn-done').on('click', function(){
			if(confirm("Once set to done cannot be reversed.\nAre you sure?")){
				location.href = baseUrl + "admin/reservation/complete_reservation/" + $(this).data('info');
			}
		});
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('admin/footer_close_v'); ?>