<?php
 include_once 'C:/xampp/htdocs/projeto/PHP01/modelDB/Livro.php';
 include_once 'C:/xampp/htdocs/projeto/PHP01/DAO/daoLivro.php';

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
            $daolivro = new daoLivro();
            return $daolivro->listarLivroDAO();
            }
    }
?>

