<?php
include_once '../php01/model/produto.php';
include_once '../php01/BancodeDados/conecta.php';

class DaoProduto {
    
    public function insert(Produto $produto){
        $conn = new Conecta();
        if($conn->conectadb()){
            $nomeProduto = $produto->getNome();
            $vlrCompra = $produto->getVlrCompra();
            $vlrVenda = $produto->getVlrVenda();
            $qtdEstoque = $produto->getQtdEstoques();
            $sql = "insert into Itens values (null, '$nomeProduto',"
                    . "'$vlrCompra', '$vlrVenda', '$qtdEstoque')";
            $resp = mysqli_query($conn->conectadb(), $sql) or 
                    die($conn->conectadb());
            if($resp){
                $msg = "<p style='color: green;'>"
                        . "Dados Cadastrados com sucesso</p>";
            }else{
                $msg = $resp;
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
            $sql = "select * from Itens";
            $query = mysqli_query($conn->conectadb(), $sql);
            $result = mysqli_fetch_array($query);
            $lista = array();
            $a = 0;
            if ($result) {
                do {
                    $produto = new Produto();
                    $produto->setId($result['id']);
                    $produto->setNome($result['Nome']);
                    $produto->setVlrCompra($result['Valorcompra']);
                    $produto->setVlrVenda($result['Valorvenda']);
                    $produto->setQtdEstoques($result['QntdEstoques']);
                    $lista[$a] = $produto;
                    $a++;
                } while ($result = mysqli_fetch_array($query));
            }
            mysqli_close($conn->conectadb());
            return $lista;
        }
    }
    public function pesquisarProdutoId($id) {
        $conn = new conecta();
        $conecta = $conn->conectadb();
        if($conecta){
            $sql = "delete from Itens where id = '$id'";
            $result = mysqli_query($conecta, $sql);
            $linha = mysqli_fetch_assoc($result);
            if($linha) {
                do{
                    $produto = new Produto();
                    $produto->setId($result['id']);
                    $produto->setNome($result['Nome']);
                    $produto->setVlrCompra($result['Valorcompra']);
                    $produto->setVlrVenda($result['Valorvenda']);
                    $produto->setQtdEstoques($result['QntdEstoques']);
                } while  ($linha = mysqli_fetch_assoc($result));
            }
            mysqli_close($conecta);
        }else{
            echo"<script>alert('Banco inoperante!')</script>";
            echo"<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
            URL='../php01/CadastroProduto.php'\">"; 
        }
        return $produto;
    }
}
?>