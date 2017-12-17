<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['f_fullname']) || empty($_POST['f_email']) || empty($_POST['f_subject']) || empty($_POST['f_message']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		if(is_numeric($_POST['f_fullname']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['f_email']))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		
		if($msg!="")
		{
			header("location:contact.php?error=".$msg);
		}
		else
		{
			$f_fullname=$_POST['f_fullname'];
			$f_email=$_POST['f_email'];
			$f_subject=$_POST['f_subject'];
			$f_message=$_POST['f_message'];
				
			$query="insert into feedback(f_fullname,f_email,f_subject,f_message)
			values('$f_fullname','$f_email','$f_subject','$f_message')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:contact.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>