<?php

$altura = 1.40;
$peso = 90;

$imc = $peso / ($altura * 2); 



echo("<h2><br>Classificação<br></h2>");
echo("<br>Abaixo de 18.5 = Abaixo do peso<br>");
echo("<br>Entre  18.5 - 24.9 = Normal<br>");
echo("<br>Entre 25.1 - 29.9 = Sobrepeso<br>");
echo("<br>Entre 30.1 - 34.9 = Obesidade grau 1<br>");
echo("<br>Maior que 35.0  = Obesidade grau 2<br>");

print_r("<h2>Seu imc é : ".$imc."<br></h2>");

if($imc < 18.5 ){
    echo("<h2>Abaixo do peso</h2>");

}
else if ($imc < 25.0) {
    echo("<h2>Peso ideal</h2>");
}
else if ($imc < 30.0){
    echo("<h2>Sobrepeso<h2>");
}
else if($imc < 35.0){
    echo("<h2>Obesidade grau 1<h2>");

}
else if($imc < 40.0){
    echo("<h2>Obesidade de grau 2<h2>");
}