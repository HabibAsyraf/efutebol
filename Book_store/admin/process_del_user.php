<?php
require('includes/config.php');

			$query="delete from user where u_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:student_register.php");

?>