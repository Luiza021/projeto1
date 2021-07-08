<?php
include_once 'C:/xampp/htdocs/projeto1/PHP01/model/Conecta.php';
include_once 'C:/xampp/htdocs/projeto1/PHP01/model/Produto.php';

class daoProduto {
    
    public function inserir(Produto $produto){

        $conn= new Conecta();
        if ($conn->conectadb()){

            $nomeProduto = $produto->getnomeproduto();
            $tVlrCompra = $produto->getVlrCompra();
            $VlrVenda = $produto->getVlrVenda();
            $QtdEstoque = $produto->getQtdEstoque();
            $sql = "insert into produto values (null,'$nomeProduto', '$tVlrCompra', '$VlrVenda', '$QtdEstoque')";
            if (mysqli_query($conn->conectadb(),$sql)){
                $msg="<p style='color: blue;'>"."Dados Castrados com sucesso</p>";
            }
            else{
                $msg = "<p style='color: red;'>"."Erro na inserção dos dados</p>";
            }
              
        }else{
            $msg = "<p style='color: red;'>"."Erro na conexão com o banco de dados.</p>";
        }
        mysqli_close($conn->conectadb());
        return $msg;
                
     //método para carregar lista de produtos de banco de dados//*
        public function listarProdutosDAO(){ 
            $conn = new Conecta2();
            if ($conn->conectadb()){
                $sql= "select * from produto "
                $query = mysql_query($conn->conectadb(),$sql);
                $result = mysql_fetch_array($query);
                $lista = array();
                $a=0;
                if ($result){}
                do{
                    $produto= new Produto();
                    $produto->setIdProduto($result['id']);
                    $produto->setIdProduto($result['id']);
                    $produto->setIdProduto($result['id']);
                    $produto->setIdProduto($result['id']);
                    $lista[$a]=$produto;
                    $lista[$a]=$produto                
                    $a ++;
                }while($result = mysql_fetch_array($conn->conectadb($query));
                 mysqli_close($conn->conectadb());
                return $lista;
             }
        
        }
    }

}
