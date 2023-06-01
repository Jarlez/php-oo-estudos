<?php 


namespace Classes;
use Interfaces\ICaracteristicas;

class Moto extends Veiculo implements ICaracteristicas{



    public function exibeNome(){
        echo $this->getNome();
         }
         
      public function exibeMarca(){
         echo $this->getMarca();
          }
          
      public function exibeModelo(){
         echo $this->getModelo();
          }
    
        

    

}
















?>