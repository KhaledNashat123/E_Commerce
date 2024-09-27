<?php
session_start();

    $name = $_POST['name0'];
	$prc = $_POST['name1'];
	$qty = $_POST['name2'];
	$event = $_POST['event'];
	$product = array($name, $prc, $qty);

	if ($event == "Update")
	{
		$_SESSION[$name] = $product;
	}

	//Remove an item in the list.
	else if($event == "Remove")
	{
		unset($_SESSION[$name]);
	}

	header('location:cart.php');
?>