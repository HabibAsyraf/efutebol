<?php
$this->load->view('user/header_v');
?>
<div id="contentOne">
	<form id="form1" class="form-reservation" name="form1" method="post" action="">
		<p align="center">
			<script src="<?php echo base_url(); ?>assets/anati-design/js/jquery-1.10.2.min.js"></script>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/anati-design/js/jquery-ui.min.css" />
			<script src="<?php echo base_url(); ?>assets/anati-design/js/jquery-ui.min.js"></script>
			<style type="text/css">
				#main {
					height: 448px;
					width: 1024px;
				}
				#main #contentOne {
					float: left;
					height: 465px;
					width: 420px;
					background-color: #292931;
				}
				#main #contentTwo {
					float: right;
					height: 465px;
					width: 570px;
					background-color: #292931;
				}
				.calendar_block {
					box-shadow: 0 0 5px 5px #dcdcdc;
					background-color:#666;
					float: left;
				}

				.calendar {
					padding:20px;
				}

				.calendar .ui-widget-header {
					border:none;
					background:none;
				}

				.calendar .ui-datepicker {
					border: 3px solid #fff;
					padding:10px 30px 10px;
				}

				.calendar .ui-corner-all {
					border-radius:10px;
				}

				.calendar .ui-widget-content {
					background: none;
				}

				.calendar .ui-datepicker-calendar {
					color: #fff;
				}

				.calendar .ui-state-hover {
					background-color: #fff !important;
					color: #FF8800 !important;
				}

				.calendar .ui-state-default {
					text-align:center;
					background: none;
					color: #fff;
					width:40px;
					padding:10px 0 10px 0;
				}
				#Button{
					height: 20pn;
					width: 155px;
					background-color: #C00;
					-webkit-border-radius: 10px;
					-moz-border-radius: 10px;
					border-radius: 10px;
					font-family: Arial, Arial, Helvetica, sans-serif;
					font-size: 20px;
					color: #000;
					padding-top: 10px;
					padding-bottom: 10px;
					padding-left: 50px;
					-webkit-transition: all 0.2s ease 0s;
					-moz-transition: all 0.2s ease 0s;
					-ms-transition: all 0.2s ease 0s;
					-o-transition: all 0.2s ease 0s;
					transition: all 0.2s ease 0s;
					margin-left: 200px;
				}
				#Button:hover {
					background-color: #FFF;
				}
			</style>
			<div class="calendar_block">
				<div class="calendar"></div>
			</div>
			<div align="center">
				<script>
					$(".calendar").datepicker({
						firstDay: 1,
						dayNamesMin: [ "sun","mon", "tue", 
						"wed", "thu", "fri", "sat" ]
					});
				</script>      
			</div>
		</p>
	</div>
	<!-- end contentOne -->
  
	<div id="contentTwo">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<div align="center">
			<table width="558" border="0.5">
				<tr bgcolor="#FFFF99">
					<td colspan="2" bgcolor="#FFFF66"> <b><center>eFutebol Futsal</center></b> </td>
				</tr>
				<tr>
					<td width="283" bgcolor="#FFFF99" style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;"><input name="radio" type="radio" id="radio" value="radio" />
						<label for="radio">7.00 am - 8.00 am</label>
					</td>
					<td width="265" bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio9" value="radio" />
						3.00 pm - 4.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio2" value="radio" />
						8.00 am - 9.00 am</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio10" value="radio" />
						4.00 pm - 5.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio3" value="radio" />
						9.00 am - 10.00 am</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio11" value="radio" />
						5.00 pm - 6.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio4" value="radio" />
						10.00 am - 11.00 am</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio12" value="radio" />
						6.00 pm - 7.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio5" value="radio" />
						11.00 am - 12.00 pm</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio13" value="radio" />
						7.00 pm - 8.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio6" value="radio" />
						12.00 pm - 1.00 pm</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio14" value="radio" />
						8.00 pm - 9.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio7" value="radio" />
						1.00 pm - 2.00 pm</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio15" value="radio" />
						9.00 pm - 10.00 pm</span>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFF99" style="text-align: left"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio8" value="radio" />
						2.00 pm - 3.00 pm</span>
					</td>
					<td bgcolor="#FFFF99"><span style="text-align: left; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
						<input name="radio" type="radio" id="radio16" value="radio" />
						10.00 pm - 11.00 pm</span>
					</td>
				</tr>
			</table>
		</div>
		<p>&nbsp;</p>
		<input type="hidden" name="booking_date" value="<?php echo date('d/m/Y'); ?>" />
		<input type="hidden" name="booking_time" value="8.00 pm - 9.00 pm" />
		<input type="hidden" name="temp" value="temp" />
		<div id="Button" class="btn-submit-booking" style="cursor: pointer"><b>Booking</b></div>
	</form>
	<p>&nbsp;</p>
</div>
<!-- end contentTwo -->
<p>&nbsp;</p>
<script>
$(function(){
	$('.btn-submit-booking').on('click', function(){
		// alert();
		$('.form-reservation').submit();
	});
});
</script>
<?php
$this->load->view('user/footer_v');
?>