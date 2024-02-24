<?php 
	
	/**
	 * 
	 */
	class deliveryModel
	{
		public static $itens = [array('aqui.jpg','produto-1','20.00'),array('dedo.jpg','produto-2','25.00'),array('la.jpg','produto-3','7.00')];
		
		public static function listarItens(){
			return self::$itens;
		}

		public static function addToCard($idProduto){
			if(!isset($_SESSION['carrinho'])){
				$_SESSION['carrinho'] = [];
			}
			$_SESSION['carrinho'][] = $idProduto;
		}

		public static function getItensCard(){
			return $_SESSION['carrinho'];
		}

		public static function getItem($id){
			return self::$itens[$id];
		}
		public static function getTotalPedido(){
			$valor = 0;
			foreach ($_SESSION['carrinho'] as $key => $value) {
				$itemPreco = self::getItem($value)[2];
				$valor+=$itemPreco;
			}

			return $valor;
		}
	}
?>