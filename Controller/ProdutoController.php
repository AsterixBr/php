<?php
include_once '../php01/Dao/DaoProduto.php';
include_once '../php01/model/produto.php';

class ProdutoController {
    
    public function inserirProduto($nomeProduto, $vlrCompra, 
            $vlrVenda, $qtdEstoque){
        $produto = new Produto();
        $produto->setNome($nomeProduto);
        $produto->setVlrCompra($vlrCompra);
        $produto->setVlrVenda($vlrVenda);
        $produto->setQtdEstoques($qtdEstoque);
        
        echo $nomeProduto, $vlrCompra, $vlrVenda, $qtdEstoque;
        
        $daoProduto = new DaoProduto();
        return $daoProduto->inserir($produto);
    }
    
    //método para carregar a lista de produtos que vem da DAO
    public function listarProdutos(){
        $daoProduto = new DaoProduto();
        return $daoProduto->listarProdutosDAO();
    }
}
?>