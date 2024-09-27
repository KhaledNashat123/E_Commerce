<?php
session_start();

    $name = $_POST['Item_Name'];
	$prc = $_POST['Price'];
	$qty = $_POST['Quantity'];
	$product = array($name, $prc, $qty);
	$_SESSION[$name] = $product;
	header('location:product.php');

?>