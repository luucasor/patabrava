<?php

	class CategoriaDAO{

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}

		function listaCategorias(){
			$categorias = array();
			$query = "select * from categoria";
			$resultado = mysqli_query($this->conexao, $query);
			
			while($categoria = mysqli_fetch_assoc($resultado)){
				array_push($categorias, $categoria);
			}
			
			return $categorias;
		}
	
	}
?>