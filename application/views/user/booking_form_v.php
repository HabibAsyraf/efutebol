<?php
$this->load->view('user/header_v');
?>
<div id="contentOne">
	<form id="form1" name="form1" method="post" action="">
		<div align="center">
			<p align="left">&nbsp;</p>
			<div align="left"></div>
			<div align="center">
				<p align="center">&nbsp;</p>
				<p align="center">Booking Form<br /></p>
				<table width="569" border="0.5">
					<tr>
						<td width="182">Name</td>
						<td width="15"><div align="center">:</div></td>
						<td width="358"><label for="textfield"></label>
							<input name="textfield" type="text" value="<?php echo $this->session->userdata('login_user')['name']; ?>" disabled="disabled" readonly id="textfield" size="50" />
						</td>
						</tr>
					<tr>
						<td>Phone No.</td>
						<td><div align="center">:</div></td>
						<td><label for="textfield2"></label>
							<input name="textfield" type="text" value="<?php echo $this->session->userdata('login_user')['contact_no']; ?>" disabled="disabled" readonly id="textfield" size="50" />
						</td>
					</tr>
					<tr>
						<td>Time</td>
						<td><div align="center">:</div></td>
						<td><label for="textfield5"></label>
						<input type="hidden" name="booking_time" value="<?php echo $booking_data['booking_time']; ?>" />
						<input name="textfield5" type="text" disabled="disabled" value="<?php echo $booking_data['booking_time']; ?>" id="textfield5" size="30" readonly="readonly" /></td>
					</tr>
					<tr>
						<td>Date</td>
						<td><div align="center">:</div></td>
						<td><label for="textfield6"></label>
						<input type="hidden" name="booking_date" value="<?php echo $booking_data['booking_date']; ?>" />
						<input name="textfield6" type="text" disabled="disabled" value="<?php echo $booking_data['booking_date']; ?>" id="textfield6" size="30" readonly="readonly" /></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><div align="center">:</div></td>
						<td><label for="textfield3"></label>
						<input name="textfield3" type="text" value="RM 120.00" disabled="disabled" id="textfield3" size="15" /></td>
					</tr>
					<tr>
						<td>Court No.</td>
						<td>
							<div align="center">:</div>
						</td>
						<td>
							<label for="textfield4"></label>
							<input type="hidden" name="court_no" value="Will Be Inform" />
							<input name="textfield4" type="text" value="Will Be Inform" disabled="disabled" id="textfield4" value="" size="15" />
						</td>
					</tr>
					<tr>
						<td>Payment Method</td>
						<td>
							<div align="center">:</div>
						</td>
						<td>
							<input type="radio" name="payment_method" value="Pay At Venue" checked> Pay At Venue <br/>
							<input type="radio" name="payment_method" value="2" disabled> Online(Sorry, Not Available)
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<p>
								<input type="submit" name="button" id="button" value="Booking" />
							</p>
						</td>
					</tr>
				</table>
				<p align="center">&nbsp;</p>
				<div align="left"><br />
				</div>
			</div>
		</div>
	</form>
</div>
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