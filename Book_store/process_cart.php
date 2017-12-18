<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['rate']))
	{
		//add item. Replace item if adding same existing book id
		$_SESSION['cart'][$_GET['b_id']] = array("nm"=>$_GET['nm'],"rate"=>$_GET['rate'],"qty"=>"1");
		header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
		}
		
		header("location: viewcart.php");
	}
	else{
		header("location: viewcart.php");
	}


?>
