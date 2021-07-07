<?php
class produto{
    private $idProduto;
    private $nomeProduto;
    private $vlrCompra;
    private $vlrVenda;
    private $qtdEstoque;

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

        public function getVlrCompra()
    {
        return $this->vlrCompra;
    }

    public function setVlrCompra($vlrCompra)
    {
        $this->vlrCompra = $vlrCompra;

        return $this;
    }

    public function getVlrVenda()
    {
        return $this->vlrVenda;
    }

    
    public function setVlrVenda($vlrVenda)
    {
        $this->vlrVenda = $vlrVenda;

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
?>