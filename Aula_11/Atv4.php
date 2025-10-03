<?php


// Cenário 4 – Ciclo da Vida
// Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar
// sangue para ajudar outras.

//  Classes: Pessoa, Terra
// Metodos: poder, engravidar, nascer, crescer, fazer, doar  

class Pessoa {
    private $nome_pessoa;
    private $idade_pessoa;
    private $sexo_pessoa;
    private $nacionalidade_pessoa;

    public function __construct($nome_pessoa, $idade_pessoa, $sexo_pessoa, $nacionalidade_pessoa) {
        $this->nome_pessoa = $nome_pessoa;
        $this->idade_pessoa = $idade_pessoa;
        $this->sexo_pessoa = $sexo_pessoa;
        $this->nacionalidade_pessoa = $nacionalidade_pessoa;
    }
}
class Terra {
    private $continente_terra;
    private $pais_terra;
    private $estado_terra;
    private $cidade_terra;

    public function __construct($continente_terra, $pais_terra, $estado_terra, $cidade_terra) {
        $this->continente_terra = $continente_terra;
        $this->pais_terra = $pais_terra;
        $this->estado_terra = $estado_terra;
        $this->cidade_terra = $cidade_terra;
    }
}

?>