<?php session_start();
require('includes/config.php');
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
			
			<!-- start page -->

					<div id="page">
					<!-- start content -->
					
					<div id="content">
						<div class="post">
							<h1 class="title">Contact Us</h1>
							
							<h2 class="title">NO MIDDLE MAN | ON-CAMPUS | PRICE COMPARISON</h2>
							<div class="entry" style="height:auto">
													
							<b><br> Tell what is on your mind....</br></b>
							   <br> We are happy to hear about any suggestions, idea or anything that you might feel is importan. Our goal is
								    to help every student to safe money on references book.</br>
									&nbsp;
									<!-- Message successful register or not -->
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully give feedback and will reply soon through your email thank you !</font>';
												echo '<br><br>';
											}
										
										?>
									
									<!-- Registration Form -->
										<table>
											<form action="process_feedback.php" method="POST">
												<tr>
													<td><b>Fullname :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='f_fullname'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail :</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='f_email' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Subject :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='f_subject'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
												<td><b>Your Message :</b></td>
												<td><textarea cols="32" rows="6" name='f_message' ></textarea></td>
												</tr>		
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
									</div>
									
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