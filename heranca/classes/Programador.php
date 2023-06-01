<?php

class Programador extends Funcionario
{

    private $linguagem;

    public function __construct($nome, $salario, $linguagem)
    {

        parent::__construct($nome, $salario);
        $this->linguagem = $linguagem;


    }


    public function getlinguagem()
    {
        return $this->linguagem;
    }

    public function setlinguagem($linguagem)
    {
        $this->linguagem = $linguagem;
        return $this;
    }
}
















?>