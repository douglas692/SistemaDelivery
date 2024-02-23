<?php 
	session_start();
	require('deliveryControle.php');
	require('deliveryModel.php');

	$deliveryControle = new deliveryControle();

	define('INCLUDE_PATH', 'http://localhost/Sistema_Delivery/');

	$deliveryControle->index();
?>