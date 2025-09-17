<?php

/*
Exercício 1 – Formas Geométricas
Crie uma interface `Forma` com o método `calcularArea()`. Implemente as classes:
- `Quadrado` (lado),
- `Retangulo` (base e altura),
- `Circulo` (raio).
*/
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
$quadrado1 = new Quadrado(readline("Digite o valor do lado do quadrado: "));
echo "Area Quadrado: "  .$quadrado1 -> calcularArea()."\n"; 

$circulo1 = new circulo(readline("Digite o valor do raio do circulo: "));
echo "Area Circulo: ". number_format( $circulo1 -> calcularArea(), 2). "\n";

?>