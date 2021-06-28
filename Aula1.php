<?php
echo "<label style='color: red; font-size: 30px'>OI</label><br>";

$idade = 30;
$altura = 1.80;
$nome = "Alexandre B";
$peso = 85;
$ativado = true;
if($ativado == true) {
    print_r("Nome: ". $nome. "<br>");
    print_r("Idade: ". $idade. "<br>");
    print_r("Altura: ". $altura. "<br>");
} else {
    echo ("Não foi dessa vez"); 
}
?>