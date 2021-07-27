<?php
 include_once 'C:../Livro/Livro.php';
 include_once 'C:/xampp/htdocs/LIVRO/daoLivro.php';

    class LivroController{
       
        public function inserirLivro($titulo
            ,$autor,$editora,$qtdEstoque){
        
            $livro = new Livro();
           
            $livro->setTitulo($titulo);
            $livro->setAutor($autor);
            $livro->setEditora($editora);
            $livro->setQtdEstoque($qtdEstoque);
            
            $daoLivro = new daoLivro();
            return $daoLivro->inserir($livro);
        }
        public function atualizarLivro($id, $titulo, $autor, 
            $editora, $qtdEstoque){
        $livro = new Livro();
        $livro->setIdLivro($id);
        $livro->setTitulo($titulo);
        $livro->setAutor($autor);
        $livro->setEditora($editora);
        $livro->setQtdEstoque($qtdEstoque);
        
        $daoLivro= new Daolivro();
        return $daoLivro->atualizarLivroDAO($livro); }
    
        public function listarLivros(){
            $daoLivro = new daoLivro();
             return $daoLivro ->listarLivroDAO();
        }
        public function excluirLivro($id){
            $daoLivro = new DaoLivro();
           return $daoLivro->excuirLivroDAO($id);
        }
        public function pesquisarLivroId($id){
            $daoLivro = new DaoLivro();
            return $daoLivro->pesquisarLivroIdDAO($id);
        }
        public function limpar(){
            return $li = new Livro();
        }         
        public function editarLivro($titulo,$autor,$editora,
        $qtdEstoque){
  
         $livro = new Livro();
         $livro->setTitulo($titulo);
         $livro->setAutor($autor);
         $livro->setEditora($editora);
         $livro->setQtdEstoque($qtdEstoque);

         $daoLivro = new DaoLlivro();
         return $daolivro->inserir($livro);
        }else {
            return $daoLivro->atualizarLivroDAO($livro);
        }
        
    }
?>

