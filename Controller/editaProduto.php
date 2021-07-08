<?php
include_once 'ProdutoController.php';
$id = $_REQUEST['id'];
$pc = new ProdutoController();
$pc->pesquisarProdutoId($id);
header("Location:../php01/CadastroProduto.php");
exit;

