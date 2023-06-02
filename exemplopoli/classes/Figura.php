<?php

namespace Classes;

abstract class Figura{

protected $x;
protected $y;

const TESTE = "OBA";

public function __construct($x = 0,$y = 0){
$this->x = $x;
$this->y = $y;

}
/*
public function mostraArea(){
//
echo $this->x*$this->y . "<br/>";
//
}

*/
}

?>