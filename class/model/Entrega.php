<?php

	class Entrega{

		private $id;
		private $id_venda;
		private $id_cliente;
		private $status;
		private $data_prevista;
		private $data_final;

		function _construct(){
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getIdVenda(){
			return $this->id_venda;
		}

		public function setIdVenda($id_venda){
			$this->id_venda = $id_venda;
		}

		public function getIdCliente(){
			return $this->id_cliente;
		}

		public function setIdCliente($id_cliente){
			$this->id_cliente = $id_cliente;
		}

		public function getStatus(){
			return $this->status;
		}

		public function setStatus($status){
			$this->status = $status;
		}

		public function getDataPrevista(){
			return $this->data_prevista;
		}

		public function setDataPrevista($data_prevista){
			$this->data_prevista = $data_prevista;
		}

		public function getDataFinal(){
			return $this->data_final;
		}

		public function setDataFinal($data_final){
			$this->data_final = $data_final;
		}
	}
?>