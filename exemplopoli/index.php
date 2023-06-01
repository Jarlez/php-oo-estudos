<?php 

require_once "autoload.php";

use Classes\Figura;
use Classes\Triangulo;
use Classes\Quadrado;




/*echo Quadrado::AUTOR;*/

$triangulo= new Triangulo(10,10);
$quadrado = new Quadrado(10,10);


$triangulo->mostraArea();
$quadrado->mostraArea();

?>