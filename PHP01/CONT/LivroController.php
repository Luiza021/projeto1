<?php
<<<<<<< HEAD
 include_once 'C:/xampp/htdocs/projeto/PHP01/modelDB/Livro.php';
 include_once 'C:/xampp/htdocs/projeto/PHP01/DAO/daoLivro.php';
=======
 include_once 'C:/xampp/htdocs/projeto1/PHP01/model DB/LivroController';
 include_once 'C:/xampp/htdocs/projeto1/PHP01/DAO/daoLivro';
>>>>>>> d030f1ba82ce386acbc0a96bee2d0ab480f219ae

    class LivroController{
        public function inserirLivro($idLivro,$titulo ,$autor,$editora,$qtdEstoque){
        
            $livro = new Livro();
            $livro->setIdLivro($idLivro);  
            $livro->setTitulo($titulo);
            $livro->setAutor($autor);
            $livro->setEditora($editora);
            $livro->setQtdEstoque($qtdEstoque);

            $daolivro = new Daolivro();
           return $daolivro->inserir($livro);
  
        }
            function listarLivro(){
<<<<<<< HEAD
            $daolivro = new daoLivro();
            return $daolivro->listarLivroDAO();
=======
            $daolivro = new daolivro();
            return $daolivro ->listarLivroDAO();
>>>>>>> d030f1ba82ce386acbc0a96bee2d0ab480f219ae
            }
    }
?>

