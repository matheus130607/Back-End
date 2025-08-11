<?php

/* 3. Dia da Semana
Solicite ao usuário um número de 1 a 7 e exiba o dia correspondente usando
switch...case.
• 1 → Domingo
• 2 → Segunda
• ...
• 7 → Sábado */


$dia = readline("Digite um número de 1 a 7: ");

switch($dia) {
    case 1: 
        echo "Domingo";
        break;
    case 2: 
        echo "Segunda-feira";
        break;
    case 3: 
        echo "Terça-feira";
        break;
    case 4: 
        echo "Quarta-feira";
        break;
    case 5: 
        echo "Quinta-feira";
        break;
    case 6: 
        echo "Sexta-feira";
        break;
    case 7: 
        echo "Sábado";
        break;
        default:
        echo "Número inválido. Por favor, insira um número de 1 a 7.";
        break;
}

?>