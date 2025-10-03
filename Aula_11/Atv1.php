<?php


// Cenário 1 – Viagem pelo Mundo
// Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
// Terra, eles poderão comer comidas típicas e nadar em rios ou praias.

// Classes: Turistas, Local, Alimentação, ponto turistico
// Metodos: visitar, poder, comer, nadar


class Turistas {
    private $nome_turista;
    private $idade_turista;
    private $cpf_turista;
    private $nacionalidade_turista;

    public function __construct($nome_turista, $idade_turista, $cpf_turista, $nacionalidade_turista) {
        $this->nome_turista = $nome_turista;
        $this->idade_turista = $idade_turista;
        $this->cpf_turista = $cpf_turista;
        $this->nacionalidade_turista = $nacionalidade_turista;
    }
}


class Local {
    private $planeta_local;
  private $pais_local;
  private $estado_local;
  private $cidade_local;
private $ponto_turistico_local;

    public function __construct($pais_local, $estado_local, $cidade_local, $ponto_turistico_local, $planeta_local = "Terra") {
        $this->pais_local = $pais_local;
        $this->estado_local = $estado_local;
        $this->cidade_local = $cidade_local;
        $this->ponto_turistico_local = $ponto_turistico_local;
        $this->planeta_local = $planeta_local;
    } 
}



?>