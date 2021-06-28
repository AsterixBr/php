<?php

require_once "model/produto.php";

$p = new produto();
$p->id = 10;
$p->nome ="Tênis";
$p->vlrCompra = 100.00;
$p->vlrVenda = 150.00;
$p->qtdEstoques = 50;

echo "Dados do Produto: <br>";
echo "Código: ".$p->id. "<br>";
echo "Produto: ".$p->nome. "<br>";
echo "Valor de Compra: ".$p->vlrCompra. "<br>";
echo "Valor de Venda: ".$p->vlrVenda. "<br>";
echo "Qtde em estoque: " .$p->qtdEstoques. "<br>";
?>