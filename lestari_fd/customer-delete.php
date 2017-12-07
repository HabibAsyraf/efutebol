<?php 
include("database.php");
//to retrieve delete id
$id_delete = $_GET['id_delete'];
echo $id_delete;
//to delete
if($id_delete !="") 
{
	$a = "delete from register where id = '$id_delete'";
	$b = mysql_query($a) or die(mysql_error().$a);
}
header("location:customer_list.php");
?>