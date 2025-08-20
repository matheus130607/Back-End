<?php

class Usuario{
    public $nome;
    public $CPF;
    public $sexo;
    public $email;
    public $civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $CEP;

    public function __construct($nome, $CPF, $sexo, $email, $civil, $cidade, $estado, $endereco, $CEP) {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->civil = $civil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->CEP = $CEP;
    }
}
$usuario1 = new Usuario("Josenildo Afonso Souza", "100.200.300-40", "Masculino", "josenewdo.souza@gmail.com","Casado", "Xique-Xique", "Bahia", "Rua da amizade, 99", "40123-98");

$usuario2 = new Usuario("Valentina Passos Scherrer", "070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo", "Avenida da saudade, 1942", "23456-24");

$usuario3 = new Usuario("Claudio Braz Nepumoceno", "575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí", "Estrada 3, 33", "12345-99");

?>