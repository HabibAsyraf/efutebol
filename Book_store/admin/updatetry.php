<?php 
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "book_store";
	
	$DBconn = new mysqli($servername,$username,$password,$databasename);
	
		$b_nm = $POST['b_nm'];
		$b_desc = $POST['b_desc'];
		$b_price = $POST['b_price'];
		$b_qt = $POST['b_qt'];
		$b_st = $POST['b_st'];
		
		$sql = "UPDATE book SET b_nm = '".$b_nm."', b_desc = '".$b_desc."', b_price = '".$b_price."', b_qt = '".$b_qt."', b_st = '".$b_st."'";
		
		$retval = $DBconn->query($sql);
	<?	


