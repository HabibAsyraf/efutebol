<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['del']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
		
			
		
			$delsubcat=$_POST['del'];
			
			$query="delete from subcategory where subcat_nm ='$delsubcat' ";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:category.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>