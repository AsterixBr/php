<?php
include_once '../php01/model/produto.php';
include_once 'Controller/ProdutoController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            .btInput{
                padding: 10px 20px 10px 20px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
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
            <div class="row" style="margin-top: 30px;">
                <div class="col-8 offset-2">

                    <div class="card-header bg-light text-center border"
                         style="padding-bottom: 15px; padding-top: 15px;">
                        Cadastro de Produto
                    </div>
                    <div class="card-body border">
                        <?php
                        //envio dos dados para o BD
                        if (isset($_POST['cadastrarProduto'])) {
                            $Nome = $_POST['nomeProduto'];
                            $vlrCompra = $_POST['vlrCompra'];
                            $vlrVenda = $_POST['vlrVenda'];
                            $qtdEstoques = $_POST['qtdEstoques'];

                            $pc = new ProdutoController();
                            echo $pc->insertProduto($Nome, $vlrCompra, $vlrVenda, $qtdEstoques);
                        }
                        ?>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <label>C??digo: </label> <br> 
                                    <label>Produto</label>  
                                    <input class="form-control" type="text" 
                                           name="nomeProduto">
                                    <label>Valor de Compra</label>  
                                    <input class="form-control" type="text" 
                                           name="vlrCompra">  
                                    <label>Valor de Venda</label>  
                                    <input class="form-control" type="text" 
                                           name="vlrVenda"> 
                                    <label>Qtde em Estoque</label>  
                                    <input class="form-control" type="number" 
                                           name="qtdEstoques">
                                    <input type="submit" name="cadastrarProduto"
                                           class="btn btn-success btInput" value="Enviar">
                                    &nbsp;&nbsp;
                                    <input type="reset" 
                                           class="btn btn-light btInput" value="Limpar">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped table-responsive">
                <thead class="table-dark">
                    <tr><th>C??digo</th>
                        <th>Nome</th>
                        <th>Compra (R$)</th>
                        <th>Venda (R$)</th>
                        <th>Estoque</th>
                        <th>A????es</th></tr>
                </thead>
                <tbody>
                    <?php
                    $pcTable = new ProdutoController();
                    $listaProdutos = $pcTable->listarProdutos();
                    $a = 0;
                    if ($listaProdutos != null) {
                        foreach ($listaProdutos as $lp) {
                            $a++;
                            ?>
                            <tr>
                                <td><?php print_r($lp->getId()); ?></td>
                                <td><?php print_r($lp->getNome()); ?></td>
                                <td><?php print_r($lp->getVlrCompra()); ?></td>
                                <td><?php print_r($lp->getVlrVenda()); ?></td>
                                <td><?php print_r($lp->getqtdEstoques()); ?></td>
                                <td><a class="btn btn-light" 
                                       href="editaProduto.php?id=<?php echo $lp->getId(); ?>">
                                        <img src="img/edita.png" width="32"></a>
                                    <button type="button" 
                                            class="btn btn-light" data-toggle="modal" 
                                            data-target=".modal_a<?php echo $a; ?>">
                                        <img src="img/delete.png" width="32"></button></td>
                            </tr>
                            <!-- janela modal Confirm. de Leitura -->
            <div class="modal fade" id="exampleModal<?php echo $a;?>" role="dialog" tabindex="-1" aria-hidden="true">
            	<div class="modal-dialog">
                	<div class="modal-content">
                    	<div class="modal-header">
                        	<button type="button" class="close" data-dismiss="modal">
                            	<span aria-hidden="true">&times;</span>
                                <span class="sr-only">Confirma????o de leitura do aviso</span>
                            </button>
                        	<h4 class="modal-title">Confirmar Leitura</h4>
                        </div>
                        <div class="modal-body">
                        	<form name="confirmaAviso" method="post" action="" >
                            <div class="form-group">
                        
                                Comandos de confirma????o
                                <div class="form-group"><br>
                                    <input type="submit" name="confirmar" value="&nbsp; Confirmo a leitura &nbsp;" class="btn btn-primary btn-lg" />
                                    <input type="reset" value="&nbsp;&nbsp; Cancelar &nbsp;&nbsp;" class="btn btn-danger btn-lg" data-dismiss="modal"/>
                                     </form>
	                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        <!-- // janela modal Confirm. de Leitura -->
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>     
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js " integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT " crossorigin="anonymous "></script>
</body>
</html>
