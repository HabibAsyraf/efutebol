<?php
	include ("includes/config.php");
	$id = $_POST['b_id'];
	$b_nm=$_POST['b_nm'];
	$b_desc=$_POST['b_desc'];
	$b_price=$_POST['b_price'];	
	$b_qt=$_POST['b_qt'];	
	$b_st=$_POST['b_st'];	
	
	mysql_query("UPDATE book SET b_name='$b_name', b_desc='$b_desc', b_price='$b_price',b_qt='$b_qt', b_st='$b_st'  WHERE b_id='$id'");
	header("location: all_book.php");
?>