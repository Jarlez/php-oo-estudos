<?php




$servidor = new PDO("mysql:host=localhost:3307;dbname=livros", "root", "");



$consulta = $servidor->prepare("INSERT INTO from famosos(nome) VALUES(?)");

$nome = 'vasco da gama';



$consulta->bindParam(1, $nome);
$consulta->execute();


$servidor = null;

?>