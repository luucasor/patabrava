<?php

	class ProdutoDAO{

		private $conexao;

		function _construct($conexao){
			$this->conexao = $conexao;
		}

		function insereProduto(Produto $produto){

			$referencia = mysqli_real_escape_string($this->conexao, $produto->getReferencia());
			$descricao = mysqli_real_escape_string($this->conexao, $produto->getDescricao());
			$medida = mysqli_real_escape_string($this->conexao, $produto->getMedida());
			$peso = mysqli_real_escape_string($this->conexao, $produto->getPeso());
			$preco_compra = mysqli_real_escape_string($this->conexao, $produto->getPrecoCompra());
			$preco_venda = mysqli_real_escape_string($this->conexao, $produto->getPrecoVenda());
			$quantidade = mysqli_real_escape_string($this->conexao, $produto->getQuantidade());
			$id_categoria = mysqli_real_escape_string($this->conexao, $produto->getCategoria()->getId());
			$imagem1 = mysqli_real_escape_string($this->conexao, $produto->getImagem1());
			$imagem2 = mysqli_real_escape_string($this->conexao, $produto->getImagem2());
			$imagem3 = mysqli_real_escape_string($this->conexao, $produto->getImagem3());
			
			$query = "INSERT INTO produtos (referencia, 
											descricao, 
											medida, 
											peso, 
											preco_compra, 
											preco_venda, 
											quantidade, 
											id_categoria, 
											imagem1, 
											imagem2, 
											imagem3) 
					   VALUES ('{$referencia}',
					   			{$descricao}, 
					   			'{$medida}', 
					   			{$peso}, 
					   			{$preco_compra}, 
					   			{$preco_venda}, 
					   			{$quantidade}, 
					   			{$id_categoria}, 
					   			{$imagem1}, 
					   			{$imagem2}, 
					   			{$imagem3});";

			return mysqli_query($this->conexao, $query);
		}

		function listaProdutos(){	

			$produtos = array();
			$query = "SELECT 
							prod.*, 
							cat.id id_categoria, 
							cat.descricao categoria_descricao 
					  FROM produto AS prod 
					  			JOIN categoria cat ON (cat.id = prod.id_categoria)";

			$resultado = mysqli_query($this->conexao, $query);

			while($produto_atual = mysqli_fetch_assoc($resultado)){
				
				$produto = new Produto();

				$categoria = new Categoria;
				$categoria->setId($produto_atual['id_categoria']);
				$categoria->setDescricao($produto_atual['categoria_descricao']);

				$produto->setId($produto_atual['id']);
				$produto->setReferencia($produto_atual['referencia']);
				$produto->setDescricao($produto_atual['descricao']);
				$produto->setMedida($produto_atual['medida']);
				$produto->setPeso($produto_atual['peso']);
				$produto->setPrecoCompra($produto_atual['preco_compra']);
				$produto->setPrecoVenda($produto_atual['preco_venda']);
				$produto->setQuantidade($produto_atual['quantidade']);
				$produto->setImagem1($produto_atual['imagem1']);
				$produto->setImagem2($produto_atual['imagem2']);
				$produto->setImagem3($produto_atual['imagem3']);
				$produto->setCategoria($categoria);

				array_push($produtos, $produto);
			}
			
			return $produtos;
		}

		function alteraProduto($produto) {

			$referencia = mysqli_real_escape_string($this->conexao, $produto->getReferencia());
			$descricao = mysqli_real_escape_string($this->conexao, $produto->getDescricao());
			$medida = mysqli_real_escape_string($this->conexao, $produto->getMedida());
			$peso = mysqli_real_escape_string($this->conexao, $produto->getPeso());
			$preco_compra = mysqli_real_escape_string($this->conexao, $produto->getPrecoCompra());
			$preco_venda = mysqli_real_escape_string($this->conexao, $produto->getPrecoVenda());
			$quantidade = mysqli_real_escape_string($this->conexao, $produto->getQuantidade());
			$id_categoria = mysqli_real_escape_string($this->conexao, $produto->getCategoria()->getId());
			$imagem1 = mysqli_real_escape_string($this->conexao, $produto->getImagem1());
			$imagem2 = mysqli_real_escape_string($this->conexao, $produto->getImagem2());
			$imagem3 = mysqli_real_escape_string($this->conexao, $produto->getImagem3());
			
			$query = "UPDATE produto 
					  SET 
					  		id = {$id}, 
					  		referencia = '{$referencia}', 
					  		descricao = '{$descricao}', 	
					  		medida = {$medida}, 
					  		peso = {$peso}, 
					  		preco_compra = {$preco_compra}, 
					  		preco_venda = {$preco_venda}, 
					  		quantidade = {$quantidade}, 
					  		id_categoria = {$id_categoria}, 
					  		imagem1 = '{$imagem1}', 
					  		imagem2 = '{$imagem2}', 
					  		imagem3 = '{$imagem3}'";	

			return mysqli_query($this->conexao, $query);
		}
	
		function buscaProduto($id) {
			$query = "SELECT * 
					  FROM produto 
					  WHERE id = {$id}";
			$resultado = mysqli_query($this->$conexao, $query);
			return mysqli_fetch_assoc($resultado);
		}

		function removeProduto($id) {
			$query = "DELETE 
			          FROM produto 
			          WHERE id = {$id}";
			return mysqli_query($this->conexao, $query);
		}
	}
?>