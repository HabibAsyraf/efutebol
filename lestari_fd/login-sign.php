<?php
	session_start();
	include "database.php";
	$un = $_REQUEST["user_name"];
	$pw = $_REQUEST["password"];
	$rl = $_REQUEST["role"];

	$sql = "SELECT * FROM register WHERE user_name = '$un' AND password = '$pw'";
	$objQuery = mysql_query($sql);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["user_name"] = $objResult["user_name"];
			

			session_write_close();
			
			if($objResult["role"] == "admin")
			{
				header("location:admin_menu.php");
			}
			else
			{
				header("location:order.php");
			}
	}
	mysql_close();
?>