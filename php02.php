<?php

require_once "model/produto.php";

$p = new produto();
$p->setId(12);
$p->setNome("Boné");
$p->setvlrCompra("100.00");
$p->setVlrVenda("150.00");
$p->setqtdEstoques("50");

echo "Dados do Produto: <br>";
echo "Código: ".$p->getId(). "<br>";
echo "Produto: ".$p->getNome(). "<br>";
echo "Valor de Compra: ".$p->getvlrCompra(). "<br>";
echo "Valor de Venda: ".$p->getvlrVenda(). "<br>";
echo "Qtde em estoque: " .$p->getqtdEstoques(). "<br>";
?>