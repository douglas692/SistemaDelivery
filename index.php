<?php 
	require('deliveryControle.php');
	require('deliveryModel.php');

	$deliveryControle = new deliveryControle();
	//$deliveryModel = new deliveryModel();

	$deliveryControle->index();
?>