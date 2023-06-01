<?php 


namespace Classes;
use Interfaces\ICalculos;



class Quadrado extends Figura implements ICalculos{ 
    const AUTOR = "Jarles Sayhare";

     public function mostraArea(){
        
        echo $this->x*$this->y . "<br/>";
        /*
        echo self::AUTOR;
        echo parent::TESTE;
        */
        }
        

       

}











?>