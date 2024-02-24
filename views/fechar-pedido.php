<?php 
	if(!isset($_SESSION['carrinho'])){
		echo '<script>alert("Carrinho vazio");</script>';
		echo '<script>location.href="'.INCLUDE_PATH.'"</script>';
	}
?>
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
			if($carrinhoItens != '')
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
	<br/>
	<p>O total do seu pedido foi: R$ <?php echo number_format(deliveryModel::getTotalPedido(),2,',',' '); ?></p>
	<hr/>
	<br/>

	<form method="post">
		<p>Forma de pagamento</p>
		<select name="opcao_pagamento">
			<option name="cartao">Cartão</option>
			<option name="dinheiro">Dinheiro</option>
		</select>
		<div class="troco" style="display:none;margin: 15px 8px;">
			<p>Troco para quanto?</p>
			<input type="text" name="troco" value="0">
		</div><!--troco-->
		<hr/>
		<input style="cursor: pointer;" type="submit" name="acao" value="Fechar pedido">
	</form>
	<br/>

	</div><!--container-->

	<?php 
		if(isset($_POST['acao'])){
			if(!isset($_SESSION['carrinho'])){
				die('Carrinho vazio!');
			}

			$opcao_pagamento = $_POST['opcao_pagamento'];

			$_SESSION['opcao_pagamento'] = $opcao_pagamento;
			$_SESSION['total'] = deliveryModel::getTotalPedido();

			$troco = $_POST['troco'];

			if($opcao_pagamento == 'Dinheiro'){

				if($_POST['troco'] != ''){
					$valorTroco = $_POST['troco'] - deliveryModel::getTotalPedido();

					if($valorTroco > 0){
						$_SESSION['valorTroco'] = $valorTroco;
					}else{
						echo '<script>alert("valor abaixo do total");</script>';
						die('<script>location.href="'.INCLUDE_PATH.'fechar-pedido"</script>');
					}

				}else{
					die('troco não pode ficar vazio!');
				}

			}

			echo '<script>alert("Pedido realizado");</script>';
			echo '<script>location.href="'.INCLUDE_PATH.'historico"</script>';
		}
	?>
	
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script>
		$(function(){
			$('select').change(function(){
				if($(this).val() == 'Dinheiro'){
					$('.troco').show();
				}else if($(this).val() == 'Cartão'){
					$('.troco').hide();
				}
			})
		})
	</script>
</body>
</html>