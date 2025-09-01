<?php 

// 4. Encapsulamento de Produto
// Crie uma classe Produto com os atributos privados nome, preco e
// estoque.
// o Implemente os setters e getters.
// o Faça um objeto da classe e use os setters para definir os
// valores.
// o Exiba com os getters uma frase como:
// O produto X custa R$ Y e possui Z unidades em estoque.

 class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this -> setNome($nome);
        $this -> setPreco($preco);
        $this -> setEstoque($estoque);
    }

    public function setNome($nome) {
        $this -> nome = ucwords(strtolower($nome));
    }
    public function getNome() {
        return $this -> nome;
    }

    public function setPreco($preco) {
        $this -> preco = $preco;
    }
    public function getPreco() {
        return $this -> preco;
    }

    public function setEstoque($estoque) {
        $this -> estoque = abs((int)$estoque);
    }

    public function getEstoque() {
        return $this -> estoque;
    }

    public function exibirInfo() {
        return "O produto $this->nome custa R$ $this->preco e possui $this->estoque unidades em estoque.";
    }
 }
 $produto1 = new Produto("notebook", 3500, 10);
 echo $produto1 -> exibirInfo();
 $produto1 -> setNome("smartphone");
 $produto1 -> setPreco(2500);  
    






?>