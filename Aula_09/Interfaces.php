<?php

/*
MODFICADORES DE ACESSO:
Existem 3 tipos: Public, Private e Protected.
Public NomeDoAtributo: Métodos e atributos publicos.

Private NomeDoAtributo: Métodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los.

Protected NomeDoAtributo: Métodos e atributos protegidos para acesso somente da classes e de suas classes filhas.

Pacotes(packeges): Sintage logo no início do código, que atribui de onde os arquivos pertencem, ou seja, caminhos de pastas em que ele está contido. Exemplo:
namespace Aula 09;

Caso tenham mais arquivos que formam o BackEnd de uma pagina WEB e possuem a mesma raiz, o namespace será o mesmo
*/

namespace Aula_09;

/* 
Interfaces: é um recursono qual garante que obrigatoriamente a classe tenha que construir algum metodo previamente determinado. Funciona como uma promessa ou contrato.
Exemplo: Configuraçmos uma interface "Pagamento" que faz com que qualquer classe que a implemente, tenha que obrigatoriamente construir o método "pagar()"
*/

interface Pagamento{ //Interface de contrato de pagamento
    public function pagar($valor);
    
}

class CartaoDeCredito implements Pagamento{ //Criando classe CartaodeCredito com implementação da interface Pagamento
    public function pagar($valor) { //Criando o método obrigtório pagar()
        echo "Pagemento realizado com o cartao de crédito, valor $valor\n";
    }
}

class PIX implements Pagamento { //Criando classe PIX com implementação da interface Pagamento
    public function pagar($valor) { //Criando o método obrigtório pagar()
        echo "Pagamento realizado com PIX, valor $valor\n";
    }
}

class DinheiroEspecie implements Pagamento { //Criando classe DinheiroEspecie com implementação da interface Pagamento
    public function pagar($valor) { //Criando o método obrigtório pagar()
        $avista = $valor * 0.9;
        echo "Pagamento realizado com dinheiro em espécie, valor $avista\n";

    }

}
/*
Testando Intefaces: deve-se criar objetos associados a cada classse que será testada. Exemplo:
*/


/*Neste exemplo criamos um objeto chamado "$cred" para a classe "CartaoDeCredito" e depois chamados o método "pagar()" para este objeto, passando R$250 como parâmetro.*/

$cred1 = new CartaoDeCredito(); // Criando objeto

echo "Testando cartão de crédito para pagamento: ".$cred1->pagar(250);


/* Crie objetos para as classes "PIX" e "DinheiroEspecie" e teste o método "pagar()" para cada um deles, passando como parametro os valores R$65 e R$320 respectivamente */

$pix1 = new PIX();
echo "Testando pagamento via PIX: ".$pix1->pagar(65);

$dinheiro1 = new DinheiroEspecie();
echo "Testando pagamento em dinheiro:".$dinheiro1->pagar(320). "\n";


// 1. Criando uma interface Simples

//Crie uma interface chamada Forma  que obrigue qualquer classe a ter um método calcularArea() e depois, crie as classes Quadrado e Circulo que implementem a interface
// AreaQuadrado: L * L
// AreaCirculo: 3.14 * R * R

interface Forma {
    public function calcularArea();
}

class Quadrado implements Forma {
    public $lado;

    public function __construct($lado) {
        $this -> lado = $lado;
    }
    public function calcularArea() {
         return $this -> lado * $this -> lado;
    }
}

class Circulo implements Forma{
    public $raio;

    public function __construct($raio) {
        $this -> raio = $raio;
    }

    public function calcularArea() {
        return pi() * ($this -> raio * $this -> raio);
    }
}

// Crie a classe Pentagono que implemente a interface Forma
// AreaPentagono: (5 * L) * A / 2

class Pentagono implements Forma {
    public $lado;
    public $apotema;
    public function __construct($lado, $apotema) {
        $this -> lado = $lado;
        $this -> apotema = $apotema;
    }
    public function calcularArea() {
        return (5 * $this -> lado) * $this -> apotema / 2;
    }
}

// Crie a classe Hexagono que implemente a interface Forma
// AreaHexagono: (6 * L) * A / 2

class Hexagono implements Forma {
    public $lado;
    public $apotema;
    public function __construct($lado, $apotema) {
        $this -> lado = $lado;
        $this -> apotema = $apotema;
    }
    public function calcularArea() {
        return (6 * $this -> lado) * $this -> apotema / 2;
    }
}



$quadrado1 = new Quadrado(readline("Digite o valor do lado do quadrado: "));
echo "Area Quadrado: "  .$quadrado1 -> calcularArea()."\n"; 

$circulo1 = new circulo(readline("Digite o valor do raio do circulo: "));
echo number_format("Area Circulo: " .$circulo1 -> calcularArea(). "\n");

$pentagono1 = new Pentagono(readline("Digite o valor do lado do pentagono: "), readline("Digite o valor da apotema do pentagono: "));
echo "Area Pentagono: " .$pentagono1 -> calcularArea(). "\n";

$hexagon1 = new Hexagono(readline("Digite o valor do lado do hexagono: "), readline("Digite o valor da apotema do hexagono: "));
echo "Area Hexagono: " .$hexagon1 -> calcularArea(). "\n";


?>