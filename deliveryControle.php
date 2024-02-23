<?php 
	
	/**
	 * 
	 */
	class deliveryControle
	{
		
		public function index(){
			$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
			$slug = explode('/',$url)[0];

			if(file_exists('views/'.$slug.'.php')){
				include('views/'.$slug.'.php');
				//print_r($_SESSION['carrinho']);
				$this->validarCarrinho();
			}else{
				die('Página não existe!');
			}
		}

		public function validarCarrinho(){
			if(isset($_GET['addCard'])){
				$idProduto = (int)$_GET['addCard'];
				\deliveryModel::addToCard($idProduto);
				echo '<script>alert("O produto foi adicionado ao carrinho.")</script>';
			}
		}
	}
?>