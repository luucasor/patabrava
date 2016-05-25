<?php

	class ProdutoDAO{

		private $id;
		private $referencia;
		private $descricao;
		private $medida;
		private $peso;
		private $preco_compra;
		private $preco_venda;
		private $quantidade;
		private $id_categoria;
		private $imagem1;
		private $imagem2;
		private $imagem3;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>