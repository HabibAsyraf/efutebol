<?php 

include ('includes/config.php');
	
	 
$id=$_GET['b_id'];
?>
&nbsp;
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
</head>
<body>

<!-- start header -->
<div id="header">
	<div id="menu">
		
</div>
</div>
<!-- end header -->

<?php $books_query=mysql_query("select * from book where b_id='$id'");
$books_rows=@mysql_fetch_array($books_query);
?>


&nbsp;
<br></br><br></br>
<div id="page"> 
<center><p><input type="image"src="ftmklogo.png"height="40"width="180"alt="Ya"border="0"name="ya"></p></center>
<h1> FTMK</h1>
<h1>PRELOVED BOOK SERVICE</h1>
<h1>BOOK TO SELL</h1></center>
<br></br>

<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="entry">
				
					<form action="execupdatebook.php" method="post">

        <table border="0">
		<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
		
			<tr> 
                <td>ID</td>
                <td><input type="text" name="b_id" value="<?php echo $books_rows['b_id'];?>"></td>
            </tr>
            <tr> 
                <td>BOOK</td>
                <td><input type="text" name="b_nm" value="<?php echo $books_rows['b_nm'];?>"></td>
            </tr>
            <tr> 
                <td>DESCRIPTION</td>
                <td><input type="text" name="b_desc" value="<?php echo $books_rows['b_desc'];?>"></td>
            </tr>
            <tr> 
                <td>PRICE</td>
                <td><input type="text" name="b_price" value="<?php echo  $books_rows['b_price'];?>"></td>
            </tr>
			
			<tr> 
                <td>QUANTITY</td>
                <td><input type="text" name="b_qt" value="<?php echo  $books_rows['b_qt'];?>"></td>
            </tr>
			
			<tr> 
                <td>STATUS</td>
                <td><input type="text" name="b_st" value="<?php echo  $books_rows['b_st'];?>"></td>
            </tr>
			             						          

            <tr>
                
                <td><input type="submit" name="submit" value="UPDATE"><br><br><br><button><a href="all_book.php"> BACK </a></button></td>
				
            </tr>
        </table>
		
    </form>


<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			
</div>
<!-- end footer -->
</body>
</html>