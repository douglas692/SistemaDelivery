<?php 
	if(!isset($_SESSION['opcao_pagamento'])){
		echo '<script>alert("Favor finalizar o pedido");</script>';
		echo '<script>location.href="'.INCLUDE_PATH.'"</script>';
	}
?>
<p>Pedido em andamento</p>
<p>tipo de pagamento: <?php echo $_SESSION['opcao_pagamento']; ?></p>
<hr/>
<p>Total: <?php echo number_format(deliveryModel::getTotalPedido(),2,',',' '); ?></p>

<?php 
	if($_SESSION['opcao_pagamento'] == 'Dinheiro'){
		echo '<hr/>';
		echo '<p>Seu troco ficou = '.$_SESSION['valorTroco'].' reais</p>';
	}	
?>
<h2>Produtos:</h2>

<?php 
	$carrinhoItens = \deliveryModel::getItensCard();
	foreach ($carrinhoItens as $key => $value) {
		$item = \deliveryModel::getItem($value);
?>
<ul>
	<li><?= $item[1]; ?></li>
</ul>
<?php 
	}
?>
<hr/>
<br/>
<a href="<?php echo INCLUDE_PATH ?>historico?resetar">Pedido Entregue</a>
<?php 
	if(isset($_GET['resetar'])){
		session_destroy();
		header('Location: '.INCLUDE_PATH);
		die();
	}
?>