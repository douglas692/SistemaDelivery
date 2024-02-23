<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/style.css">
	<link rel="icon" href="data:," />
	<title>Sistema Delivery</title>
</head>
<body>
	<section class="home">
		<div class="container">
			<h2>Faça seu pedido</h2>
			<a href="<?= INCLUDE_PATH ?>fechar-pedido">Fechar pedido</a>
			<div class="clear"></div>
		</div>
	</section>

	<section class="lista-produtos">
		<div class="container">
			<?php 
				$produtos = \deliveryModel::listarItens();
				foreach ($produtos as $key => $value) {
			?>
			<div class="box-single-food">
				<img src="<?= INCLUDE_PATH ?>images/<?= $value['0'] ?>" />
				<p><?= $value['1'] ?></p>
				<p>R$ <?= $value['2'] ?></p>
				<a href="<?= INCLUDE_PATH ?>?addCard=<?php echo $key; ?>">Adicionar ao carrinho</a>
			</div>
			<?php
				}
			?>

			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</section><!--lista-produtos-->

</body>
</html>