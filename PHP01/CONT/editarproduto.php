<?php
include_once '/ProdutoController';
$id =$daoProduto= new DaoProduto();
$daoProduto->excluirProdutoDAO($id);
$pc->pesquisarPodrutoIdDAO($id);
header(Location:../../cadastroProduto.php)
