<?php
require('includes/config.php');
	$id = $_POST['b_id'];
	$b_nm=$_POST['b_nm'];
	$b_price=$_POST['b_price'];	
	mysql_query("UPDATE book SET b_nm='$b_nm', b_price='$b_price' WHERE b_id='$id'");
	header("location: all_book.php");
?>