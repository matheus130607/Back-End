<?php

class Moto{
    public $marca;
    public $modelo;
    public $cilindrada;
    public $ano;
    public $bateu;

    public function exibir($marca,$modelo,$cilindrada,$ano,$bateu){
    echo"A motocicleta $marca, modelo $modelo, de $cilindrada cilindradas, ano $ano, bateu? $bateu";
    }
}

class Produtos{ //criação da classe produtos
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    //Métodos
    public  function autalizarEstoque($qtde_vendida) {
        $this->qtde_estoque -= $qtde_vendida;
        return $this->qtde_estoque;
    }
    //Criando objetos com o construtor
    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }
}
//Criando objetos sem o construtor
// $produto1 = new Produtos();
// $produto1-> nome = "Suco Tang";
// $produto1-> categoria = "Bebidas";
// $produto1-> fornecedor = "Mondelez";
// $produto1-> qtde_estoque = 200;

// $produto2 = new Produtos();
// $produto2-> nome = "Energítico Monster";
// $produto2-> categoria = "Bebidas";
// $produto2-> fornecedor = "Coca-Cola";
// $produto2-> qtde_estoque = 150;

//Criando objetos com o construtor
$produto1 = new Produtos ("Suco Tang", "Bebidas", "Mondelez", 200);
$produto2 = new Produtos ("Energítico Monster", "Bebidas", "Coca-Cola", 150);

?>