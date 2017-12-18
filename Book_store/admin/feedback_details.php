<?php 
session_start();
require('includes/config.php');

$q="SELECT * FROM `feeback` WHERE `b_id` = " . mysqli_real_escape_string($conn, ($_GET['id'] > 0 ? $_GET['id'] : 0)) . " ORDER BY `f_id` DESC";
$res = mysqli_query($conn,$q) or die("Error : " . mysqli_error($conn));

//If book id not found in database
if(mysqli_num_rows($res) == 0){
	?>
	Book ID Not Found
	<br/>
	<a href="all_book.php">Back</a>
	<?php
	
	//Stop the page process here
	exit();
}

// fetch single record
$book_details = mysqli_fetch_assoc($res);
exit();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("includes/head.inc.php"); ?>
	</head>
	<body>
		<!-- start header -->
		<div id="header">
			<div id="menu">
				<?php include("includes/menu.inc.php"); ?>
			</div>
		</div>
		<!-- end header -->
		<!-- start page -->
		<div id="page">
			<!-- start content -->
			<div id="content">
				<div class="post" style="margin-left:100px">
					<h1 class="title" >Edit Book</h1>
					<div class="entry">
						<form action="updatetryfunc.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="id" size="40" value="<?php echo $book_details['b_id']; ?>">
							
							<br/><b>Book Name :</b><br/>
							<input type="text" name="name" size="40" value="<?php echo $book_details['b_nm']; ?>">
							<br/><br/>
							
							<b>Description :</b><br/>
							<textarea cols="40" rows="6" name="description" ><?php echo $book_details['b_desc']; ?></textarea>
							<br/><br/>
							
							<b>Price (RM) :</b><br/>
							<input type="text" name="price" size="40" value="<?php echo $book_details['b_price']; ?>">
							<br/><br/>
							
							<b>Quantity :</b><br/>
							<input type="text" name="quantity" size="40" value="<?php echo $book_details['b_qt']; ?>">
							<br/><br/>
							
							<b>Status :</b><br/>
							<select id="status" name="status">
								<option value="available" <?php echo $book_details['b_st'] == "available" ? 'selected="selected"' : ''; ?>>Available</option>
								<option value="unavailable" <?php echo $book_details['b_st'] == "unavailable" ? 'selected="selected"' : ''; ?>>Unavailable</option>
							</select>
							<br/><br/>
							
							<b>Image:</b><br/>
							<input type="file" name="img" size="35">
							<br/>
							<img src="../<?php echo $book_details['b_img']; ?>?v=<?php echo time(); ?>" width="200px" />
							<br/><br/>
							
							<input  type="submit"  value="   OK   "  >
						</form>
					</div>
					
				</div>
				
			</div>
			<!-- end content -->
			<!-- start sidebar -->
			
			<!-- end sidebar -->
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
	</body>
</html>


