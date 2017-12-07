<?php ob_start(); session_start(); ?>
<html>
<head>
<link rel="stylesheet" href="style.css" />
	
</head>

<?php
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $Date=date('Y-m-d');
?>

<?php

if (isset($_POST["menu_name"])){ 
$db = mysql_connect("localhost", "root","");
mysql_select_db("lestari_fd",$db);



	$menu_name = $_POST["menu_name"];
	$menu_price = $_POST["menu_price"];
	$quantity = $_POST["quantity"];
	
	
	
$sql = "INSERT INTO menu
	 (menu_name, menu_price, quantity) VALUES   
        ('$menu_name','$menu_price', '$quantity')";
		

$result = mysql_query($sql);


echo "Thank you! Information entered.\n";
} else {
?>
<body>

		<h1>Add Menu</h1>
		<form method="post" action="add_menu.php">
		
		<input type="hidden" name="action" value="insert">

		Menu Name:<br><input type="Text" name="menu_name"><br>
		Menu Price:<br><input type="int" name="menu_price"><br>
		Quantity:<br><input type="int" name="quantity"><br>
        
<input type="Submit" name="submit" value="Enter information"> <br>
</form>

<?php }?>

</html>

