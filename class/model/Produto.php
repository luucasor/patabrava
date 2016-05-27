<?php
	class Produto {

		private $id;
		private $referencia;
		private $descricao;
		private $medida;
		private $peso;
		private $preco_compra;
		private $preco_venda;
		private $quantidade;
		private $id_categoria;
		private $imagem1;
		private $imagem2;
		private $imagem3;

		function _construct($descricao = "Nome não definido", $preco_venda = 9999){
			$this->setDescricao($descricao);
			$this->setPrecoVenda($preco_venda);
		}

		function __toString(){
			return "Nome: {$this->getDescricao()}, Valor: {$this->getPrecoVenda()} <br/>";
		}

		function _destruct(){
			echo "<center>Nome: {$this->getDescricao()}, produto destruido</center> <br/>";
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getReferencia(){
			return $this->referencia;
		}

		public function setReferencia($referencia){
			$this->referencia = $referencia;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function getMedida(){
			return $this->medida;
		}

		public function setMedida($medida){
			$this->medida = $medida;
		}	

		public function getPeso(){
			return $this->peso;
		}

		public function setPeso($peso){
			$this->peso = $peso;
		}	

		public function getPrecoCompra(){
			return $this->preco_compra;
		}

		public function setPrecoCompra($valor){
			$this->preco_compra = $valor;
		}

		public function getPrecoVenda(){
			return $this->preco_venda;
		}

		public function setPrecoVenda($valor){
			$this->preco_venda = $valor;
		}

		public function getQuantidade(){
			$this->quantidade = $quantidade;	
		}

		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}

		public function getIdCategoria(){
			return $this->id_categoria;
		}

		public function setIdCategoria($Id_categoria){
			$this->id_categoria = $id_categoria;
		}

		public function getImagem1(){
			return $this->imagem1;
		}

		public function setImagem1($imagem1){
			$this->imagem1 = $imagem1;
		}

		public function getImagem2(){
			return $this->imagem2;
		}

		public function setImagem2($imagem2){
			$this->imagem2 = $imagem2;
		}

		public function getImagem3(){
			return $this->imagem3;
		}

		public function setImagem3($imagem3){
			$this->imagem3 = $imagem3;
		}
	}
?>