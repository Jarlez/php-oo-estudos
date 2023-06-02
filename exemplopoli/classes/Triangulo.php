<?php 

namespace Classes;

use Interfaces\ICalculos;

class Triangulo extends Figura implements ICalculos{

     public function mostraArea(){
        echo $this->x*$this->y . "<br/>";
        }
}

?>