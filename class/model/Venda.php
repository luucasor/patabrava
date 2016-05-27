<?php
	class Venda {

		private $id;
		private $id_produto;
		private $id_cliente;
		private $qtd_itens;
		private $vl_total;
		private $forma_pagamento;
		private $status;
		private $data;

		function _construct(){
		}

		function _destruct(){
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getIdProduto(){
			return $this->id_produto;
		}

		public function setIdProduto($id_produto){
			$this->id_produto = $id_produto;
		}

		public function getIdCliente(){
			return $this->id_cliente;
		}

		public function setId($id_cliente){
			$this->id_cliente = $id_cliente;
		}

		public function getQtdItens(){
			return $this->qtd_itens;
		}

		public function setQtdItens($qtd_itens){
			$this->qtd_itens = $qtd_itens;
		}

		public function getVlTotal(){
			return $this->vl_total;
		}

		public function setVlTotal($vl_total){
			$this->vl_total = $vl_total;
		}	

		public function getFormaPagamento(){
			return $this->forma_pagamento;
		}

		public function setFormaPagamento($forma_pagamento){
			$this->forma_pagamento = $forma_pagamento;
		}	

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}	

		public function getData(){
			return $this->data;
		}

		public function setData($data){
			$this->data = $data;
		}	
	}
?>