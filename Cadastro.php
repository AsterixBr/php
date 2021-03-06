<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto</title>

  <link rel="stylesheet" href="Cadastro.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card-header bg-light text-center">
          Cadastro de Cliente
        </div>
        <div class="card-body border">
          <form method="POST" action="">
            <div class="row">
              <div class="col-md-6">
                <label>C??digo</label>
                <br>
                <label>Nome Completo</label>
                <input class="form-control" type="text" name="nome">
                <label>Data de Nascimento</label><br>
                <input class="form-control" type="date" name="dtNasc"><br>
                <label>Email</label><br>
                <input class="form-control" type="email" name="email">
                <label>CPF</label><br>
                <input class="form-control" type="text" name="cpf">
              </div>
              <div class="col-md-6">
                <br>
                <label>Login</label><br>
                <input class="form-control" type="text" name="login">
                <label>Senha</label><br>
                <input class="form-control" type="password" name="senha">
                <label>Conf. Senha</label><br>
                <input class="form-control" type="password" name="senha2">
                <label>Perfil</label>
                <select class="form-control" name="perfil">
                  <option>[--SELECT--]</option>
                  <option>Cliente</option>
                  <option>Funcion??rio</option>
                </select>
              </div>
                <div class="col-md-6 offset-md-5">
                <input type="submit" name="cadastrar" class="btn btn-success btInput" value="enviar" >
                &nbsp;&nbsp;
                <input type="reset" class="btn btn-light btInpuit" value="limpar">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
    //envio dos dados para o BD
    if(isset($_POST['cadastrar'])){
      $nome = $_POST['nome'];
      $dtNasc = $_POST['dtNasc'];
      $login = $_POST['login'];
      $senha = $_POST['senha'];
      $perfil = $_POST['perfil'];
      $cpf = $_POST['cpf'];
      $email = $_POST['email'];

      $pc = new Pessoacontroller();
      $pc->insertPessoa($nome, $dtNasc, $login, $senha, $perfil, $email, $cpf);
    }
  ?>
  <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js " integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT " crossorigin="anonymous "></script>
</body>

</html>