<?php
require('includes/config.php');

			$query="delete from shipping_details where id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:shipping_detail.php.php");

?>