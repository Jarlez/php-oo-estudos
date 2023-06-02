<?php

class Produto

{
    private $codigo;
    private $descricao;
    private $preco;
    private $quantidade;

    public function __construct($codigo, $descricao, $preco, $quantidade)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }


    public function imprimeRelatorio()
    {
        echo "<p><b>Código: {$this->codigo}</b></p>";
        echo "<p><b>Descrição: {$this->descricao}</b></p>";
        echo "<p><b>Preço: {$this->preco}</b></p>";
        echo "<p><b>Quantidade: {$this->quantidade}</b></p>";
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }
}

?>