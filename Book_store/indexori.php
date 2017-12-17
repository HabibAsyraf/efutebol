<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
&nbsp;
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
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Store';
								}
							?>
							<!-- start content -->
	<div id="content">
		<div class="post">
			<div class="entry">
			<h2 class="title">NO MIDDLE MAN | ON-CAMPUS | PRICE COMPARISON</h2>

	
				<b><br>Here's some of the highlight of our concept :</br></b>
				   <h4> Sell and buy with students at your own campus where it's easy to meet up to do the transaction. 
						Cash for used books. Simple, right?</h4>
				   <h4> You can easily meet the buyer or seller right on your campus to trade textbooks for cash.</h4>
				   <h4> No shipping, no credit cards and no hassles !</h4>
				   <h4> We're not going to get in the way. It's just you and the buyer or seller doing the deal on the used books.</h4>
			
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					
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
