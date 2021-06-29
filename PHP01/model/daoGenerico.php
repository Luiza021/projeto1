<?php
include_once ('bd/Conecta.php');
include_once '../model/Pessoa.php';

class daoGenerico{
    public $conn;
    $sql = "insert into pessoa valeus (null,'".$p->getName()."','".$p-> getdtNasc()."','".$p-> getlogin().
    "','".$p-> getsenha()."','".$p-> getperfil()."','".$p-> getemail()."','".$p-> getcpf()."');
    if
    function inserir (Pessoa $p){
        $conn = new Conecta();
               if(mysqli_query($conn->conectadb(),$sql){
        return "Dados cadastrados com sucesso!";
        }else{ 
        return "Erro na conexão com Dados!";
        }
    }
}