<?php

	class LoginDAO{

		private $id;
		private $usuario;
		private $senha;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>