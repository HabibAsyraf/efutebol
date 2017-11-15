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
	#main{
		height: 450px;
	}
</style>
<p>&nbsp;</p>
<div id="contentTwo" style="width: 100%; height: 331px;">
	<form id="form2" name="form2" method="post" action="">
		<div align="center">Booking Receipt </div>
	</form>
	<form id="form3" name="form3" method="post" action="">
		<div align="center">
			<table width="509" border="0.5" cellspacing="15">
				<tr>
					<td width="129">Booking ID</td>
					<td width="22">:</td>
					<td width="299"><?php echo $receipt_data['booking_id']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><?php echo $receipt_data['name']; ?></td>
				</tr>
				<tr>
					<td>Contact No.</td>
					<td>:</td>
					<td><?php echo $receipt_data['contact_no']; ?></td>
				</tr>
				<tr>
					<td>Time</td>
					<td>:</td>
					<td><?php echo $receipt_data['booking_time']; ?></td>
				</tr>
				<tr>
					<td>Date</td>
					<td>:</td>
					<td><?php echo date("d/m/Y", strtotime($receipt_data['booking_date'])); ?></td>
				</tr>
				<tr>
					<td>Court No.</td>
					<td>:</td>
					<td><?php echo $receipt_data['court_no']; ?></td>
				</tr>
				<tr>
					<td>Payment Method</td>
					<td>:</td>
					<td><?php echo $receipt_data['payment_method']; ?></td>
				</tr>
			</table>
		</div>
	</form>
</div>
<!-- end contentTwo -->

<?php
$this->load->view('user/footer_v');
?>
