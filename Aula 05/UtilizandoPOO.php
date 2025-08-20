<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $Ndonos;

    public function __construct($marca, $modelo, $ano, $revisao, $Ndonos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->Ndonos = $Ndonos;
    }
}

$carro1 = new Carro("Porsche", "911", "2020", false, 3);
$carro2 = new Carro("Mitsubishi", "Lancer", "2022", true, 1);
$carro3 = new Carro("Toyota", "Hilux", 2025, false, 1);
$carro4 = new Carro("Fiat", "Uno-Escada", 1990, true, 1);
$carro5 = new Carro("Chevrolet","Camaro", 2015, true, 3 );
$carro6 = new Carro("Toyota", "Versa", 2020, true, 5);
?>