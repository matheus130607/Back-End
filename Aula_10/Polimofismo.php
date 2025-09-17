<?php

 /*Polimorfismo:
    O termo Polimorfismo signifcia "várias formas".
    Assoaciando isso a Programação Orientada e Objetos, o conceito se trata de várias classes e
suas instâncias (objetos) respondendo a um mesmo método de formas diferentes. No exemplo do Interface da Aula_09, temos um método CalcularArea() que responde de forma diferente à classa Quadrado, à classe Péntagono e a classe Círculo. Isso quer dizer que a função é a mesma - clacular a área da forma geométrica - mas a operação muda de acordo com a figura
*/

/* Crie um método chamado "mover()", aonde ele responde de varias formas diferentes, para as sub-classes: Carro, Avião, Barco e Elevador. Dica: Utilize Interfaces.
*/

namespace Aula_10;

interface Movimento {
    public function mover();
    
}

class Carro implements Movimento {
    public $nome;
    public $modelo;

function __construct($nome, $modelo) {
    $this -> nome = $nome;
    $this -> modelo = $modelo;
}

    public function mover() {
        echo "O carro: $this->nome de modelo: $this->modelo está andando \n";
    }
}

class Aviao implements Movimento {

    public $nome;
    public $modelo;

function __construct($nome, $modelo) {
    $this -> nome = $nome;
    $this -> modelo = $modelo;
}

    public function mover() {
        echo "O avião $this->nome do modelo: $this->modelo está voando \n";
    }
}

class Barco implements Movimento {

    public $nome;

function __construct($nome) {
    $this -> nome = $nome;
}

    public function mover() {
        echo "O barco $this->nome está navegando \n";
    }
}


class Elevador implements Movimento {

    public $nome;

function __construct($nome) {
    $this -> nome = $nome;
}

    public function mover() {
        echo "O elevador $this->nome está descendo ou subindo \n";
    }
}

$carro1 = new Carro (readline("Digite o nome do carro: \n"),readline("Digite o modelo: \n"));

$aviao1 = new Aviao(readline("Digite o nome do Avião: \n"), readline("Digite o modelo do avião: \n"))

?>