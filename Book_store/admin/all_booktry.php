<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Lotus Flower
Version    : 1.0
Released   : 20080501
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
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
<br></br><br></br>
<div id="page"> 
<center><p><input type="image"src="ftmklogo.png"height="1500"width="1000"alt="Ya"border="0"name="ya"></p></center>
<h1> FTMK</h1>
<h1>PRELOVED BOOK SERVICE</h1>
<h1>LIBRARY BOOK</h1></center>
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="addbooktry.php">Add New Book</a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>DESCRIPTION</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>QUANTITY</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>STATUS</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>	
<TD style="color:darkgreen" WIDTH='25%'><b><u>UPDATE</u></b></TD>			
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['b_nm'].'
										<td>'.$row['b_desc'].'
										<td>'.$row['b_price'].'
										<td>'.$row['b_qt'].'
										<td>'.$row['b_st'];
				echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><a href="process_del_booktry.php?id='.$row['b_id'].'"><img src="images/drop.png" ></a>
											<td><a href="tryupdate.php?id='.$row['b_id'].'"><img src="images/edit.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
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
