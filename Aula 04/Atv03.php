<?php

/*📌 Exercício 3 – Função que verifica necessidade de revisão
Crie uma função precisaRevisao($revisao, $ano) que retorne "Precisa de revisão" se $revisao
for false e o carro for anterior a 2022. Caso contrário, retorne "Revisão em dia".*/


$marca = "Honda";
$modelo = "Civic";
$ano = 2016;
$revisao = true;
$Ndonos = 2;

function precisaRevisao($revisao, $ano) {
    if ($revisao == false && $ano < 2022) {
        echo "Precisa de revisão";
        return true;
    } else if ($revisao == true || $ano >= 2022) {
        echo "Revisão em dia";
        return false;

    }
}
$rev = precisaRevisao($revisao, $ano);
?>