<?php

require_once "Cadastro.php";

$cadastro = new Cadastro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadastro->create($_POST["nome"], $_POST["telefone"], $_POST["email"]);
    header('Location: listar_usuarios.php');
}

?>