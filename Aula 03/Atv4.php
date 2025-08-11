<?php

/* 4. Calculadora Simples
Peça dois números e uma operação (+, -, *, /).
• Use switch...case para realizar a operação e exibir o resultado. */


$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$operacao = readline("Digite a operação (+, -, *, /): ");

switch($operacao) {
    case "+":
        $resultado = $num1 + $num2;
        echo "Resultado: $resultado";
        break;
    case "-":
        $resultado = $num1 - $num2;
        echo "Resultado: $resultado";
        break;
    case "/":
        $resultado = $num1 / $num2;
        echo "Resultado: $resultado";
        break;
    case "*":
        $resultado = $num1 * $num2;
        echo "Resultado: $resultado";
        break;
        default:
        echo "Operação inválida!";
        break;
}

?>