<?php

// Crie uma classe Funcionario com os atributos privados nome e salario.
// o Crie métodos setNome, getNome, setSalario e getSalario.
// o Defina os valores de um funcionário com os setters.
// o Depois, altere o nome e o salário usando novamente os
// setters.
// o Mostre, com os getters, que os valores realmente foram
// modificados.

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this -> setNome($nome);
        $this -> setSalario($salario);
    }

    public function setNome($nome) {
        $this -> nome = ucwords(strtolower($nome));
        }
    
    public function getNome() {
        return $this -> nome;
    }

    public function setSalario($salario) {
        $this -> salario = $salario;
    }
    public function getSalario() {
        return $this -> salario;
    }

    public function exibirInfo() {
        return "O funcionário $this->nome tem o salário de R$ $this->salario.";
    }

}
$funcionario1 = new Funcionario("samu", 250);
echo $funcionario1 -> exibirInfo();

$funcionario1 -> setNome("samuel");
$funcionario1 -> setSalario(2000);
?>