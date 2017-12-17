<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM donor WHERE CONCAT(`b_id`, `b_nm`, `b_desc`, `b_price` , `b_qt`, `b_st`, `b_img`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($sql);
    
}
 else {
    $sql = "SELECT * FROM `book`";
    $search_result = filterTable($sql);
}

// function to connect and execute the query
function filterTable($sql)
{
    $connection = mysqli_connect("localhost", "root", "", "book_store");
    $filter_Result = mysqli_query($connection, $sql);
    return $filter_Result;
}

?>
<div class="header">
<p>FILTER DONOR</p>
				
				<h3>SEARCH</h3>
				
				 <form action="searchtry.php" method="post">
          
				
					<table border='1' WIDTH='100%'>
						 <input type="text" name="valueToSearch" placeholder="ex:20"><br><br>
            <input type="submit" name="search" value="Filter"><br><br><br>
            
            <table width="600" border="1" cellpadding="1" cellspacing="1">
               <td>DONOR_ID</td>
            <td>USERNAME</td>
            <td>FULLNAME</td>
            <td>IC/NO</td>
			<td>AGE</td>
            <td>GENDER</td>
            <td>BLOOD TYPE</td>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['b_id'];?></td>
                    <td><?php echo $row['b_nm'];?></td>
                    <td><?php echo $row['b_desc'];?></td>
                    <td><?php echo $row['b_price'];?></td>
					<td><?php echo $row['b_qt'];?></td>
                    <td><?php echo $row['b_st'];?></td>
                    <td><?php echo $row['b_img'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
			<br>
			<br><br>
			<button onclick="allbooktry.php">REFRESH</button>
			<button><a href="allbooktry.php">BACK</a></button>
        </form>
        
				
			</div>
			<div id="sidebar">
				
			</div>
		</div>
	</div>
</div>
<div id="footer-bg">
	<div id="footer-content" class="container">
		
<div id="footer" class="container">
	
</div>
</body>
</html>

<style>

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 15%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

</style>