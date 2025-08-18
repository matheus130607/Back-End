<?php

/*📌 Exercício 1 – Função para exibir dados do carro
Crie uma função exibirCarro($modelo, $marca, $ano, $revisao, $Ndonos) que receba como
parâmetros os dados de um carro e exiba uma mensagem no seguinte formato:
O carro Nissan Versa, ano 2020, já passou por revisão: Sim, número de donos: 2*/

$marca = "Honda";
$modelo = "Civic";
$ano = 2016;
$revisao = true;
$Ndonos = 2;

function exibirCarro($revisoes) {


   if ($revisoes == true) {
    $rev = "sim";
    return $rev;
     
   } elseif ($revisoes == false) {
     $rev = "não";
     return $rev;
   } else {
    echo "Opção inválida!!";
   } 
}
$revisao = exibirCarro($revisao);
echo"O carro $marca $modelo, ano $ano, já passou por revisão: $revisao, número de donos: $Ndonos";
?>