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
			<h2>Finalizar pedido (carrinho)</h2>
			<a href="<?= INCLUDE_PATH ?>"> Voltar a loja</a>
			<div class="clear"></div>
		</div>
	</section>

	<div class="container">
	<table width="100%">
		<tr>
			<td>#</td>
			<td>preço</td>
		</tr>

		<?php
			$carrinhoItens = \deliveryModel::getItensCard();

			foreach($carrinhoItens as $key => $value) {
				$item = deliveryModel::getItem($value);
		?> 	
			<tr>
				<td style="border-bottom: 1px solid black;">
					<img style="max-width: 250px;" src="images/<?php echo $item['0']; ?>" />
				</td>
				<td>
					<p>R$ <?= $item['2']; ?></p>
				</td>
			</tr>
		<?php
			}
		?>

	</table>
	</div><!--container-->
	

</body>
</html>