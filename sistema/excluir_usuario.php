<?php
require_once "Cadastro.php";

$cadastro = new Cadastro();

if (isset($_GET["id"])) {
    $codigo = $_GET["id"];
    $cadastro->deleteByCodigo($codigo);
    header('Location: listar_usuarios.php');
} else {
    echo "ID do usuário não fornecido.";
}

?>