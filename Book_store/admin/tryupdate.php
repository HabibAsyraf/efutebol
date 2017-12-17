<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);


    $b_nm = $row['b_nm'];
    $b_desc = $row['b_desc'];
    $b_price = $row['b_price'];
    $b_qt = $row['b_qt'];
    $b_st = $row['b_st'];

    if(isset($_POST['submit'])){
		
			
       $update = "UPDATE book SET b_nm = '".$_POST['b_nm']."', b_desc = '".$_POST['b_desc']."', b_price = '".$_POST['b_price']."', b_qt = '".$_POST['b_qt']."', b_st = '".$_POST['b_st']."' WHERE b_id='$id'";
       $res1 = mysql_query($update);
       
    }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Lotus Flower
Version    : 1.0
Released   : 20080501
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
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
<br></br><br></br>
<div id="page"> 
<center><p><input type="image"src="ftmklogo.png"height="1500"width="1000"alt="Ya"border="0"name="ya"></p></center>
<h1> FTMK</h1>
<h1>PRELOVED BOOK SERVICE</h1>
<h1>UPDATE BOOK</h1></center>
</div>


&nbsp;
<form class="w3-container" action="tryupdate.php" method="post">
  <center><br>
  <label><b>   Name </b></label>
  <input class="w3-input w3-border" name="b_nm" type="varchar" value="<?php echo $b_nm; ?>"></br></center>
  
  <center><br>
  <label><b>Description</b></label>
  <input class="w3-input w3-border " name="b_desc" type="varchar" value="<?php echo $b_desc; ?>"></br></center>
  
   <center><br>
  <label><b>Price (RM)</b></label>
   <input class="w3-input w3-border " name="b_price" type="varchar" value="<?php echo $b_price; ?>"></br></center>
  
   <center><br>
  <label><b>Quantity</b></label>
  <input class="w3-input w3-border" name="b_qt" type="int" value="<?php echo $b_qt; ?>"></br> </center>
  
  <center> <br>
  <label><b>Status</b></label>
   <select class="w3-select w3-border" name="b_st" >
    <option value="<?php echo $b_st; ?>"><?php echo $b_st; ?></option>
    <option value="Deny">Available</option>
	<option value="Deny">Sold Out</option>

  </select><br></center>
  
  
     <center><br><button class="w3-button w3-block w3-pink w3-section w3-padding" type ="submit" name="submit"><a href="all_booktry.php">Submit</button></br></center>
     <center><br><button class="w3-btn w3-red" type ="submit" name="cancel">Cancel<a href="all_book.php"></button></br></center>

</form>
</div>

</body>
</html> 
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->