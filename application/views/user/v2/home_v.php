<?php 
//Include header
$this->load->view('user/v2/header_v'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="portlet">
		<div id="wowslider-container1">
			<div class="ws_images">
				<ul>
					<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner1.jpg" alt="banner1" title="banner1" id="wows1_0"/></li>
					<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner2.jpg" alt="banner2" title="banner2" id="wows1_1"/></li>
					<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner3.jpg" alt="banner3" title="banner3" id="wows1_2"/></li>
					<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner4.jpg" alt="banner4" title="banner4" id="wows1_3"/></li>
					<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner5.jpg" alt="banner5" title="banner5" id="wows1_4"/></li>
				</ul>
			</div>
			<div class="ws_bullets">
				<div>
					<a href="#" title="banner1"><span><img src="<?php echo base_url(); ?>assets/anati-design/data1/tooltips/banner1.jpg" alt="banner1"/>1</span></a>
					<a href="#" title="banner2"><span><img src="<?php echo base_url(); ?>assets/anati-design/data1/tooltips/banner2.jpg" alt="banner2"/>2</span></a>
					<a href="#" title="banner3"><span><img src="<?php echo base_url(); ?>assets/anati-design/data1/tooltips/banner3.jpg" alt="banner3"/>3</span></a>
					<a href="#" title="banner4"><span><img src="<?php echo base_url(); ?>assets/anati-design/data1/tooltips/banner4.jpg" alt="banner4"/>4</span></a>
					<a href="#" title="banner5"><span><img src="<?php echo base_url(); ?>assets/anati-design/data1/tooltips/banner5.jpg" alt="banner5"/>5</span></a>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box black">
			<div class="portlet-title">
				<div class="caption">
					<span class="bold">Welcome!</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="bold">Welcome To eFutebol(Futsal Court Reservation)</h2>
						<h4 class="">Let's reserve for the pitch now while it still available!</h4>
						<br/>
						<a href="<?php echo base_url(); ?>reservation/reservation_form" class="btn btn-lg dark">Reserve Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
//Include la footer
$this->load->view('user/v2/footer_v'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/scripts/dashboard.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/anati-design/engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/anati-design/engine1/script.js"></script>
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