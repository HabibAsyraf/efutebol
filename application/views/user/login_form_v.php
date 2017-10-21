<?php
$this->load->view('user/header_v');
?>
<div id="login">
	<br/>
	<form method="post" action="<?php echo base_url(); ?>user/login_form">
		<h2>Sign In</h2>
		<center>
			<?php get_message(); ?>
		</center>
		<p>
			<input type="text" name="email_address" id="email_address" placeholder="Enter Email Address" />
			<input type="password" id="password" name="password" placeholder="Enter Password" />
			<input type="submit" id="login-btn"  style="cursor: pointer;" value="Sign In" style="width: 100%;" />
		</p>
		<p>> Forgot your password? <br />
		> Don't have an account?
		</p>
	</form>
</div>
<form>
	
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$this->load->view('user/footer_v');
?>