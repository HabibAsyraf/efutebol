<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>
&nbsp;
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
				<table border='1' WIDTH='80%'>
						<tr>
						<td colspan="11"><a href="addbookuser.php">Sell New Book</a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>BOOK NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>CATEGORY</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>DESCRIPTION</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>CONTACT</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>EMAIL</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>
				
							
</tr>
	<?php
	$count=1;
		while($row=mysqli_fetch_assoc($res))
			{
				
				
				echo '<tr>
					<td>'.$count.'
					<td>'.$row['b_nm'].'
					<td>'.$row['b_cat'].'
					<td>'.$row['b_desc'].'
					<td>'.$row['b_price'].'
					<td>'.$row['b_st'].'
					<td>'.$row['s_cntc'].'
					<td>'.$row['s_email'];
				
				
				
				echo "<td><img src='../$row[b_img]' width='50'/>";
				
				echo 	'<td><a href="process_del_book.php?sid='.$row['b_id'].'"><img src="images/drop.png" ></a>
												
					</tr>';
							$count++;
							}
						?>

					</table>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	
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
