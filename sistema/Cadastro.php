<?php

class Cadastro
{
    private $servidor;

    public function __construct()
    {
        $this->servidor = new PDO("mysql:host=localhost:3306;dbname=sistema", "root", "");
    }
    public function create($nome = "", $telefone = "", $email = "")
    {
        $this->servidor->exec("INSERT INTO cadastro (nome,telefone,email) VALUES ('{$nome}','{$telefone}','{$email}')");
    }

    public function deleteByCodigo($codigo)
    {
        $stmt = $this->servidor->prepare("DELETE FROM cadastro WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
    }

    public function getByCodigo($codigo)
    {
        $stmt = $this->servidor->prepare("SELECT * FROM cadastro WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($codigo, $nome, $telefone, $email)
    {
        $stmt = $this->servidor->prepare("UPDATE cadastro SET nome = :nome, telefone = :telefone, email = :email WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }
}
