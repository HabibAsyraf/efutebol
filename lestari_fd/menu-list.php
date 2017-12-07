<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List of Menu</title>

</head>

<body>


<br><br><br><br>
<body background="bg11.jpg">
<center><strong><h2>LIST OF MENU</h2></strong></center>
<br>

</body>
</html>



<?php
                   	
					
					include "database.php";
					$no = 1;
                   	$sql = "SELECT * FROM menu ORDER BY menu_id ASC";            
                  	$myData = mysql_query($sql);			
					
//code for search function
if(isset($_POST['btn_search']))
{
	$txt_search=$_POST['txt_search'];
	$qs="SELECT * FROM menu WHERE (menu_id LIKE '%$txt_search%' or menu_name LIKE '%$txt_search%' or menu_price LIKE '%$txt_search%')";
	$qs1=mysql_query($qs) or die("sql error".$qs);
	$no_result=mysql_num_rows($qs1);
}
else
{
	$qs="SELECT * FROM menu ORDER BY menu_id ASC";
	$qs1=mysql_query($qs) or die("sql error".$qs);
	$no_result=mysql_num_rows($qs1);
}

?>

<form name="frm search" action="" method="POST"> 
<table width="72%" border="0" align="center" cellpadding="5" cellspacing="5"> 
<td colspan="3" align="left" bgcolor="lightblue"><center>Search Menu</center></td>
	<tr>
		<td>Enter Your Search Options : </td>
		<td><input type="text" name="txt_search" value=""><input type="submit" name="btn_search" value="Search"> <input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/></td>
	</tr>	
</table>
</form>
					
					
          <?php 
if($no_result > 0) {
?>

<td> 
<center><a href="menu-add.php" class="ml-button-4"><img src="images/addmenu.png" width="60" height="40"></a></a></center><br>
	
</td>
<table width="100%" border="1" align="center" cellpadding="1" cellspacing="1">
	<tr align="center">
		<td width="3%" bgcolor="lightblue"><strong>No.</strong></td>
			<td width="3%" bgcolor="lightblue"><strong>Menu ID</strong></td>
			<td width="3%" bgcolor="lightblue"><strong>Name</strong></td>
			<td width="3%" bgcolor="lightblue"><strong>Price(RM)</strong></td>
			<td width="3%" bgcolor="lightblue"><strong>Action</strong></td>
	</tr>

	<?php
	while($d1 = mysql_fetch_array($qs1)) {
		extract($d1);
	?>

	<tr align="center">
		<td><?php echo $no++;?>.</td>
		<td><?php echo $menu_id;?></td>
		<td><?php echo $menu_name;?></td>
		<td><?php echo number_format($menu_price,2,'.',''); ?></td>
        <td>&nbsp;&nbsp;<a href="menu-edit.php?id_edit=<?php echo $menu_id;?>"><img src="images/edit.png" width="22" height="24"></a> &nbsp; <a href="javascript:check('<?php echo $menu_id;?>')"><img src="images/1b.png"></a></td>
	</tr>
	<?php } ?>
	</table>
	<?php } ?>
	<br>
	<td>  </td>
	</br>


	
	<script type="text/javascript" >
function check(nilai)
{
	//alert("masuk");
	if(confirm('Are you sure to delete this record?'))
	{ 
		document.location.href = "menu-delete.php?id_delete=" + nilai; 
    }
}
</script>
					
