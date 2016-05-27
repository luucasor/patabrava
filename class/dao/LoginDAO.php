<?php

	class LoginDAO{

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}

		function buscaLogin($conexao, $usuario, $senha) {
			
			$senhaMd5 = md5($senha);
			$usuario = mysqli_real_escape_string($conexao, $usuario);

			$query = "select * from login where usuario='{$usuario}' and senha='{$senhaMd5}'";
			$resultado = mysqli_query($conexao, $query);
			$login = mysqli_fetch_assoc($resultado);

			return $login;
		}
	
	}
?>