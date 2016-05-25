<?php

	class EntregaDAO{

		private $id;
		private $id_venda;
		private $id_cliente;
		private $status;
		private $data_prevista;
		private $data_final;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>