<?php 

require_once "autoload.php";

use Classes\Animal;
use Classes\Carnivoro;
use Classes\Herbivoro;


$carnivoro= new Carnivoro("carne");
$herbivoro = new Herbivoro("legumes");


$carnivoro->habitoAlimentar();
$herbivoro->habitoAlimentar();

?>