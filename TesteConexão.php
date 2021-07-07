<?php

include_once 'BancodeDados/Conecta.php';

$conn = new Conecta();
if($conn->conectadb()){
    echo "Conectou";
}else{
    echo "Não conectou";
}
