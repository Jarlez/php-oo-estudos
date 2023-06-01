<?php

require_once "Cadastro.php";

$cadastro = new Cadastro();

$cadastro->create($_POST["nome"], $_POST["telefone"], $_POST["email"]);
header('Location: listar_usuarios.php');

?>