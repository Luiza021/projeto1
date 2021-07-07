<?php
include_once 'C:/xampp/htdocs/projeto/PHP/model DB/livro.php';
include_once ('C:/xampp/htdocs/projeto/PHP/model/livro.php');
class daoLivro{
    
    public function inserir(Livro $l) {
        $conn = new Conecta();
        $msg = "Dados cadastrados com sucesso!";
        if ($conn->conectadb()){
        $sql = "insert into produto values (null,'". $l->getIdLivro().
                "','".$l->getTitulo()."','".$l->getAutor()."','".
                $l->getEditora()."','".$l->getqtdEstoque()."')";

        if (mysqli_query($conn->conectadb(), $sql)){
            $msg = "<p style ='color:green;'>"."Dados cadastrados com sucesso</p>";
        } else{
            $msg = "<p style='color:red'>"."Erro no cadastro do Livro</p>";
        }
        }else
            $msg = "Erro no inserimento do Livro";
        mysqli_close($conn->conectadb());
        return $msg;

    }

     public function listarLivroDAO(){
        $conn = new Conecta();
        if ($conn->conectadb()) {
            $sql = "select * from livro";
            $query = mysqli_query($conn->conectadb(), $sql);
            $result = mysqli_fetch_array($query);
            $lista = array();
            $a = 0;
            if ($result){}
            do{
                $produto = new Produto();
                $produto->setIdProduto($result['idLivro']);
                $produto->setNomeProduto($result['titulo']);
                $produto->setVlrCompra($result['editora']);
                $produto->setVlrVenda($result['']);
                $produto->setQtdEstoque($result['qtdEstoque']);
                $lista[$a] = $produto;
                $a++;
            }while($result = mysqli_fetch_array($query));
            mysqli_close($conn->conectadb());
            return $lista;
         }
     }
}


?>