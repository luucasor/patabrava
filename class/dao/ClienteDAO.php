<?php

	class ClienteDAO{

		private $id;
		private $cpf;
		private $nome;
		private $id_login;
		private $id_endereco;
		private $telefone1;
		private $telefone2;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>