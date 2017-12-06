<?php 
error_reporting(0);
$connection = mysql_connect("localhost", "root", "");
mysql_select_db("lestari_fd",$connection);


	 
	    $name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
  		$email = $_POST['email'];
		$phone_no = $_POST['phone_no'];
		$hostel = $_POST['hostel'];
		
		
		
	 
	
	$result = "INSERT INTO register
			(name, user_name, password, email, phone_no, hostel) VALUES ('$name','$user_name','$password','$email','$phone_no','$hostel')";
	

	if (mysql_query($result, $connection))
	{	
	?>
	<script>
		             alert('PENDAFTARAN BERJAYA');
					 location.assign("login.php");
	                 
					 </script>
	<?php
		       
		
	}
	else
	{
			?>
        <script>
	                 alert("HARAF MAAF PENDAFTARAN TIDAK BERJAYA");
					 location.assign("user_info_int.php");
					 </script>
	    <?php 
    }
	
	
	
	
?>
	


