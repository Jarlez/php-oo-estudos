<?php
          
       class Cadastro{
       private $servidor;
                
    public function __construct(){
        $this->servidor = new PDO("mysql:host=localhost:3307;dbname=sistema","root","");
    }
    public function create($nome="",$telefone="",$email=""){
        $this->servidor->exec("INSERT INTO cadastro (nome,telefone,email) VALUES ('{$nome}','{$telefone}','{$email}')");
            // $this->listar();
    }

 }
