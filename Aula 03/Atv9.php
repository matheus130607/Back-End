<?php

/* 9. Classificação de Temperatura
Peça a temperatura e use if...else para exibir:
• Menor que 15°C → "Frio"
• Entre 15°C e 25°C → "Agradável"
• Maior que 25°C → "Quente" */


$temp = readline("Digite a temperatura em °C: ");
if ($temp < 15) {
    echo "Está frio.";
} elseif ($temp >=15 && $temp <= 25) {
    echo "Está agradável.";
} else { 
    echo "Está quente.";
}
?>