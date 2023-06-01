<?php





require_once "Crud.php";

$crud = new Crud();



//$crud->cadastrar("Vasco12");
$crud->excluir(13);
$crud->editar(1,"vasco2321");























/*
$servidor = new PDO("mysql:host=localhost:3307;dbname=livros", "root", "");

//$servidor->exec("INSERT INTO famosos (nome) VALUES('Vasco da Gama')");

$tabela = $servidor->query("SELECT * FROM famosos");

if ($tabela) {

    echo "
<table border='2' display='flex' allign-items='center'>
<tr>
<td><b>ID</b></td>
<td><b>NOME</b></td>
</tr>
";

foreach ($tabela as $linha) {
        echo "
<tr>
<td>{$linha['id']}</td>
<td>{$linha['nome']}</td>
</tr>
";

    }


    echo "</table>";

}

$servidor->exec("DELETE from famosos where id = 1");


$servidor = null;

*/
?>