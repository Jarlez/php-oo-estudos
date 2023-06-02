<?php
require_once "Cadastro.php";

$cadastro = new Cadastro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    processarFormulario($cadastro);
} else {
    exibirFormulario($cadastro);
}

function processarFormulario($cadastro)
{
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $cadastro->update($codigo, $nome, $telefone, $email);
    header('Location: listar_usuarios.php');
    exit();
}

function exibirFormulario($cadastro)
{
    if (isset($_GET["id"])) {
        $codigo = $_GET["id"];
        $usuario = $cadastro->getByCodigo($codigo);

        if ($usuario) {
?>
            <form method="POST" action="editar_usuario.php">
                <input type="hidden" name="codigo" value="<?php echo $usuario['codigo']; ?>">
                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"><br>
                <label>Telefone:</label>
                <input type="text" name="telefone" value="<?php echo $usuario['telefone']; ?>"><br>
                <label>Email:</label>
                <input type="text" name="email" value="<?php echo $usuario['email']; ?>"><br>
                <input type="submit" value="Atualizar">
            </form>

<?php
        } else {
            echo "Usuário não encontrado.";
        }
    } else {
        echo "ID do usuário não fornecido.";
    }
}
?>