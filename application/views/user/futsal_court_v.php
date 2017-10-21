<?php
$this->load->view('user/header_v');
?>
<style type="text/css">
	#main {
		height: 722px;
		width: 1024px;
	}
	#main #contentTwo {
		height: 250px;
		width: 500px;
		float: left;
		background-color: #292931;
		border-top-style: dotted;
		border-right-style: dotted;
		border-bottom-style: dotted;
		border-left-style: dotted;
		border-top-color: #FF9;
		border-right-color: #FF9;
		border-bottom-color: #FF9;
		border-left-color: #FF9;
	}
	#main #contentThree {
		height: 250px;
		width: 500px;
		float: right;
		background-color: #292931;
		border-top-style: dotted;
		border-right-style: dotted;
		border-bottom-style: dotted;
		border-left-style: dotted;
		border-top-color: #FF9;
		border-right-color: #FF9;
		border-bottom-color: #FF9;
		border-left-color: #FF9;
	}
	#form2 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size: xx-large;
		color: #FFF;
		background-color: #292931;
	}
	#form3 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size: medium;
		font-weight: normal;
		border-top-color: #36F;
		border-right-color: #36F;
		border-bottom-color: #36F;
		border-left-color: #36F;
		color: #FFF;
		background-color: #292931;
	}
	#form4 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size: xx-large;
		color: #FFF;
		background-color: #292931;
	}
	#form5 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size: 15px;
		color: #FFF;
		background-color: #292931;
	}
</style>
<div id="contentOne">
	<form id="form1" name="form1" method="post" action="">
		<p align="center"><img src="<?php echo base_url(); ?>assets/anati-design/courtplan.jpg" width="600" height="400" /></p>
		<p align="center">&nbsp;</p>
	</form>
</div><!-- end contentOne -->

<div id="contentTwo">
	<form id="form2" name="form2" method="post" action="">
		<div align="center">Pricing </div>
	</form>
	<form id="form3" name="form3" method="post" action="">
		<div align="center">
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
	</form>
	<p>&nbsp;</p>
</div>
<!-- end contentTwo -->

<div id="contentThree">
	<form id="form4" name="form4" method="post" action="">
		<div align="center">Rules and Regulations </div>
	</form>
	<form id="form5" name="form5" method="post" action="">
		<p align="center">  # No studded or spike shoes</p>
		<p align="center"> # Arrive atleast 15 minutes early before your booked time</p>
		<p align="center"> # Strictly 'NO SMOKING' and 'NO LIQUOR' will be allowed within the premises</p>
		<p align="center"> # Minimum numbers of players (6), however comfortable players are 10 within the courts and 2 subs</p>
	</form>
</div>
<!-- end contentThree -->

<?php
$this->load->view('user/footer_v');
?>
