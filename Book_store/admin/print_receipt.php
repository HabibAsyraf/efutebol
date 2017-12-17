<?php   
session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<title>Staff Leaves Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
    
        $select = "select * from book where userID = '".$_SESSION['id']."'";
        $query = mysql_query($select);
        $record = mysql_fetch_assoc($query);
?>
    
<body>
<div id="print_content"?>
    
        <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2><img src="img/Baskin-Robbins_logo.svg.png" width="200" height="78" /></h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    <center>
    <div id="mid">
      <div class="info">
        <h2></h2>
        <p> 
        Golden Scoop Sdn. Bhd. | Baskin Robbins Tapah North</br>
        Lot C-1, RnR Tapah, North-South Express, Tapah</br>
        Perak, Malaysia.</br>
            Phone: +05-4013 831 Fax: +603 2288 8031 </br>
            E-mail : feedback@goldenscoopicecream.com</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    </center>
	  
                            <table>
							<center><tr>
								<td class="item"><h3 style="margin-top:30px;">Staff Information</h3></td>
							</tr></center>

							<center><tr>
								<td style="font-size:12px;"><strong><p > Name :</p></strong></td>
                                <td style="font-size:12px;"><p ><?php echo $record['firstName'] ?></p></td>
							</tr></center>
                            
				            <center><tr>
								<td style="font-size:12px;"><strong><p > User ID :</p></strong></td>
                                <td style="font-size:12px;"><p><?php echo $record['userID'] ?></p></td>
							</tr></center>

							 <center><tr>
								<td style="font-size:12px;"><strong><p > IC Number :</p></strong></td>
                                <td style="font-size:12px;"><p ><?php echo $record['icNumber'] ?></p></td>
							</tr></center>

							<center><tr>
								<td style="font-size:12px;"><strong><p > Contact Number :</p></strong></td>
                                <td style="font-size:12px;"><p ><?php echo $record['lastName'] ?></p></td>
							</tr></center>

						</table>
      
 <div class="w3-container w3-section">
<h3>Leaves Balance Information</h3>
  <center>
<table class="w3-table-all w3-hoverable" width="100%" cellpadding="2" cellspacing="2" border="2" style="margin:auto; margin-top:20px; font-size:14px;">
    <thead>
      <tr class="w3-grey">
        <td>Provided Leaves</td>
        <td>Aprroved Leaves</td>
        <td>Leaves Balance</td>
      </tr>
    </thead>
      <?php
      
      $select = "SELECT *,(select sum(leaves.duration)) as total_duration FROM user, leaves where user.userID = '".$_SESSION['id']."' and user.userID = leaves.userID and leaves.status = 'Approve'";
      $query = mysql_query($select);
      $count = mysql_num_rows($query);
      $provided_leave = 15;
      
      $record= mysql_fetch_assoc($query);
        $balance = $provided_leave - $record['total_duration'];
          echo "<tr><td>".$provided_leave."</td>";
          echo "<td>".$record['total_duration']."</td>";
          echo "<td>".$balance."</td></tr>";
      
      
      ?>
  </table>
  </center>
</div>
      
<div class="w3-container w3-section">
<h3>Leaves Status</h3>
  <center>
<table class="w3-table-all w3-hoverable" width="100%" cellpadding="2" cellspacing="2" border="2" style="margin:auto; margin-top:20px; font-size:14px;">
    <thead>
      <tr class="w3-grey">
        <td>Date Started</td>
        <td>Date Ended</td>
        <td>Type Of Leaves</td>
        <td>Duration</td>
        <td>Status</td>
      </tr>
    </thead>
      <?php
           $select = "SELECT * FROM leaves, user where user.userID = '".$_SESSION['id']."' and user.userID = leaves.userID";
           $query = mysql_query($select);
           
           while($record = mysql_fetch_assoc($query)){
              
                $first = $record['leaveDate'];
                $next_date= date('Y-m-d', strtotime($first. ' + '.$record['duration'].' days'));
                echo "<tr><td>".$record['leaveDate']."</td>";
                echo "<td>".$next_date."</td>";
                echo "<td>".$record['type']."</td>";
                echo "<td>".$record['duration']."</td>";
                echo "<td>".$record['status']."</td></tr>";
       }
      ?>
      
  </table>
      </center>
    </div> </div>
    
        <div class="w3-container">
        <p><a href="staff_dashboard.php"><button class="w3-button w3-pink w3-round w3-section" style="float:right">Back</button></a></p>
        
         <p><a href="graph.php"><button class="w3-button w3-pink w3-round w3-section" style="margin-left:1350px;" onclick="Clickheretoprint()">Print</button></a></p>

</div>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Staff Leaves Information</title>'); 
   docprint.document.write('</head><body onLoad="self.print()"style="margin-top:30px;">');        
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
    </script>
</body>
</html>