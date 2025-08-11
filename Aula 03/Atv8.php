<?php

/* 8. Tabuada
Solicite ao usuário um número e use for para exibir sua tabuada de 1 a 10. */

$numero = readline("Digite um número: ");
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>