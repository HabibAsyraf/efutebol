<?php 
session_start();
require('includes/config.php');

	$q="select * from user";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>
	
<html>
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
&nbsp;
<br></br><br></br>
<div id="page"> 
<center><p><input type="image"src="ftmklogo.png"height="1500"width="1000"alt="Ya"border="0"name="ya"></p></center>
<h1> FTMK</h1>
<h1>PRELOVED BOOK SERVICE</h1>
<h1>USER THAT HAVE REGISTERED</h1></center>
<br></br>
	<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>USERNAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>PASSWORD</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>EMAIL</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>CONTACT</u></b></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['u_unm'].'
										<td>'.$row['u_pwd'].'
										<td>'.$row['u_email'].'
										<td>'.$row['u_contact'];
				
										
									echo 	'<td><a href="process_del_user.php?id='.$row['u_id'].'"><img src="images/drop.png" ></a>
												
									
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
