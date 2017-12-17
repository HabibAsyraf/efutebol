<?php
require('includes/config.php');
$id=$_GET['b_id'];
?>

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

<?php $books_query=mysql_query("select * from book where b_id='$id'");
$books_rows=@mysql_fetch_array($books_query);
?>

<form action="testpro.php" method="post">

<strong>*** EDIT DETAILS ***<br></strong>
<p>
</p>

	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['b_id'] ?>">
	Court ID:<br><input type="text" name="b_id" value="<?php echo $books_rows['b_id'];  ?>" ><br>
	Court Name:<br><input type="text" name="b_nm" value="<?php echo $books_rows['b_nm'];  ?>"><br>
	Court Price:<br><input type="text"  name="b_price" value="<?php echo $books_rows['b_price'];  ?>"><br>
	

	<br>
	<input type="submit" name="submit" value="Save" id="button1">
</form>