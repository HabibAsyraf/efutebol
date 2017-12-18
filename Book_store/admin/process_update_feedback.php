<?php
require('includes/config.php');

if(!empty($_POST))
{
	//Initiate data value before update
	$f_id = mysqli_real_escape_string($conn, $_POST['f_id']);
	$f_replied_message = mysqli_real_escape_string($conn, $_POST['f_replied_message']);
	$f_status = mysqli_real_escape_string($conn, $_POST['f_status']);
	
	//Begin update query
	$query="UPDATE feedback SET f_replied_message='" . $f_replied_message . "', f_status='" . $f_status . "' WHERE f_id = '" . $f_id . "'";
	mysqli_query($conn,$query) or die("Error : " . mysqli_error($conn));
	
	//Redirect it back to the previous form
	$id = $_POST['f_id'];
	header("location:feedback_details.php?id=$id");
}
else
{
	header("location:index.php");
}
?>