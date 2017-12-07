<html>
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
	
for ($i=0; $i<$tr; $i++)
{
	if($_POST["qty_".$i] != 0)
	{
	$s3 = "insert into ordermenu(order_id, quantity,menu_id,price, date, time) values ($oid,".$_POST['qty_'.$i].", ".$_POST['menu_id_'.$i].", ".$_POST['total_'.$i].")";
	//echo $s3."<br />";
	$h3 = mysql_query($s3);
	}

}
$sql ="select max(order_id) as orderlatest from orders";
$sqlExecute = mysql_query($sql) or die (mysql_error());
$result = mysql_fetch_assoc($sqlExecute);

$latestorderid = $result['orderlatest'];
$sql2 = "select m.menu_price*o.quantity as totalprice, m.menu_name, o.quantity  from ordermenu o, menu m where o.menu_id = m.menu_id and o.order_id = '$latestorderid'";
$excutesql2 = mysql_query($sql2) or die (mysql_error());
$totalAll = 0;
while($resultSql2 =  mysql_fetch_assoc($excutesql2)){
	echo "Menu : ";
	echo $resultSql2['menu_name'];
	echo "</br>";
	echo "Quantity  : ";
	echo $resultSql2['quantity'];
	echo "</br>";
	echo "Price(RM) : ";
	echo $resultSql2['totalprice'];
	echo "</br>";
	$totalAll = $totalAll + $resultSql2['totalprice'];
	echo "Name : ";
	echo $resultSql2['name'];
	echo "</br>";
	echo "Phone No : ";
	echo $resultSql2['phone_no'];
	echo "</br>";
	echo "Hostel : ";
	echo $resultSql2['hostel'];
	echo "</br>";
	echo "Date : ";
	echo $resultSql2['date'];
	echo "</br>";
	echo "Time : ";
	echo $resultSql2[''];
	echo "</br>";
	
	
	
}
echo "Total Price(RM) : ";
echo $totalAll;



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
$DATE= date('Y-m-d H:m:s');
$s10 = "insert into orders(price, dates) values ('$totalAll', '$DATE')";
		$h10 = mysql_query($s10);


?>
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
&nbsp
&nbsp
<br><a href="receipt.php" class="next">Print Receipt &raquo;</a></br>
</html>