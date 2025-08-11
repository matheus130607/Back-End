<?php

/* 6. Contagem Regressiva
Peça um número inicial e exiba a contagem regressiva até 1 usando for. */

$num = readline("Digite um número inicial: ");
for ($num; $num >=1; $num--) {
    echo "Numero: $num\n";
}
?>