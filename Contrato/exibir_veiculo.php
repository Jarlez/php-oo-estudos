<?php


require_once "autoload.php";

use Classes\Veiculo;
use Classes\Carro;
use Classes\Moto;


$nome = $_POST[
    'nome'
];
$modelo = $_POST[
    'modelo'
];
$marca = $_POST[
    'marca'
];
$tipo = $_POST[
    'tipo'
];
$veiculo=null;




if ($tipo == "1" ){
    $veiculo=new Carro($nome,$marca,$modelo);
    
}else{

    $veiculo=new Moto($nome,$marca,$modelo);

}

echo $veiculo->getNome() . "<br/>";
echo $veiculo->getMarca() . "<br/>";
echo $veiculo->getModelo() . "<br/>";








?>