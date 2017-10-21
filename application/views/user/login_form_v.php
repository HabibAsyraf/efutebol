<?php
$this->load->view('user/header_v');
?>

<style type="text/css">
	#login{
		position: absolute;
		top:50%;
		left:50%;
		bottom: 10%;
		transform:translate(-50%, -50%);
		}
	#login h2{
		text-align: center;
		color: white;
		font-family: sans-serif;
		font-size: 35px;
		}
	#login input{
		display: block;
		width: 320px;
		height: 40px;
		padding: 10px;
		font-size: 14px;
		font-family: sans-serif;
		color: white;
		background: rgba(0,0,0,0.3);
		outline: none;
		border: 1px solid rgba(0,0,0,0.3);
		border-radius: 5px;
		box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2),0px 1px 1px rgba(255,255,255,0.2);
		margin-bottom: 10px; 
		}
	#login #login-btn{
		background: #55acee;
		font-size: 18px;
		text-align: center;
		vertical-align: middle;
		line-height: 20px;
		}
	#login form p {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		color: #FFF;
	}
</style>
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