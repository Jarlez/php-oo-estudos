<?php

class Aplicacao
{
    public static $quantInstancias;

    public function __construct()
    {
        static::$quantInstancias++;
    }

    public static function getQuantInstancias()
    {
        return static::$quantInstancias;
    }

}

$instancia1 = new Aplicacao();
echo Aplicacao::$quantInstancias . "<br/>";
$instancia2 = new Aplicacao();
echo Aplicacao::$quantInstancias . "<br/>";
echo $instancia1->getQuantInstancias();

/*
$instancia=new Aplicacao();
$instancia=new Aplicacao();
$instancia=new Aplicacao();
echo Aplicacao::$quantInstancias . "<br/>";
echo $instancia1->getQuantInstancias();
*/

?>