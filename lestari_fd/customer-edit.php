
<html>
<title>Edit Customer</title>
<body>
<br><br><br>	
<center><fieldset style="width:35%">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>

	<?php
	include('database.php');
	
			
			if(isset($_POST['submit']))
			{	
			$id=$_POST['id'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone_no=$_POST['phone_no'];
			$hostel=$_POST['hostel'];
		
			$query3=mysql_query("update register set name='$name', email='$email', phone_no='$phone_no', hostel='$hostel' where id=$id");
			if($query3) 
				{
					header('Location: customer_list.php');
				}
			}
			else
			{
				$id=$_GET['id_edit'];
				$query1=mysql_query("select * from register where id=$id");
				$query2=mysql_fetch_assoc($query1);
				
			}
	?>

	<br><br><br>
	<center><h1 style="color:black">Edit Menu</h1><br>
	<center><form method="post" action="customer-edit.php">
	Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br /><br>
	Email:<input type="text" name="email" value="<?php echo $query2['email']; ?>" /><br /><br />
	Phone No:<input type="text" name="phone_no" value="<?php echo $query2['phone_no']; ?>" /><br /><br />
	Hostel:<input type="text" name="hostel" value="<?php echo $query2['hostel']; ?>" /><br /><br />
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<br />
	<input type="submit" name="submit" value="update" />
	<input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/>
	</form></center>

	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">
</html>