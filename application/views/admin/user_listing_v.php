<?php $this->load->view('admin/header_v'); ?>
<style>
	.alert, .thumbnail {
		margin: 10px 0;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					User Listing
				</div>
				<div class="actions">
					<a href="<?php echo base_url(); ?>admin/user/form" class="btn btn-default btn-sm">
						Add New User 
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-offset-6 col-md-6">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" name="search_user" value="<?php echo isset($search_data['search_user']) ? $search_data['search_user'] : ''; ?>">
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
								<th class="col-md-4"> Name </th>
								<th class="col-md-2"> Contact No. </th>
								<th class="col-md-4"> Email </th>
								<th class="col-md-2"> User Type </th>
								<th style="width: 1%; min-width: 115px" > Action </th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(isset($query_user) && $query_user->num_rows() > 0){
								$count = 1 + $this->uri->segment(5);
								foreach($query_user->result() as $row_user){ ?>
									<tr>
										<td class="text-center"> <?php echo $count++; ?> </td>
										<td class=""> <?php echo $row_user->name; ?> </td>
										<td class=""> <?php echo $row_user->contact_no; ?> </td>
										<td class=""> <?php echo $row_user->email_address; ?> </td>
										<td class="text-center"> <?php echo ucwords($row_user->user_type); ?> </td>
										<td class="text-center">
											<a class="btn blue btn-xs" href="<?php echo base_url(); ?>admin/user/form/<?php echo base64url_encode($row_user->user_id); ?>">Edit</a>
											<a href="javascript:;" data-info="<?php echo base64url_encode(serialize($row_user)); ?>" class="btn red btn-xs btn-delete">Delete</a>
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
			location.href = baseUrl + "admin/user";
		});
		
		$('.btn-delete').on('click', function(){
			if(confirm("Delete user from the system.\nAre you sure?")){
				location.href = baseUrl + "admin/user/delete_user/" + $(this).data('info');
			}
		});
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('admin/footer_close_v'); ?>