<?php
include_once '../php01/conecta.php';
include_once '../php01/BancodeDados/conecta.php';

class DaoProduto {
    
    public function inserir(Produto $produto){
        $conn = new Conecta();
        if($conn->conectadb()){
            $nomeProduto = $produto->getNome();
            $vlrCompra = $produto->getVlrCompra();
            $vlrVenda = $produto->getVlrVenda();
            $qtdEstoque = $produto->getqtdEstoques();
            $sql = "insert into produto values (null, '$nomeProduto',"
                    . "'$vlrCompra', '$vlrVenda', '$qtdEstoque')";
            if(mysqli_query($conn->conectadb(), $sql)){
                $msg = "<p style='color: green;'>"
                        . "Dados Cadastrados com sucesso</p>";
            }else{
                $msg = "<p style='color: red;'>Erro na inserção dos dados.</p>";
            }
        }else{
            $msg = "<p style='color: red;'>"
                        . "Erro na conexão com o banco de dados.</p>";
        }
        mysqli_close($conn->conectadb());
        return $msg;
    }
    
    //método para carregar lista de produtos do banco de dados
    public function listarProdutosDAO(){
        $conn = new Conecta();
        if($conn->conectadb()){
            $sql = "select * from produto";
            $query = mysqli_query($conn->conectadb(), $sql);
            $result = mysqli_fetch_array($query);
            $lista = array();
            $a = 0;
            if ($result) {
                do {
                    $produto = new Produto();
                    $produto->setId($result['id']);
                    $produto->setNome($result['nome']);
                    $produto->setVlrCompra($result['vlrCompra']);
                    $produto->setVlrVenda($result['vlrVenda']);
                    $produto->setQtdEstoques($result['qtdEstoque']);
                    $lista[$a] = $produto;
                    $a++;
                } while ($result = mysqli_fetch_array($query));
            }
            mysqli_close($conn->conectadb());
            return $lista;
        }
    }
}

?>