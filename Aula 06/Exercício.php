<?php

class Moto {
    public $marca;
    public $modelo;
    public $cilindrada; 
    public $ano;

}
$Moto1 = new Moto();
$Moto1 -> marca = "Honda";
$Moto1 -> modelo = "CG 160";
$Moto1 -> cilindrada = 160;
$Moto1 -> ano = 2020;

$Moto2 = new Moto();
$Moto2 -> marca = "Yamaha";
$Moto2 -> modelo = "Fazer 250";
$Moto2 -> cilindrada = 250;
$Moto2 -> ano = 2015;

$Moto3 = new Moto();
$Moto3 -> marca= "Suzuki";
$Moto3 -> modelo = "V-Strom 650";
$Moto3 -> cilindrada = 650;
$Moto3 -> ano = 2024;

    /*
    public function __construct($dia, $mes, $ano) {
        $this -> dia = $dia;
        $this -> mes = $mes;
        $this -> ano = $ano;
    }
    public function __construct($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo) {
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> cpf = $cpf;
        $this -> telefone = $telefone;
        $this -> endereco = $endereco;
        $this -> estado_civil = $estado_civil;
        $this -> sexo = $sexo;
    }
    public function __construct($marca, $nome, $categoria, $data_fabricacao, $data_venda) {
        $this -> marca = $marca;
        $this -> nome = $nome;
        $this -> categoria = $categoria;
        $this -> data_fabricacao = $data_fabricacao;
        $this -> data_venda = $data_venda;
    }
    */
?>

