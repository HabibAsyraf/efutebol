<ul>
	<li id="login">
				
		<?php
		require('includes/config.php');
		if(isset($_SESSION['status']))
	{
		echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
	}
		else					
	{
		echo '<form action="process_login.php" method="POST">
			<h2>Login</h2>
			<b>Username:</b>
			<br><input type="text" name="usernm"><br>
			<br>
																						
			<b>Password:</b>
			<br><input type="password" name="pwd">
			<input type="submit" id="x" value="Login" />
			</form>';
	}
		?>
	</li>

<li id="search">
			<h2>Search</h2>
			<form method="GET" action="search_result.php">
			<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
			</fieldset>
			</form>
</li>
		
</ul>