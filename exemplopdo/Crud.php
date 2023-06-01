<?php 

class Crud
{


private $servidor;
public function __construct(){

$this->servidor = new PDO("mysql:host=localhost:3307;dbname=livros", "root", "");

}

public function cadastrar($nome=""){

    $this->servidor->exec("INSERT INTO famosos (nome) VALUES('{$nome}')");
    $this->listar();

}

public function listar(){

    $tabela = $this->servidor->query("SELECT * FROM famosos");

    if ($tabela) {
    
        echo "
    <table border='2' display='flex' allign-items='center'>
    <tr>
    <td><b>ID</b></td>
    <td><b>NOME</b></td>
    </tr>
    ";
    
    foreach ($tabela as $linha) {
            echo "
    <tr>
    <td>{$linha['id']}</td>
    <td>{$linha['nome']}</td>
    </tr>
    ";
    
        }
    
        echo "</table>";
    }

}


public function excluir($id) {
    $this->servidor->exec("DELETE from famosos where id = {$id}");
    $this->listar();
}

public function editar($id,$nome="Padrão") {
    $this->servidor->exec("update famosos set nome = '{$nome}' 
                            where id = {$id}");
}

public function __destruct() {
    $this->servidor = null;
}

}

















?>