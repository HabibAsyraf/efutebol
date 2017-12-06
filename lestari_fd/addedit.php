<HTML>

<body>
	<h1>Letter Detail</h1>
<form action="addedit.php" method="post">
</body>
</html>
<?php
$order_id= $_GET["order_id"];

$db = mysql_connect("localhost", "root", "");
mysql_select_db("lestari_fd",$db);
$result = mysql_query("SELECT * FROM ordermenu WHERE order_id=$order_id",$db);
$myrow = mysql_fetch_array($result);

echo "order_id: ".$myrow["order_id"];
echo "<br>quantity: ".$myrow["quantity"];
echo "<br>menu_id: ".$myrow["menu_id"];
echo "<br>price: ".$myrow["price"];

?>
</HTML>