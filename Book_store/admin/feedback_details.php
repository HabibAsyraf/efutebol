<?php 
session_start();
require('includes/config.php');

$q="SELECT * FROM `feedback` WHERE `f_id` = '" . mysqli_real_escape_string($conn, $_GET['id']) . "'";
$res = mysqli_query($conn,$q) or die("Error : " . mysqli_error($conn));

//If book id not found in database
if(mysqli_num_rows($res) == 0){
	?>
	Feedback Not Found
	<br/>
	<a href="feedback.php">Back</a>
	<?php
	
	//Stop the page process here
	exit();
}

// fetch single record
$feedback_details = mysqli_fetch_assoc($res);
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
						<form action="process_update_feedback.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="f_id" size="40" value="<?php echo $feedback_details['f_id']; ?>">
							
							<br/><b>Fullname :</b><br/>
							<input type="text" value="<?php echo $feedback_details['f_fullname']; ?>" disabled="disabled" />
							<br/><br/>
							
							<br/><b>E-Mail :</b><br/>
							<input type="text" value="<?php echo $feedback_details['f_email']; ?>" disabled="disabled" />
							<br/><br/>
							
							<br/><b>Subject :</b><br/>
							<input type="text" value="<?php echo $feedback_details['f_subject']; ?>" disabled="disabled" />
							<br/><br/>
							
							<br/><b>Message :</b><br/>
							<textarea disabled="disabled"><?php echo $feedback_details['f_message']; ?></textarea>
							<br/>
							<br/>
							<hr/>
							
							<br/><b>Reply :</b><br/>
							<textarea name="f_replied_message"><?php echo $feedback_details['f_replied_message']; ?></textarea>
							<br/><br/>
							
							<b>Status :</b><br/>
							<select id="f_status" name="f_status">
								<option value=""></option>
								<option value="Settle" <?php echo $feedback_details['f_status'] == "Settle" ? 'selected="selected"' : ''; ?>>Settle</option>
								<option value="To Do" <?php echo $feedback_details['f_status'] == "To Do" ? 'selected="selected"' : ''; ?>>To Do</option>
								<option value="Resolved" <?php echo $feedback_details['f_status'] == "Resolved" ? 'selected="selected"' : ''; ?>>Resolved</option>
								<option value="In Progress" <?php echo $feedback_details['f_status'] == "In Progress" ? 'selected="selected"' : ''; ?>>In Progress</option>
							</select>
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


