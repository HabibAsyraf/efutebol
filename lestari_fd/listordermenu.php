<?php ob_start(); session_start(); ?>
<HTML>
<?php



$db = mysql_connect("localhost", "root", "");
mysql_select_db("lestari_fd",$db);
$result = mysql_query("SELECT * FROM ordermenu",$db);


echo "<TABLE BORDER=2>";
echo"<TR><TD><B>Order id</B></TD><TD><B>Menu id</B></TD><TD><B>Quantity</B></TD><TD><B>Price(RM)</B></TD></TR>";
while ($myrow = mysql_fetch_array($result))
{
	
echo "<TR><TD>".$myrow["order_id"]." "."</TD><TD>".$myrow["menu_id"]."</TD><TD>".$myrow["quantity"]."</TD><TD>".$myrow["price"]."</TD>";


}
echo "</TABLE>";
?>   

</HTML>



