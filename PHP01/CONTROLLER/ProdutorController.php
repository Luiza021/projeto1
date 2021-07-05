
<?php
include_once 'C:\xampp\htdocs\projeto1\PHP01\Controller'
include_once 'C:\xampp\htdocs\projeto1\PHP01\Controller'

class ProdutoController{
   public function inserirProduto($nomeProduto,$vlrCompra,$vlrVenda,$qtdEstoque){
       $produto = new Produto();
       $produto -> setNomeProduto($nomeProduto);
       $produto -> setvlrCompra($vlrCompra);
       $produto -> setvlrVenda($vlrVenda);
       $produto -> setqtdEstoque($qtdEstoque);
       
       $daoProduto
       
   }     
}
?>
