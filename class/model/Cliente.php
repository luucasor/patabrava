<?php

	class Cliente{

		private $id;
		private $cpf;
		private $nome;
		private $id_login;
		private $id_endereco;
		private $telefone1;
		private $telefone2;

		function _construct(){
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getCpf(){
			return $this->cpf;
		}

		public function setCpf($cpf){
			$this->cpf = $cpf;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getIdLogin(){
			return $this->id_login;
		}

		public function setIdLogin($id_login){
			$this->id_login = $id_login;
		}

		public function getIdEndereco(){
			return $this->id_endereco;
		}

		public function setIdEndereco($id_endereco){
			$this->id_endereco = $id_endereco;
		}

		public function getTelefone1(){
			return $this->telefone1;
		}

		public function setTelefone1($telefone1){
			$this->telefone1 = $telefone1;
		}

		public function getTelefone2(){
			return $this->telefone2;
		}

		public function setTelefone2($telefone2){
			$this->telefone2 = $telefone2;
		}
	}
?>