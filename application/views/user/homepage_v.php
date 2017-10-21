<?php
$this->load->view('user/header_v');
?>
<style type="text/css">
	#wowslider-container1 {
		padding-left: 30px;
		padding-top: 10px;
		padding-right: 10px;
	}
	#main {
		height: 448px;
		width: 1024px;
	}
</style>
<div id="contentOne"> <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
		<div class="ws_images">
			<ul>
				<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner1.jpg" alt="banner1" title="banner1" id="wows1_0"/></li>
				<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner2.jpg" alt="banner2" title="banner2" id="wows1_1"/></li>
				<li><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner3.jpg" alt="banner3" title="banner3" id="wows1_2"/></li>
				<li><a href="http://wowslider.com"><img src="<?php echo base_url(); ?>assets/anati-design/data1/images/banner4.jpg" alt="slideshow jquery" title="banner4" id="wows1_3"/></a></li>
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
		<div class="ws_script" style="position:absolute;left:-99%">
			<a href="http://wowslider.com/vi">angular carousel</a> by WOWSlider.com v7.7
		</div>
		<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/anati-design/engine1/wowslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/anati-design/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
</div><!-- end contentOne -->
<?php
$this->load->view('user/footer_v');
?>