<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<h3>Eleições para síndico</h3>
<label>Selecione o seu candidato</label>
<?php
if(isset($_COOKIE[$cookie_c1])){
    setcookie($cookie_c1, 0);
    setcookie($cookie_c2, 0);
    setcookie($cookie_c3, 0);
    setcookie($cookie_n, 0);
    setcookie($cookie_contador, 1);
    setcookie($cookie_vencedor, 0);
    setcookie($cookie_x, 1);
}

do{ $cookie_vencedor++;
?>
<form method="POST" action="">
<label>Candidato:</label>
<select name="candidato">
<option value="x">[--SELECIONE--]</option>
<option value="1">Sebastião</option>
<option value="2">Marta</option>
<option value="3">Miranda</option>
</select>
<input type="submit" value="Votar" name="voto">
</form>



<?php
if(isset($_POST['voto'])){
    $candidato = $_POST['candidato'];
    switch($candidato){
        case (1): echo "Você votou no Sebastião";$cookie_c1++; break;
        case (2): echo "Você votou na Marta";setcookie ($cookie_c2,($_COOKIE($cookie_c2)+1)); break;
        case (3): echo "Você votou no Miranda";$cookie_c3++; break;
        default: echo "Desperdiçou seu voto"; $cookie_n++;
    }
} 

}while($_COOKIE[$cookie_contador] > 5);
    if($_COOKIE[$cookie_vencedor] <= $cookie_c1){
       setcookie("c1",($_COOKIE["c1"]+1));
        $nomeVencedor = "Sebastião";}
        if($_COOKIE[$cookie_vencedor] < $cookie_c2){
            setcookie("c2",($_COOKIE["c2"]));
            $nomeVencedor = "Marta";}
            if($_COOKIE[$cookie_vencedor] < $cookie_c3){
                setcookie("c3",($_COOKIE["c3"]));
                $nomeVencedor = "Miranda";
    
    }


?>
</body>
<html>