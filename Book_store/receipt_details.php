<?php
session_start();
require('includes/config.php');

$q="SELECT * FROM `shipping_transaction` WHERE `t_uniq_code` = '".mysqli_escape_string($conn, $_GET['t_uniq_code'])."'";
$res = mysqli_query($conn,$q) or die("Error : " . mysqli_error($conn));
//If Order ID not found
if(mysqli_num_rows($res) == 0){
	?>
	Order Not Found
	<br/>
	<a href="index.php">Back</a>
	<?php
	
	//Stop the page process here
	exit();
}

// fetch single record of user from first row of result
$order_details = mysqli_fetch_assoc($res);
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
		
		<!------------------------------->
		&nbsp;
		<font style="font-size:30px;margin-left:420px">Receipt Details</font>
		<div class="container">
			<!-- freshdesignweb top bar -->
			<div class="freshdesignweb-top">
				<div class="clr"></div>
			</div><!--/ freshdesignweb top bar -->
			
			<div id="receipt-body" class="form" style="width: 100%;">
				<form method="post">
					<div style="margin: 0 25%;">
						<p class="u_id"><label for="name">Ref No.</label></p>
						<p class="form-control" style="cursor: default;" readonly="readonly"><?php echo strtoupper($order_details['t_uniq_code']); ?></p>
						<br/>
						
						<p class="u_id"><label for="name">Name</label></p>
						<p class="form-control" style="cursor: default;" readonly="readonly"><?php echo $order_details['u_fnm']; ?></p>
						<br/>
						
						<p class="u_id"><label for="name">Contact No.</label></p>
						<p class="form-control" style="cursor: default;" readonly="readonly"><?php echo $order_details['u_contact']; ?></p>
						<br/>
						
						<p class="b_id"><label for="email">Address (Where to C.O.D)</label></p>
						<p class="form-control" style="cursor: default; height: 150px;" readonly="readonly"><?php echo nl2br($order_details['t_address']); ?></p>
					</div>
					<hr/>
					<h3>Ordered Item</h3>
					<table width="100%" border="0">
						<tr>
							<td> <b>No</b> </td>
							<td> <b>Category</b> </td>
							<td> <b>Qty</b> </td>
							<td> <b>Price(RM/each)</b> </td>
							<td> <b>Total(RM)</b> </td>
						</tr>
						<!-- line -->
						<tr>
							<td colspan="5"><hr style="border:1px Solid #a1a1a1;"></td>
						</tr>
						
						<?php
						$count=1;
						$grand_total = 0;
						
						$res = mysqli_query($conn,$q) or die("Error : " . mysqli_error($conn));
						if(mysqli_num_rows($res) > 0){
							while($row = mysqli_fetch_assoc($res))
							{
								
								?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><?php echo $row['b_nm']; ?></td>
									<td><?php echo $row['b_qt']; ?></td>
									<td><?php echo $row['b_price']; ?></td>
									<td><?php echo $row['t_total']; ?></td>
								</tr>
								<?php
								$grand_total = $grand_total + $row['t_total'];
								$count++;
							}
						} ?>
						
						<tr>
							<td colspan="5"><hr style="border:1px Solid #a1a1a1;">
						</tr>
						
						<tr>
							<td colspan="5" align="right">
								<h4>Pay Total (inc GST%) : RM</h4>
							</td>
							<td>
								<h4><?php echo number_format($grand_total, 2, ".", ""); ?> </h4>
							</td>
						</tr>
						<tr>
							<td colspan="5"><hr style="border:1px Solid #a1a1a1;">
						</tr>
						
						<br/>
					</table>
					<br/>
					<div style="text-align: center;">
						<a href="javascript:;" class="btn btn-primary" onclick="javascript:window.print();">Print</a>
						<a href="index.php" class="btn btn-info">Continue</a>
					</div>
					<br/>
				</form> 
			</div>
		</div>
	</body>
</html>
			
			
			