<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
	$query="insert into sell(s_id,u_id,b_id,s_qt,s_price,s_address) values('$s_id','$u_id','$b_id','$s_qt','$s_price','$s_address')";
	$row=mysqli_fetch_assoc($res);
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
	}

?>

&nbsp;
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
			<!-- end header -->
			<!------------------------------->
			&nbsp;
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="post"> 
			

					
				<p class="s_id"><label for="name">Title Book</label></p> 
    			<input id="s_id" name="s_id" placeholder="Title Book" required="" tabindex="1" type="text"> 

				
    			<p class="u_id"><label for="name">Name</label></p> 
    			<input id="u_id" name="u_id" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="b_id"><label for="email">Address (Where to C.O.D)</label></p> 
    			<textarea id="b_id" name="b_id" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
    			 &nbsp;
				<p class="s_qt"><label for="phone">Contact Number</label></p> 
				<input id="s_qt" name="s_qt" placeholder="phone number" required="" type="text" maxlength="11">
				
				<p class="s_price"><label for="name">Name</label></p> 
    			<input id="u_id" name="u_id" placeholder="First and last name" required="" tabindex="1" type="text"> 
				
				<p class="u_id"><label for="name">Name</label></p> 
    			<input id="u_id" name="u_id" placeholder="First and last name" required="" tabindex="1" type="text"> 
			
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 

   </form> 
</div>      
</div>
</body>