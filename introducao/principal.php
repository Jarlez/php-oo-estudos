<?php

require_once "Produto.php";

$produto = new Produto(12,"Vasco da Gama123", 20, 34);
//$produto->setCodigo(7);
//$produto->setDescricao("Vasco da Gama");

$produto->imprimeRelatorio();



?>