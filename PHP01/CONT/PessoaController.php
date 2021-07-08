<?php
include_once '../dao/daoPessoa.php';
include_once '../model/Pessoa.php';

class daoPessoa{

   public function inserirPessoa($nome,$dtNasc, $login,$senha,$perfil,$email,$cpf){
      $produto = new Produto();
      $produto->setnome($nome);  
      $produto->setDtNasc($dtNasc);
      $produto->setVlrVenda($login);
      $produto->setQtdEstoque($senha);
      $produto->setQtdEstoque($perfil);
      $produto->setQtdEstoque($email);
      $produto->setQtdEstoque($cpf);

      $daoProduto = new DaoProduto();
   }
}
?>