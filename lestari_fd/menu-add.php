<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD MENU</title>
<br><br>
		
</head>

<body style = "background: url(fi3.jpg); background-size: 100%;">
<center><fieldset style="width:35%">
<td width="903" align="left" bgcolor="#F3D886" style="border-radius: 0px 8px 8px 0px; font-size: 30px; font-weight: bold;"><div align="center" class="style6"><center>



<div id="topbar">
<br><br>
    	<center><h1 style="color:black"> ADD MENU</h1>
    </div>
<div id="form">
		<table>
		<center>
        	<form method="post" action="menu-func.php">
            	<tr>
                
                <?php
					include ("database.php");
					$g = mysql_query("select max(menu_id) from menu");
					while($menu_id=mysql_fetch_array($g))
					{
				?>
                <br><br><br>
				
					<tr>
						<th>Menu ID:</th>
						<td><input type="text" name="menu_id" value="<?php echo $menu_id[0]+1; ?>" readonly="readonly" /></td>
					</tr>
                <?php
					}
				?>
			
                <tr>
                	<th>Menu Name:</th>
                    <td><input type="text" name="menu_name" placeholder="Name"  /></td>
                </tr>
                <tr>
                	<th>Menu Price:</th>
                    <td><input type="text" name="menu_price" placeholder="Price"  /></td>
               
				</tr>
                <tr>
                    <td><input type="submit" name="cmdadd" value="Add" /></td>
                    <td><input type="reset" name="cmdreset" value="Clear"/></td>
					<td><input type="button" name="button2" value="Back" id="button2" class="input_button" onclick="javascrpit:history.back(-1)"/></td>
				
                </tr>
			
        	</form>
		</center>
        </table>
    	</div>
     
</body>
</html>
<style>


.boxed {
   border: 1px solid green ;
 } 
</style>