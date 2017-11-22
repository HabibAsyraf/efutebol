<?php $this->load->view('user/v2/header_v'); ?>
<link href="<?php echo base_url(); ?>assets/pages/css/contact.min.css" rel="stylesheet" type="text/css" />
<style>
	.c-content-contact-1>.row .c-body>.c-section {
		text-align: left;
	}
	.c-content-contact-1>.row .c-body {
		padding: 15px 15px;
		background: rgba(255, 255, 255, 0.9);
	}
</style>
<div class="c-content-contact-1 c-opt-1">
	<div class="row" data-auto-height=".c-height">
		<div class="col-lg-8 col-md-6 c-desktop"></div>
		<div class="col-lg-4 col-md-6">
			<div class="c-body">
				<div class="c-section">
					<div class="c-content-label uppercase bg-dark">Address</div>
					<p>
						Efutebol Futsal Centre<br/>
						6th Floor, Kompleks Melaka Mall,<br/>
						Ayer Keroh, Lebuh Ayer Keroh, 75450<br/>
						Melaka<br/>
						Malaysia.
					</p>
				</div>
				<div class="c-section">
					<div class="c-content-label uppercase bg-dark"> For Enquiries. Please contact: </div>
					<p>
						<span class="fa fa-phone font-red"></span> &nbsp; (+60)7-355 1888
						<br/>
						<span class="fa fa-fax font-blue"></span> &nbsp; (+60)7-355 2077
						<br/>
						<span class="fa fa-envelope font-green"></span> &nbsp; enquiry@efutebol.com.my
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;"></div>
</div>
<?php $this->load->view('user/v2/footer_v'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCsaIo-47CMQGosOsY3SYzQ0YwlFWxX1MQ"></script>
<script src="<?php echo base_url()?>assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<?php $this->load->view('user/v2/footer_pre_close_v'); ?>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN CUSTOM SCRIPTS -->
<script type="text/javascript">
	var map;
	$(function(){
		map = new GMaps({
			div: '#gmapbg',
			lat: 2.232243,
			lng: 102.281861
		});
		
		var marker = map.addMarker({
			lat: 2.232243,
			lng: 102.281861,
			title: 'Efutebol Futsal Center',
			infoWindow: {
				content: "<b>Efutebol Futsal Center</b>"
			}
		});
		
		marker.infoWindow.open(map, marker);
	})
</script>
<!-- END CUSTOM SCRIPTS -->
<?php $this->load->view('user/v2/footer_close_v'); ?>