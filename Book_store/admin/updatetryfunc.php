<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	
	
} 
 if(isset($_POST['update']))
{    
    $b_id = $_POST['b_id'];
    $b_nm=$_POST['b_nm'];
    $b_desc=$_POST['b_desc'];
    $b_price=$_POST['b_price']; 
    $b_qt = $_POST['b_qt'];
    $b_st=$_POST['b_st'];
    	
    
$q = "UPDATE book SET b_id='$b_id',b_nm='$b_nm',b_desc='$b_desc',b_price='$b_price' ,b_qt='$b_qt',b_st='$b_st' ";
if ($connection->query($q) === TRUE) {
    echo "Record updated successfully";
	header("Location: all_book.php");
} else {
    echo "Error updating record: " . $connection->error;
}

$connection->close();
}

     

?>
<?php
//getting id from url
$res = mysqli_query($connection, "SELECT * FROM book ORDER BY b_id");
while($row = mysqli_fetch_assoc($res))
{
	$b_id=$row['b_id'];
	$b_nm=$row['b_nm'];
    $b_desc=$row['b_desc'];
    $b_price=$row['b_price'];
	$b_qt = $row['b_qt'];
    $b_st=$row['b_st']
}
?>