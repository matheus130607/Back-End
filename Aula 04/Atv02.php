<?php

/*📌 Exercício 2 – Função que verifica se o carro é seminovo
Crie uma função ehSeminovo($ano) que receba o ano de fabricação e retorne true se o
carro tiver até 3 anos de uso e false caso contrário.
Teste a função com os carros fornecidos.*/


$marca = "Honda";
$modelo = "Civic";
$revisao = true;
$Ndonos = 2;

function ehSeminovo($ano) {
    $ano_atual = date("Y");
    $ano_fabricação = 2012;
    if ($ano_atual - $ano_fabricação <= 3) {
        echo "O carro é seminovo.";
        return true;
    } else {
        echo "o carro não é seminovo.";
        return false;
    }

}
$novo = ehSeminovo($ano);

?>