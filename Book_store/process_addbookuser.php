<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['status']) || empty($_POST['u_fnm']) || empty($_POST['contact']) || empty($_POST['mail']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!(is_numeric($_POST['price'])))
		{
	
			$msg[]="Price must be in Numeric  Format...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../book/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";

		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../book/".$_FILES['img']['name']);
			$b_img = "book/".$_FILES['img']['name'];	
		
			$b_nm=$_POST['name'];
			$b_cat=$_POST['category'];
			$b_desc=$_POST['description'];
			$b_price=$_POST['price'];
			$b_st=$_POST['status'];
			$u_fnm=$_POST['u_fnm'];
			$contact=$_POST['contact'];
			$email=$_POST['mail'];
			
			
			
			$query="insert into book(u_fnm,b_nm,b_subcat,b_desc,b_price,b_st,b_img,contact,mail)
			values('$u_fnm','$b_nm','$b_subcat','$b_desc','$b_price','$b_st','$b_img','$u_unm','$s_cntc','$s_email')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addbookuser.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	