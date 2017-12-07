<html>
<style>
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
    background-color: #4CAF50;
    color: white;
}

.round {
    border-radius: 50%;
}
</style>
<?php

include "database.php";
//$oi = $_REQUEST["order_id"];
//$mi = $_REQUEST["menu_id"];	
//$q = $_REQUEST["quantity"]

//$oi = mysql_real_escape_string($_POST["order_id"]);
//$mi = mysql_real_escape_string($_POST["menu_id"][]);
//$q = mysql_real_escape_string($_POST["quantity"][]);


$s2 = "select * from orders order by order_id desc limit 1 ";
$h2 = mysql_query($s2);
$r2 = mysql_fetch_assoc($h2);
$oid = $r2["order_id"];
	
$s = "select * from menu";
$h = mysql_query($s);
$tr=mysql_num_rows($h);

//Calculate total first
$total_price = 0;
for($i=0; $i<$tr; $i++)
{
	if($_POST["qty_".$i] != 0)
	{
		$total_price = $_POST['total_'.$i];
	}
}

//if total still 0, its means the order order is empty
//Need to check for it first
if($total_price > 0){
	//If the total is more than 0
	// then, Isert parent first
	$DATE= date('Y-m-d H:m:s');
	$s10 = "insert into orders(price, dates,user_name) values ('".$total_price."', '".$DATE."', '".$_POST["user_name"]."')";
	$h10 = mysql_query($s10);
	
	//Get last inserted order_id
	$last_order_id = mysql_insert_id();
	
	//Then start inserting the ordered menu
	for($i=0; $i<$tr; $i++)
	{
		if($_POST["qty_".$i] != 0)
		{
			$s3 = "insert into ordermenu(order_id,quantity,menu_id,price) values ('" . $last_order_id . "', '".$_POST['qty_'.$i]."', '".$_POST['menu_id_'.$i]."', '".$_POST['total_'.$i]."')";
			$h3 = mysql_query($s3);
		}
	}
	
	//Then fetch the inserted ordered menu with the last order id ($last_order_id)
	$sql2 = "select m.menu_price*o.quantity as totalprice, m.menu_name, o.quantity  from ordermenu o, menu m where o.menu_id = m.menu_id and o.order_id = '" . $last_order_id . "'";
	$excutesql2 = mysql_query($sql2) or die (mysql_error());
	$totalAll = 0;
	while($resultSql2 =  mysql_fetch_assoc($excutesql2)){
		echo "Menu :";
		echo $resultSql2['menu_name'];
		echo "</br>";
		echo "Quantity  :";
		echo $resultSql2['quantity'];
		echo "</br>";
		echo "Price(RM) :";
		echo number_format($resultSql2['totalprice'],2,'.','');
		echo "</br>";
		
		$totalAll = $totalAll + $resultSql2['totalprice'];
	}
	echo "Total Price(RM) :";
	echo number_format($totalAll,2,'.','');
	?>
	<a href="receipt.php" class="next">Print Receipt &raquo;</a>
	<?php
}
else{
	//if total price is 0
	?>
	No order has been selected <br/>
	<a href="order.php" class="next">&laquo; Back</a>
	<?php
}
/*
if(isset($_POST['submit']))
{	
	for($i = 0; $i < count($_POST["menu_id"]); $i++)
	{
		
		$mi = mysql_real_escape_string($_POST["menu_id"][$i]);
		$q= mysql_real_escape_string($_POST["quantity"][$i]);
		echo '<script type="text/javascript">alert("'.$mi.' = '.$q.'");</script>';
		if($q > 0)
		{
		
			if($mi==''||$q=='')
			{
				$msg = "Please fill all the requiremet field.";
				echo '<script type="text/javascript">alert("'.$msg.'");</script>';
				echo "<meta http-equiv=\"refresh\" content=\"0; url=order.php\">";
			}
				
			else {
				
				$sql = "INSERT INTO order(menu_id,date) VALUES ('$mi','$DATE')";
				if(mysql_query($sql))
				{
					$msg2 = "Order is added!";
					echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
					echo "<meta http-equiv=\"refresh\" content=\"0; url=order.php\">";
				}
				else{
					$msg2 = "Pls try again!";
					echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
					echo "<meta http-equiv=\"refresh\" content=\"0; url=order.php\">";
				}
			}
		}
			
	}
}
*/
?>
</html>