<?php

// Cenário 3 – Fantasia e Destino
// John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
// caminho, começa a chover, e eles precisam amar uns aos outros para superar as
// dificuldades. No fim da jornada, eles celebram ao comer juntos.

//Classes : Personagem
// Metodos: estar, começar, precisar, amar, superar, celebrar, comer
class Personagem {
  private $nome_personagem;
    private $universo_personagem;
    private $poder_personagem;
    private $fraqueza_personagem;

    public function __construct($nome_personagem, $universo_personagem, $poder_personagem, $fraqueza_personagem) {
        $this->nome_personagem = $nome_personagem;
        $this->universo_personagem = $universo_personagem;
        $this->poder_personagem = $poder_personagem;
        $this->fraqueza_personagem = $fraqueza_personagem;
    }
}



?>