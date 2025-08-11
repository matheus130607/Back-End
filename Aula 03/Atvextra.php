<?php

$num1 = readline("Digite o primeiro valor: ");
$num2 = readline("Digite o segundo valor: ");
$tipo1 = gettype($num1);
$tipo2 = gettype($num2);

if ($tipo1 == $tipo2) {
    echo"Variáveis de tipos $tipo1 e $tipo2 são iguais.";
} else {
    echo "ERRO! as variáveis $tipo1 e $tipo2 são diferentes.";
}

?>