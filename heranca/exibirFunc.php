<?php


require_once "autoload.php";

use Classes\Funcionarios;
use Classes\Gerente;
use Classes\Programador;


$nome = $_POST[
    'nome'
];
$salario = $_POST[
    'salario'
];
$obs = $_POST[
    'obs'
];
$tipo = $_POST[
    'tipo'
];

$funcionario=null;

if ($tipo == "1" ){
    $funcionario=new Programador($nome,$salario,$obs);
    echo "Linguagem de programação adotada:{$funcionario->getLinguagem()}<br>";
}else{

$funcionario = new Gerente($nome,$salario,$obs);
echo "Projeto sobre sua responsabilidade:{$funcionario->getProjeto()}<br>";

}

$funcionario->relatorioFunc()







?>