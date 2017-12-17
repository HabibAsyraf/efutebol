<?php 
session_start();
require('includes/config.php');
?>
&nbsp;
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
&nbsp;
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">

			<h1 class="title" >Sell Your Textbooks Here !</h1>
			<div class="entry" >
			
				<form action='process_addbookuser.php' method='POST' enctype="multipart/form-data">
						
						<h2> Book Details </h2>
						
						<b>Category:</b><br>
						<select  name="category">
								<?php			
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
												
													
												}
												
											}
											mysqli_close($link);
								?>
						</select>
						<br><br>
						
						<b>Description:</b><br>
						<p> *Please write the synopsis of book</p>
						<textarea cols="40" rows="4" name='description'></textarea>
						
						<br><b>Price : (RM)</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
						
						
						<br><b>Quantity :</b><br>
						<input type='text' name='quantity' size='40'>
						<br><br>												
						
						
						<b>Image Book :</b><br>
						<input type='file' name='img' size='40'>
						<br><br>
						
						<h2> Contact Details </h2>
						
						<br><b>Name :</b><br>
						<input type='text' name='u_fnm' value= <?php echo $_SESSION['u_fnm'] ?>>
						
						
						<br><b>Contact Number :</b><br>
						<input type="text" name="contact" value= <?php echo $_SESSION['contact'] ?>>
					
						
						<br><b>Email :</b><br>
						<input type='text' name='email' size='40'>
						<br><br>
						
						<input  type='submit'  value='   Submit   '  >
				</form>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
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
<!-- end footer -->
</body>
</html>
