	<?php

include "database.php";
$menu_id = $_REQUEST["menu_id"];	
$menu_name = $_REQUEST["menu_name"];
$menu_price = $_REQUEST["menu_price"];


if($menu_id==''||$menu_name==''||$menu_price=='')
{
	$msg = "Please fill all the requiremet field.";
	echo '<script type="text/javascript">alert("'.$msg.'");</script>';
	echo "<meta http-equiv=\"refresh\" content=\"0; url=menu-add.php\">";
}
	
else {
	
	$sql = "INSERT INTO menu VALUES ('$menu_id','$menu_name','$menu_price')";
	$r = mysql_query($sql);
	
	$msg2 = "Menu is added!";
	echo '<script type="text/javascript">alert("'.$msg2.'");</script>';
	echo "<meta http-equiv=\"refresh\" content=\"0; url=menu-list.php\">";
}
?>



