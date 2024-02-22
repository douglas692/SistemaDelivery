<?php 
	require('deliveryControle.php');
	require('deliveryModel.php');

	$deliveryControle = new deliveryControle();
	//$deliveryModel = new deliveryModel();

	define('INCLUDE_PATH', 'http://localhost/Sistema_Delivery/');

	$deliveryControle->index();
?>