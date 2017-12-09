<?php
include "database.php";
$sql = "SELECT * FROM register ORDER BY user_nasasame ASC";
$myData = mysql_query($sql) or die('Error message: '.mysql_error());
echo mysql_num_rows($myData);
exit();

//code for search function
if(isset($_POST['btn_search'])){
	$txt_search=$_POST['txt_search'];
	$qs = "SELECT * FROM register WHERE (id LIKE '%$txt_search%' or name LIKE '%$txt_search%' or hostel LIKE '%$txt_search%')";
	$qs1 = mysql_query($qs) or die('Error message: '.mysql_error());
	$no_result=mysql_num_rows($qs1);
}
else{
	$qs = "SELECT * FROM `register` ORDER BY `id` ASC";
	$qs1= mysql_query($qs) or die('Error message: '.mysql_error());
	$no_result = mysql_num_rows($qs1);
} ?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>List of Customer</title>
	</head>
	<body background="bg11.jpg">
		<br><br><br><br><br>
		<center><strong><h2>LIST OF CUSTOMER</h2></strong></center>
		<br><br><br>
		<form name="frm search" action="" method="POST"> 
			<table width="72%" border="0" align="center" cellpadding="5" cellspacing="5"> 
			<td colspan="3" align="left" bgcolor="lightblue"><center>Search Customer</center></td>
				<tr>
					<td>Enter Your Search Options : </td>
					<td><input type="text" name="txt_search" value=""><input type="submit" name="btn_search" value="Search"> <input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/></td>
				</tr>	
			</table>
		</form>
		
		<?php 
		if($no_result > 0) { ?>
			<td> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<table width="100%" border="1" align="center" cellpadding="1" cellspacing="1">
				<tr align="center">
					<td width="3%" bgcolor="lightblue"><strong>No.</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Customer ID</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Role</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Name</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Username</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Password</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Email</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Phone No</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Hostel</strong></td>
					<td width="3%" bgcolor="lightblue"><strong>Action</strong></td>
				</tr>
				
				<?php
				while($d1 = mysql_fetch_array($qs1)){
					extract($d1); 
					?>
					
					<tr align="center">
						<td><?php echo $no++;?>.</td>
						<td><?php echo $id;?></td>
						<td><?php echo $role;?></td>
						<td><?php echo $name;?></td>
						<td><?php echo $user_name;?></td>
						<td><?php echo $password;?></td>
						<td><?php echo $email;?></td>
						<td><?php echo $phone_no;?></td>
						<td><?php echo $hostel;?></td>
						<td>&nbsp;&nbsp;<a href="customer-edit.php?id_edit=<?php echo $id;?>"><img src="images/edit.png" width="22" height="24"></a> &nbsp; <a href="javascript:check('<?php echo $id;?>')"><img src="images/1b.png"></a></td>
					</tr>
					<?php 
				}
				?>
			</table>
			<?php
		}
		?>
		<br>
		<td>  </td>
		</br>

		<script type="text/javascript" >
		function check(nilai)
		{
			//alert("masuk");
			if(confirm('Are you sure to delete this record?'))
			{ 
				document.location.href = "customer-delete.php?id_delete=" + nilai; 
			}
		}
		</script>
	</body>
</html>

