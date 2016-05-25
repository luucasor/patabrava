<?php

	class VendaDAO{

		private $id;
		private $id_produto;
		private $id_cliente;
		private $qtd_itens;
		private $vl_total;
		private $forma_pagamento;
		private $status;
		private $data;

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}
	
	}
?>