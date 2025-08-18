<?php

/*📌 Exercício 4 – Função que calcula valor estimado
Crie uma função calcularValor($marca, $ano, $Ndonos) que estime o preço do carro usando
regras simples, por exemplo:
• Carros da BMW e Porsche têm preço base de R$ 300.000
• Nissan: R$ 70.000
• BYD: R$ 150.000
• A cada dono adicional além do primeiro, o valor cai 5%
• Para cada ano de uso, o valor cai R$ 3.000
A função deve retornar o valor estimado e você deve imprimir o resultado para cada
carro.*/


$marca = "Nissan";
$modelo = "gt-r";
$ano = 2022;
$revisao = true;
$Ndonos = 2;


function novoDono($donos) {
    return $donos + 1;

}
$Ndonos = novoDono($Ndonos); // Resultado: 3
function calcularValor($marca, $ano, $Ndonos) {
    
   $usado =  $Ndonos * 0.05;
    $ano_atual = date("Y");
    $anos_uso = ($ano - $ano_atual) * 3000;
    
    if ($marca == "Nissan") {
            $preco_base = 70000;
            return $preco_base - ($preco_base * $usado) - $anos_uso;
        } else if ($marca == "BMW" || $marca == "Porsche") {
            $preco_base = 300000;
            return $preco_base - ($preco_base * $usado) - $anos_uso;
        } else if ($marca == "BYD") {
            $preco_base = 150000;
            return $preco_base - ($preco_base * $usado) - $anos_uso;
        }
    }
$preco = calcularValor($marca, $ano, $Ndonos);
echo "O valor estimado do carro $marca $modelo, ano $ano, é R$ $preco.";

?>