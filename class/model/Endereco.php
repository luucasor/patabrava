<?php

	class Endereco{

		private $id;
		private $cep;
		private $rua;
		private $numero;
		private $bairro;
		private $complemento;
		private $cidade;
		private $estado;

		function _construct(){
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getCep(){
			return $this->cep;
		}

		public function setCep($cep){
			$this->cep = $cep;
		}

		public function getRua(){
			return $this->rua;
		}

		public function setRua($rua){
			$this->rua = $rua;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getBairro(){
			return $this->bairro;
		}

		public function setBairro($bairro){
			$this->bairro = $bairro;
		}

		public function getComplemento(){
			return $this->complemento;
		}

		public function setComplemento($complemento){
			$this->complemento = $complemento;
		}

		public function getCidade(){
			return $this->cidade;
		}

		public function setCidade($cidade){
			$this->cidade = $cidade;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function setEstado($estado){
			$this->estado = $estado;
		}
	}
?>