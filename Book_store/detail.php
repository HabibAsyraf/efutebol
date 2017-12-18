<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
&nbsp;
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		include("includes/head.inc.php");
	?>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
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
									<h1 class="title">								
									<?php echo $row['b_nm'];?>
									
									</h1>
									
									<div class="entry">
										<?php
										
											echo 
											'	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
															
																<td align="right" width="10%">Book</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_nm'].'</td>
															</tr>
															<div></div>
															
													
															<tr>
																<td align="right">Price </td>
																<td>: </td>
																<td align="left">'.$row['b_price'].'</td>
																
															</tr>	
															<div></div>
															
															<tr>
																<td align="right">Status </td>
																<td>: </td>
																<td align="left">'.$row['b_st'].'</td>
																
															</tr>
															<div></div>
															
															<tr>
																<td align="right">Quantity </td>
																<td>: </td>
																<td align="left">'.$row['b_qt'].'</td>
																
															</tr>
															<div></div>
															
															<tr>
																<td align="right">Description </td>
																<td>: </td>
																<td align="left">'.$row['b_desc'].'</td>
															</tr>
															<div></div>
															
														</table>																							
													</td>
												</tr>
											</table>
										
												<tr valign="bottom" >												
														<a href="'.$row['b_img'].'" rel="lightbox"><img src="images/zoom.gif" ></a>									
												</tr>
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">	
												
																							
											 </table>								
																				
											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="process_cart.php?b_id='.$row['b_id'].'&nm='.$row['b_nm'].'&rate='.$row['b_price'].'">
														<img src="images/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><img src="images/addcart.jpg"><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
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
</body>
</html>
