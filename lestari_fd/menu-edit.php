
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
			$menu_id=$_POST['menu_id'];
			$menu_name=$_POST['menu_name'];
			$menu_price=$_POST['menu_price'];
			
		
			$query3=mysql_query("update menu set menu_name='$menu_name', menu_price='$menu_price' where menu_id=$menu_id");
			if($query3) 
				{
					header('Location: menu-list.php');
				}
			}
			else
			{
				$menu_id=$_GET['id_edit'];
				$query1=mysql_query("select * from menu where menu_id=$menu_id");
				$query2=mysql_fetch_assoc($query1);
				
			}
	?>

	<br><br><br>
	<center><h1 style="color:black">Edit Menu</h1><br>
	<center><form method="post" action="menu-edit.php">
	Name:<input type="text" name="menu_name" value="<?php echo $query2['menu_name']; ?>" /><br /><br>
	Price:<input type="text" name="menu_price" value="<?php echo $query2['menu_price']; ?>" /><br /><br />
	<input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
	<br />
	<input type="submit" name="submit" value="update" />
	<input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/>
	</form></center>

	
</body>
<body style = "background: url(fi3.jpg); background-size: 100%;">
</html>