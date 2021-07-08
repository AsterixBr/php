<?
include_once '../php01/Dao/DaoPessoa.php';
include_once '../php01/model/Pessoa.php';

class PessoaController{

    public function insertPessoa($nome, $dtNasc, $login, $senha, $perfil, $email, $cpf){
        
        $pessoa = new Pessoa();
        $pessoa->setNome($nome);
        $pessoa->setDtNasc($dtNasc);
        $pessoa->setLogin($login);
        $pessoa->setSenha($senha);
        $pessoa->setPerfil($perfil);
        $pessoa->setEmail($email);
        $pessoa->setCpf($cpf);

        $Generico = new Generico();
        return $Generico->insert($pessoa);
    }
}