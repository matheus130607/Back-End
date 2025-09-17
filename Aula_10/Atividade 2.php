<?php
/*
Exercício 2 – Animais e Sons
Crie uma classe pai `Animal` com o método `fazerSom()`. Implemente as classes:
- `Cachorro` → "Au au!",
- `Gato` → "Miau!",
- `Vaca` → "Muuu!".
*/

class Animal{
    public function fazersom(){}
}

class Cachorro extends Animal {

    public function fazersom() {
        echo "Au au!";
    }
}

class Gato extends Animal {
    public function fazersom() {
        echo "Miau!";
    }
}
class Vaca extends Animal {
    public function fazersom() {
        echo"Muuuu !";
    }
}
?>