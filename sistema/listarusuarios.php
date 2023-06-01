<?php
          
     class listarusuarios {
        private $servidor;

        public function __construct(){
            $this->servidor = new PDO("mysql:host=localhost:3307;dbname=sistema","root","");
        }
     
     public function listar(){
        $tabela = $this->servidor->query("SELECT * FROM cadastro");

        if($tabela){
            echo"
                <table border=2>
                    <tr>
                        <td><b>Codigo</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Telefone</b></td>
                        <td><b>Email</b></td>
                    </tr>
            ";
    
            foreach($tabela as $linha){
                echo "
                    <tr>
                       <td><b>{$linha['codigo']}</b></td>
                       <td><b>{$linha['nome']}</b></td>
                       <td><b>{$linha['telefone']}</b></td>
                       <td><b>{$linha['email']}</b></td>
                    </tr>";
            }
            echo "</table>";
        
    }
}

}



?>