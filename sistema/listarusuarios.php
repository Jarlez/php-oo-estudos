<?php
class ListarUsuarios {
    private $servidor;

    public function __construct(){
        $this->servidor = new PDO("mysql:host=localhost:3306;dbname=sistema","root","");
    }
 
    public function listar(){
        $tabela = $this->servidor->query("SELECT * FROM cadastro");

        if($tabela){
            echo "
                <table border=2>
                    <tr>
                        <td><b>Código</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Telefone</b></td>
                        <td><b>Email</b></td>
                        <td><b>Ações</b></td>
                    </tr>
            ";

            foreach($tabela as $linha){
                echo "
                    <tr>
                        <td>{$linha['codigo']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['telefone']}</td>
                        <td>{$linha['email']}</td>
                        <td>
                            <a href='editar_usuario.php?id={$linha['codigo']}'>Editar</a>
                            <a href='excluir_usuario.php?id={$linha['codigo']}'>Excluir</a>
                        </td>
                    </tr>";
            }
            
            echo "</table>";
        }
        
        $link = "index.html";
        echo '<a href="' . $link . '">Cadastrar um novo usuário</a>';
    }
}
?>