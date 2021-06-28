<?php
Class produto{
    private $id;
    private $nome;
    private $vlrCompra;
    private $vlrVenda;
    private $qtdEstoques;

    function setId($id){
     $this-> id = $id;   
    }
    function getId(){
        return $this->id;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
    function setvlrCompra($vlrCompra){
        $this->vlrCompra = $vlrCompra;
    }
    function getVlrCompra(){
        return $this->vlrCompra;
    }
    function setVlrVenda($vlrVenda){
        $this->vlrVenda = $vlrVenda;
    }
    function getVlrVenda(){
        return $this->vlrVenda;
    }
    function setqtdEstoques($qtdEstoques){
        $this->qtdEstoques = $qtdEstoques;
    }
    function getqtdEstoques(){
        return $this->qtdEstoques;
    }
}
?>