<?php
 class Livro{
     private $idLivro;
     private $titulo;
     private $autor;
     private $editora;
     private $qtdEstoque;

     public function getIdLivro()
     {
          return $this->idLivro;
     }

     public function setIdLivro($idLivro)
     {
          $this->idLivro = $idLivro;

          return $this;
     }

     public function getTitulo()
     {
          return $this->titulo;
     }

     public function setTitulo($titulo)
     {
          $this->titulo = $titulo;

          return $this;
     }

     public function getAutor()
     {
          return $this->autor;
     }

     public function setAutor($autor)
     {
          $this->autor = $autor;

          return $this;
     }

     public function getEditora()
     {
          return $this->editora;
     }

     public function setEditora($editora)
     {
          $this->editora = $editora;

          return $this;
     }

     public function getQtdEstoque()
     {
          return $this->qtdEstoque;
     }

    
     public function setQtdEstoque($qtdEstoque)
     {
          $this->qtdEstoque = $qtdEstoque;

          return $this;
     }
 }
   

/*metedo para atualizar dados do livro no Bd
            public function inserirLivro($idLivro,$titulo ,$autor,$editora,$qtdEstoque){
        
                $livro = new Livro();
                $livro->setIdLivro($idLivro);  
                $livro->setTitulo($titulo);
                $livro->setAutor($autor);
                $livro->setEditora($editora);
                $livro->setQtdEstoque($qtdEstoque);
                

            }
            */
            ?>
