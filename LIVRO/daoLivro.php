<?php
include_once '../modelDB/Livro.php';
include_once '../ConectaBancodDados.php';
include_once 'C:/xampp/htdocs/LIVRO/Mensagem.php';

class daoLivro{
    
    public function inserir(Livro $l) {
        $conn = new Conecta();
        $msg = new Mensagem();
         if ($conn->conectadb()){
        $sql = "insert into produto values (null,'".
         $l->getIdLivro()."','"
         .$l->getTitulo()."','"
         .$l->getAutor()."','"
         . $l->getEditora()."','"
         .$l->getqtdEstoque()."')";

         if (mysqli_query($conn->conectadb(), $sql)){
            $msg = "<p style ='color:green;'>"."Dados cadastrados com sucesso</p>";
        } else {
            $msg = "<p style='color:red'>"."Erro no cadastro do Livro</p>";
            }
        } else {
            $msg = "<p> Erro na conexão </p>";
        }
        mysqli_close($conn->conectadb());
        return $msg;
     }
     public function atualizarLivroDAO(Livro $livro){
        $conn = new Conecta();
        $msg = new Mensagem();
        if($conn->conectadb()){
            $idLivro = $livro->getIdLivro();
            $titulo = $livro->getTitulo();
            $autor = $livro->getAutor();
            $editora = $livro->getEditora();
            $qtdEstoque = $livro->getQtdEstoque();
            $sql = "update livro set nome = '$titulo',"
                    . "vlrCompra = '$autor', vlrVenda = '$editora', "
                    . "qtdEstoque = '$qtdEstoque' where id = '$idLivro'";
            $resp = mysqli_query($conn->conectadb(), $sql) or 
                    die($conn->conectadb());
            if($resp){
                $msg->setMsg("<p style='color: blue;'>"
                        . "Dados atualizados com sucesso</p>");
            }else{
                $msg->setMsg($resp);
            }
        }else{
            $msg->setMsg("<p style='color: red;'>"
                        . "Erro na conexão com o banco de dados.</p>");
        }
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
                $livro = new Livro();
                $livro->setIdLivro($result['IdLivro']);
                $livro->setTitulo($result['titulo']);
                $livro->setEditora($result['editora']);
                $livro->setQtdEstoque($result['']);
                $livro->setQtdEstoque($result['qtdEstoque']);
                $lista[$a] = $livro;
                $a++;
            }while($result = mysqli_fetch_array($query));
            mysqli_close($conn->conectadb());
            return $lista;
         }
     }

     public function excuirLivroDAO($id){
        $conn= new Conecta();
        $conecta=$conn->conectadb();
        $msg = new Mensagem();
             if($conecta){
                 $sql = "excluir do livro onde idlivro='$id'";
                mysqli_query($conecta, $sql);
                   ( "Localização: ../cadastroLivor.php" );
               mysqli_close ( $conecta );
               $msg->setMsg ("<p style='color: red;'>"
               . "Dados excluídos com sucesso.</p>");
        }else{
             $msg->setMsg ("<p style='color: red;'>'Banco inoperante!'</p>"); 
             }
        return $msg;
      
    }
      public function  pesquisarLivroIdDAO ( $id ) {
        $conn=new Conecta ();
        $conecta=$conn-> conectadb ();
        $livro=new Livro ();
        if ( $conecta ) {
            $sql= "select * from livro onde idlivro='$id'" ;
            $result= mysqli_query ( $conecta ,$sql );
            $linha= mysqli_fetch_assoc ( $result );
            if ( $linha ) {
                do {
                    $livro->setIdLivro ($linha ['idlivro']);
                    $livro->setTitulo ($linha ['titulo']);
                    $livro->setAutor ($linha ['autor']);
                    $livro->setEditora ($linha ['editora']);
                    $livro->setQtdEstoque ($linha ['qtdEstoque']);
                } while ($linha= mysqli_fetch_assoc($result));
            }
            mysqli_close ( $conecta );
        } else {
            echo  "<script> alert ('Banco inoperante!')</script>" ;
            echo  "<META HTTP-EQUIV='ATUALIZAR'CONTENT = \" 0;
			 URL = '.. /projeto/cadastroLivro.php'\">" ;
        }
        return  $livro ;
    }
     
}
