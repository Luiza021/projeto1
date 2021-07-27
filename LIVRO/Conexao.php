<?php

include_once 'C:/xampp/htdocs/ConectaBancodDados.php';

$conn = new Conecta();
if($conn->conectadb()){
    echo "Conectou";
}else{
    echo "Não conectou";
}

