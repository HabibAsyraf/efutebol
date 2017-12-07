<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script> 
function Total(id, qtym, ud, totm, pc)
{ 

//alert(id);
//alert(totm);
qty=document.getElementById(qtym);
//price= document.getElementById(pc).value;
ud>0?qty.value++:qty.value--; 
qty.value=Math.max(qty.value,0); 
document.getElementById(totm).value=qty.value*pc;

document.getElementById("quantity").value=qty.value;
//var ain=document.querySelectorAll("input[type=hidden]");
//alert(ain.value);

//alert($('input[type=hidden]').value);


var index;
fm = document.getElementById("fm");
inp = fm.getElementsByTagName("input");
//alert(inp[0].type);
for(index = 0; index < inp.length; ++index)
{
	if(inp[index].type == "hidden")
		if(inp[index].name == "quantity")
			if(inp[index].value != 0)
				alert("q="+inp[index].value);
		else
// deal with inp[index] element.
			if(inp[index].name == "menu_id")
				alert("m="+inp[index].value);
}

}

 </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />


<style></style>
</head>		

<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>Order Form</center></font>
<br><br><br>
<body style = "background: url(fi3.jpg); background-size: 100%;">
<body>


<?php 	 
					
					include "database.php";
					$no = 1;
                   	$sql = "SELECT * FROM menu ORDER BY menu_id ASC";            
                  	$myData = mysql_query($sql);			
					
//code for search function
if(isset($_POST['btn_search']))
{
	$txt_search=$_POST['txt_search'];
	$qs="SELECT * FROM menu WHERE (menu_id LIKE '%$txt_search%' or menu_name LIKE '%$txt_search%')";
	$qs1=mysql_query($qs) or die("sql error".$qs);
	$no_result=mysql_num_rows($qs1);
}
else
{
	$qs="SELECT * FROM menu ORDER BY menu_id ASC";
	$qs1=mysql_query($qs) or die("sql error".$qs);
	$no_result=mysql_num_rows($qs1);
}

session_start();
	

	$strSQL = "SELECT * FROM register WHERE user_name = '".$_SESSION['user_name']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);

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



<br><td width="4%" bgcolor="lightblue"><strong>Name</strong></td><td width="4%"  bgcolor="white"><input type="text" name="user_name_<?php echo $j; ?>" id="user_name_<?php echo $j; ?>" value="<?php echo $objResult["user_name"];?>"></td>
			<td width="4%" bgcolor="lightblue"><strong>Phone No</strong></td><td width="4%"  bgcolor="white"><input type="text" name="phone_no"></td>
			<td width="4%" bgcolor="lightblue"><strong>Hostel</strong></td><td width="4%"  bgcolor="white"><input type="text" name="hostel"></td>
			<td width="4%" bgcolor="lightblue"><strong>Date</strong></td><td width="4%"  bgcolor="white"><input type="text" name="date"></td>
			<td width="4%" bgcolor="lightblue"><strong>Time</strong></td><td width="4%"  bgcolor="white"><input type="text" name="time"></td>
					
					
          <?php 
if($no_result > 0) {
?>

<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	
     
     
        
    </select>
    </div><br>
	<form action="orderfunc.php" method="post" id="fm">
	<table>
    	<tr>
			
			
            <td width="4%" bgcolor="lightblue"><strong>Menu Name</strong></td>
            <td width="4%" bgcolor="lightblue"><strong>Menu Price(RM)</strong></td>
            <td width="4%" bgcolor="lightblue"><strong>Quantity</strong></td>
			<td width="4%" bgcolor="lightblue"><strong>Price</strong></td>
			
			
			
        
    	</tr>
		
 <?php
	
			$j = 0;
			while($d1 = mysql_fetch_array($qs1)) {
		extract($d1);
				
		?>
		
		
        <tr>
	
        	<td width="4%"  bgcolor="white"><?php echo $menu_name; ?></td>
			<td width="4%" bgcolor="white"><?php echo number_format($menu_price,2,'.',''); ?></td>
			<input type ="hidden" name="menu_id_<?php echo $j; ?>" id="menu_id_<?php echo $j; ?>"  value="<?php echo $menu_id; ?>">
			
			
			
			<td width="4%"  bgcolor="white">
			<input type='button'  name='subtract' onclick='Total("<?php echo $menu_id; ?>", "qty_<?php echo $j; ?>",-1, "total_<?php echo $j; ?>","<?php echo $menu_price; ?>");' value='-'/> 	
			 <input type='button' name='add' onclick='Total("<?php echo $menu_id; ?>", "qty_<?php echo $j; ?>",1, "total_<?php echo $j; ?>","<?php echo $menu_price; ?>");' value='+'/> 	
			 <input type='text' name="qty_<?php echo $j; ?>" id='qty_<?php echo $j; ?>' value="0"/></td>
			<input type="hidden" name="user_name_<?php echo $j; ?>" id='user_name_<?php echo $j; ?>' value="<?php echo $objResult["user_name"];?>">
			<td width="4%" bgcolor="white"><input type='text' name='total_<?php echo $j; ?>' id='total_<?php echo $j; ?>' value="0" /></td>
			
			
			
 				
        </tr>
		 
        <?php
				$j++;
			}
		?>
		
		<input type="hidden" name="user_name" id='user_name' value="<?php echo $objResult["user_name"];?>">
		
		<td><input type="submit" name="submit" value="Submit" /></td>
		<?php } ?>
    </table>

	</form>
</body>
</div>
</html>