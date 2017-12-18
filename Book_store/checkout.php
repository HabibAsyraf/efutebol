<?php
session_start();

require('includes/config.php');

if(!isset($_SESSION['cart']) || sizeof($_SESSION['cart']) == 0)
{
	header("location: viewcart.php");
}

if(isset($_POST) && sizeof($_POST) > 0)
{
	if(isset($_SESSION['cart']))
	{
		$t_uniq_code = uniqid();
		$u_id = mysqli_real_escape_string($conn, $_SESSION['uid']);
		$u_fnm = mysqli_real_escape_string($conn, $_SESSION['ufnm']);
		$u_email = mysqli_real_escape_string($conn, $_SESSION['uemail']);
		$u_contact = mysqli_real_escape_string($conn, $_SESSION['ucontact']);
		$t_address = mysqli_real_escape_string($conn, $_POST['address']);
		
		foreach($_SESSION['cart'] as $b_id => $book_details)
		{
			$b_id = mysqli_real_escape_string($conn, $b_id);
			$b_nm = mysqli_real_escape_string($conn, $book_details['nm']);
			$b_price = mysqli_real_escape_string($conn, $book_details['rate']);
			$b_qt = mysqli_real_escape_string($conn, $book_details['qty']);
			$t_total = mysqli_real_escape_string($conn, ($book_details['qty']*$book_details['rate']));
			
			$query=	"INSERT INTO `shipping_transaction` (t_uniq_code, u_id, u_fnm, u_email, u_contact, t_total, b_id, b_nm, b_price, b_qt, t_address) ".
					"values ('$t_uniq_code','$u_id','$u_fnm','$u_email','$u_contact','$t_total','$b_id','$b_nm','$b_price','$b_qt','$t_address')";
			
			mysqli_query($conn,$query) or die("Error : " . mysqli_error($conn));
			
			//Destroy cart session as order has been completed
			unset($_SESSION['cart']);
			header("location:receipt_details.php?t_uniq_code=$t_uniq_code");
		}
	}
	else{
		header("location: viewcart.php");
	}
}

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
	
	<!------------------------------->
	&nbsp;
	<font style="font-size:30px;margin-left:420px">Shipping Details</font>
	<div class="container">
		<!-- freshdesignweb top bar -->
		<div class="freshdesignweb-top">
			<div class="clr"></div>
		</div><!--/ freshdesignweb top bar -->
		
		<div  class="form" style="width: 100%;">
			<form method="post">
				<div style="margin: 0 25%;">
					<p class="u_id"><label for="name">Name</label></p>
					<p class="form-control" style="cursor: default;" readonly="readonly"><?php echo $_SESSION['ufnm']; ?></p>
					<br/>
					
					<p class="u_id"><label for="name">Contact No.</label></p>
					<p class="form-control" style="cursor: default;" readonly="readonly"><?php echo $_SESSION['ucontact']; ?></p>
					<br/>
					
					<p class="b_id"><label for="email">Address (Where to C.O.D)</label></p>
					<textarea class="form-control" name="address" placeholder="Address" required style="resize: none; height: 100px;"></textarea>
				</div>
				<hr/>
				<h3>Shipping Item</h3>
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
					$tot = 0;
					$i = 1;
					if(isset($_SESSION['cart']))
					{

						foreach($_SESSION['cart'] as $id=>$x)
						{	
							echo '
								<tr>
									<td> '.$i.' </td>
									<td> '.$x['nm'].' </td>
									<td> '.$x['qty'].' </td>
									<td> '.number_format($x['rate'], 2, ".", "").' </td>
									<td> '.number_format(($x['qty']*$x['rate']), 2, ".", "").' </td>
								</tr>';
							
							$tot = $tot + ($x['qty']*$x['rate']);
							$i++;
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
							<h4><?php echo number_format($tot, 2, ".", ""); ?> </h4>
						</td>
					</tr>
					<tr>
						<td colspan="5"><hr style="border:1px Solid #a1a1a1;">
					</tr>
					
					<br/>
				</table>
				<br/>
				<div style="text-align: right; padding-right: 50px">
					<input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit" />
				</div>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['uid']; ?>" />
				<input type="hidden" name="ufnm" value="<?php echo $_SESSION['ufnm']; ?>" />
				<input type="hidden" name="uemail" value="<?php echo $_SESSION['uemail']; ?>" />
				<input type="hidden" name="ucontact" value="<?php echo $_SESSION['ucontact']; ?>" />
			</form> 
		</div>
	</div>
</body>