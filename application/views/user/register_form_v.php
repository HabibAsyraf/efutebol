<?php
$this->load->view('user/header_v');
?>
<style type="text/css">
	#form8 {
		font-family: sans-serif;
		font-size: 35px;
		text-decoration: none;
		color: #FF6;
	}
	#form9 {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size: 15px;
		color: #FFF;
		border-top-color: #0FC;
		border-right-color: #0FC;
		border-bottom-color: #0FC;
		border-left-color: #0FC;
	}
</style>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<div id="form8">
<div align="center">Sign Up</div>
</div>
<form id="form9" name="form9" method="post" action="">
	<center>
		<?php get_message(); ?>
	</center>
	<div align="center">
		<table width="553" border="0.5">
			<tr>
				<td width="135"><div align="left">
				<p>* Required Field</p>
				</div></td>
				<td width="10">&nbsp;</td>
				<td width="394">&nbsp;</td>
			</tr>
			<tr>
				<td width="135"><div align="left">Name*</div></td>
				<td width="10">:</td>
				<td width="394"><label for="name2"></label>
				<input name="name" type="text" id="name2" size="50" value="<?php echo isset($name) ? $name : ''; ?>" /></td>
			</tr>
			<tr>
				<td><div align="left">Contact No.*</div></td>
				<td>:</td>
				<td><label for="email"></label>
				<input name="contact_no" type="text" id="email" size="50" value="<?php echo isset($contact_no) ? $contact_no : ''; ?>" /></td>
			</tr>
			<tr>
				<td><div align="left">Email*</div></td>
				<td>:</td>
				<td><label for="email"></label>
				<input name="email_address" type="text" size="50" value="<?php echo isset($email_address) ? $email_address : ''; ?>" /></td>
			</tr>
			<tr>
				<td><div align="left">Password*</div></td>
				<td>:</td>
				<td><label for="password"></label>
				<input type="password" name="password" value="<?php echo isset($password) ? $password : ''; ?>" /></td>
			</tr>
			<tr>
				<td><div align="left">Confirm Password*</div></td>
				<td>:</td>
				<td><label for="confirm password"></label>
				<input type="password" name="confirm_password" value="<?php echo isset($confirm_password) ? $confirm_password : ''; ?>" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="button3" id="button3" value="Submit" />
				<input type="reset" name="button3" id="button4" value="Reset" /></td>
			</tr>
		</table>
	</div>
	<p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$this->load->view('user/footer_v');
?>