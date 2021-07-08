<?php

$endereco = 'localhost';
$usuario = 'root';
$senha = 'senac';
$banco = 'clinic';
 
$link = mysqli_connect($endereco,$usuario,$senha.$banco)or die('Erro: '.mysqli_error($link));

$sql= "'INSERT INTO cadastro VALUES'";
$sql .= "(null,";
$sql .= "'.$_POST['nome'].',";
$sql .= "'.$_POST['nascimento'].',";
$sql .= "'.$_POST['sexo'].',";
$sql .= "'.$_POST['cpf'].',";
$sql .= "'.$_POST['tel'].',";
$sql .= "'.$_POST['email'].')";

$consulta = mysqli_query($link,$sql);


 ?>