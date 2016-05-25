<?php

	class EnderecoDAO{

		private $id;
		private $cep;
		private $rua;
		private $numero;
		private $bairro;
		private $complemento;
		private $cidade;
		private $estado;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>