<?php
 include_once ('../php01/conecta.php');
 include_once ('../php01/Pessoa.php');

class Generico{
    public $conn;

    function inserir(Pessoa $p)
    $conn = new Conecta();
    if($conn == true){
        $sql = "insert into pessoa values (null, '".$p->Nome().
        "','".$p->getDtNasc(). "','".$p->getLogin()."','".
        $p->getSenha()."','".$p->getPerfil()."','".$p->getEmail()."','".$p->getCpf()."')";
        if(mysqli_query($conn->conectadb(), $sql))
        return "Dados cadastrados com sucesso!";
        else
        return "Erro no cadastramento.";
    mysqli_close($conn->conectadb());
    return $msg;
    }
}