<?php

	class CategoriaDAO{

		private $id;
		private $descricao;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>