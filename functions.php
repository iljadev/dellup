<?php 
	

	require_once("product.class.php");
	require_once("order.class.php");
	
	$mysqli = new mysqli("localhost", "vhost48141s0", "Mikkihirl8513", "vhost48141s0");
	
	$order = new Order($mysqli);
	$product = new Product($mysqli);
?>