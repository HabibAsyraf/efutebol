<?php session_start();?>
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
		<div id="page">
			<!-- start content -->
			<div id="content">
				<div class="post">
					<h1 class="title">Viewcart</h1>
					<div class="entry">
						<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr>
									<td> <b>No</b> </td>
									<td> <b>Category</b> </td>
									<td> <b>Qty</b> </td>
									<td> <b>Price(RM/each)</b> </td>
									<td> <b>Total(RM)</b> </td>
									<td> <b>Delete</b> </td>
								</tr>
								<!-- line -->
								<tr>
									<td colspan="7"><hr style="border:1px Solid #a1a1a1;">
								</tr>
								
								<?php
								$tot = 0;
								$i = 1;
								if(isset($_SESSION['cart']))
								{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
												<td> '.$i.'</td>
												<td> '.$x['nm'].'</td>
												<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'"> </td>
												<td> '.number_format($x['rate'], 2, ".", "").' </td>
												<td> '.number_format(($x['qty']*$x['rate']), 2, ".", "").' </td>
												<td> <a href="process_cart.php?id='.$id.'">Delete</a> </td>
											</tr>';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									} ?>
									<tr>
										<td colspan="7"><hr style="border:1px Solid #a1a1a1;"></td>
									</tr>
									
									<tr>
										<td colspan="7" align="right">
											<h4>Pay Total (inc GST%) : RM</h4>
										</td>
										<td>
											<h4><?php echo number_format($tot, 2, ".", ""); ?> </h4>
										</td>
									</tr>
									<?php
								}
								else{ ?>
									<tr>
										<td colspan="7" style="text-align: center">Cart Is Empty</td>
									</tr>
									<?php
								}
								?>
								
								<tr>
									<td colspan="7"><hr style="border:1px Solid #a1a1a1;">
								</tr>
								
								<br/>
							</table>
							
							<br><br>
							<center>
								<input type="submit" value=" Re-Calculate " >
								<div></div>
								<div></div>
								<div></div>
								<a href="checkout.php">Checkout Now<a/>
							</center>
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
	</body>
</html>
