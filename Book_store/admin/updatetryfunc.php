<?php
require('includes/config.php');

if(!empty($_POST))
{
	$msg=array();
	if(empty($_POST['id']) || empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price'])|| empty($_POST['quantity']) || empty($_POST['status']))
	{
		$msg[]="Please full fill all requirement";
	}
	
	if(!(is_numeric($_POST['price'])))
	{
		$msg[]="Price must be in Numeric  Format...";
	}
	
	if(!(is_numeric($_POST['quantity'])))
	{
		$msg[]="Quantity must be in Numeric  Format...";
	}
	
	if(!empty($_FILES['img']['name']) && $_FILES['img']['error'] > 0)
		$msg[] = "Error uploading file";
	
	if(!empty($_FILES['img']['name']) && !(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
		$msg[] = "wrong file  type";
	
	if(!empty($msg))
	{
		echo '<b>Error:-</b><br>';
		
		foreach($msg as $k)
		{
			echo '<li>'.$k;
		}
		?>
		<br/>
		<a href="updatetry.php?id=<?php echo $_POST['id']; ?>">Back</a>
		
		<?php
	}
	else
	{
		//Get existing data
		$q="SELECT * FROM book WHERE b_id = " . mysqli_real_escape_string($conn, $_POST['id']);
		$res = mysqli_query($conn,$q) or die("Error : " . mysqli_error($conn));
		$book_details = mysqli_fetch_assoc($res);
		
		//Initiate data value before update
		$b_id = mysqli_real_escape_string($conn, $_POST['id']);
		$b_nm = mysqli_real_escape_string($conn, $_POST['name']);
		$b_desc = mysqli_real_escape_string($conn, $_POST['description']);
		$b_price = mysqli_real_escape_string($conn, $_POST['price']);
		$b_qt = mysqli_real_escape_string($conn, $_POST['quantity']);
		$b_st = mysqli_real_escape_string($conn, $_POST['status']);
		$b_img = mysqli_real_escape_string($conn, $book_details['b_img']); //Existing Image
		
		//If there is new image you want to upload
		if(!empty($_FILES['img']['name'])){
			//Delete old one first if exists
			if($b_img != "" && file_exists("../" . $b_img)){
				unlink("../" . $b_img);
			}
			
			//Then you can upload it to the server
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$b_img = "upload_image/".$_FILES['img']['name']; //New image filename
		}
		
		//Begin update query
		$query="UPDATE book SET b_nm='" . $b_nm . "', b_desc='".  $b_desc . "', b_qt='" . $b_qt . "', b_price='" . $b_price . "', b_st='" . $b_st . "', b_img='" . $b_img . "' WHERE b_id = '" . $b_id . "'";
		mysqli_query($conn,$query) or die("Error : " . mysqli_error($conn));
		
		//Redirect it back to the previous form
		$id = $_POST['id'];
		header("location:updatetry.php?id=$id");
	}
}
else
{
	header("location:index.php");
}
?>