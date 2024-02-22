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
			<div class="box-single-food">
				<img src="<?= INCLUDE_PATH ?>images/aqui.jpg" />
				<p>Produto 01</p>
				<p>R$ 20,00</p>
				<a href="<?= INCLUDE_PATH ?>?addCard=0">Adicionar ao carrinho</a>
			</div>

			<div class="box-single-food">
				<img src="<?= INCLUDE_PATH ?>images/dedo.jpg" />
				<p>Produto 02</p>
				<p>R$ 20,00</p>
				<a href="<?= INCLUDE_PATH ?>?addCard=1">Adicionar ao carrinho</a>
			</div>

			<div class="box-single-food">
				<img src="<?= INCLUDE_PATH ?>images/la.jpg" />
				<p>Produto 03</p>
				<p>R$ 20,00</p>
				<a href="<?= INCLUDE_PATH ?>?addCard=2">Adicionar ao carrinho</a>
			</div>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</section><!--lista-produtos-->

</body>
</html>