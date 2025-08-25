<?php

/* Cire uma classe (molde de objetos) chamada 'Cachorro' com os seguintes atributos: Nome, Idade,
Raça, Castrado e Sexo
*/ 

class Cachorro{
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo ){
        $this->nome = $nome;
        $this ->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }

    public function latir() {
        echo "O cachorro $this->nome está latindo!";
    }

    public function marcarTerritorio() {
        echo "O cachorro $this->nome da raça $this->raca está marcando território";
    }
}

$cachorro01 = new Cachorro("Cris", 5, "Salsicha", true, "Masculino");
$cachorro02 = new Cachorro("Terry", 4, "Viralata", true, "Feminino");
$cachorro03 = new Cachorro("Cruz", 2, "Pastor-Alemão", false, "Feminino");
$cachorro04 = new Cachorro("Gomes", 1, "Viralata", true, "Masculino");
$cachorro05 = new Cachorro("Malaman", 8, "Labrador", false, "Masculino");
$cachorro06 = new Cachorro("Helo", 4, "Labrador", true, "Feminino");
$cachorro07 = new Cachorro("Jeff", 5, "Boxer", true, "Masculino");
$cachorro08 = new Cachorro("Obesos", 9, "Pitbull", false, "Feminino");
$cachorro09 = new Cachorro("Pipoca", 10, "rottweiler", true, "Masculino");
$cachorro10 = new Cachorro("Tequila", 12, "rottweiler", false, "Feminino");

$cachorro01 ->MarcarTerritorio();
?>