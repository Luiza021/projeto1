
<?php
include_once '\xampp\htdocs\projeto1\PHP01\Controller'
include_once '\xampp\htdocs\projeto1\PHP01\Controller'

class ProdutoController{
      public function inserirProduto($nomeProduto,$vlrcompra,$vlrvenda,$qtdEstoque){
      $produto = new Produto();
      $produto->setNomeProduto($nomeProduto);  
      $produto->setVlrCompra($nomeProduto);
      $produto->setVlrVenda($nomeProduto);
      $produto->setQtdEstoque($nomeProduto);

      $daoProduto = new DaoProduto();
      return $daoProduto->insert($produto);
}
  //metedo para carregar a lista de produtos que vem da DAO
  public function listarProdutos(){
      $daoProduto = new daoProduto();
      return $daoProduto ->listarProdutoDAO();
      
?>