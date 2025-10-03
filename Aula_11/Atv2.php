<?php

// Cenário 2 – Heróis e Personagens
// O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
// fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
// brinquedos às crianças.

// Classes: Heroi, Locais
// Metodos: precisar, fazer, ir, doar
class Heroi {
   private $nome_heroi;
   private $poder_heroi;
   private $fraqueza_heroi;
    private $universo_heroi;

    public function __construct($nome_heroi, $poder_heroi, $fraqueza_heroi, $universo_heroi) {
        $this->nome_heroi = $nome_heroi;
        $this->poder_heroi = $poder_heroi;
        $this->fraqueza_heroi = $fraqueza_heroi;
        $this->universo_heroi = $universo_heroi;
    }
}

class Locais {
    private $nome_local;
    private $tipo_local;
    private $endereco_local;
    private $cidade_local;
    private $estado_local;
    private $pais_local;

    public function __construct($nome_local, $tipo_local, $endereco_local, $cidade_local, $estado_local, $pais_local) {
        $this->nome_local = $nome_local;
        $this->tipo_local = $tipo_local;
        $this->endereco_local = $endereco_local;
        $this->cidade_local = $cidade_local;
        $this->estado_local = $estado_local;
        $this->pais_local = $pais_local;
    }
}

class Kids {
    private $nome_kid;
    private $idade_kid;
    private $brinquedo_kid;

    public function __construct($nome_kid, $idade_kid, $brinquedo_kid) {
        $this->nome_kid = $nome_kid;
        $this->idade_kid = $idade_kid;
        $this->brinquedo_kid = $brinquedo_kid;
    }
}

?>