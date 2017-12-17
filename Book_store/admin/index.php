<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<!-- start header template -->
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>


<!-- end header template -->

<!-- start header menubar -->
<body>
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>

<!-- end header menubar -->

<!-- start page to center content -->

<br></br><br></br>
<div id="page"> 
<center><p><input type="image"src="ftmklogo.png"height="1500"width="1000"alt="Ya"border="0"name="ya"></p></center>
<h1> FTMK</h1>
<h1>PRELOVED BOOK SERVICE</h1>
<h1>UNIVERSITI TEKNIKAL MALAYSIA MELAKA</h1></center>
<br></br>

	<!-- start content -->
	<div id="content">
		<div class="post">
			<center><h1 class="title"> Welcome to Admin .....</h1>
			<div class="entry">
			
			<h3>Admin will update the entry of book everyday</h3>
			<h3>Admin will delete the book out of stock</h3></center>
		
				
			</div>
		</div>
	</div>
	<!-- end content -->
	
	<div style="clear: both;">&nbsp;</div>
</div>

<!-- end page to center content -->

<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->

</body>
</html>
