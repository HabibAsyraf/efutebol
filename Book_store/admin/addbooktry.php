<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Add Book</h1>
			<div class="entry" >
				<form action='process_addbooktry.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Book Name :</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b>Description :</b><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b>Price :</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						<b>Quantity :</b><br>
						<input type='text' name='quantity' size='40'>
						<br><br>
						
						<b>Status :</b><br>
						<select id="status" name="status">
						<option value="available">Available</option>
						</select></center>
						<br></br>
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
				</form>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
