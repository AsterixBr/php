<?
include_once '../php01/generico.php';
class Pessocontroller{
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
        return $Generico->inserir($pessoa);
    }
}