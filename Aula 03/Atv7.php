<?php

/* 7. Números Pares
Peça um número final e use for para exibir todos os números pares de 0 até esse
número. */

$num = readline("Digite um número final: ");
for ($i = 0; $i <= $num; $i += 2) {
    echo "Número par: $i\n";
}
?>