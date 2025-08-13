<?php

/* 10. Menu Interativo
Mostre no console:
1 - Olá
2 - Data Atual
3 - Sair
• Use switch...case para executar a opção escolhida pelo usuário.
• O programa só termina quando o usuário escolher "3 - Sair".
• Use for para repetir o menu um número fixo de vezes, por exemplo, 5 vezes. */



for ($i = 1;$i  <= 5; $i++) {
    
$opcao = readline("Escolha uma opção:\n 1 - Olá\n 2 - Data Atual\n 3 - Sair");
switch($opcao) {
    case "1":
        echo"Olá! \n";
        break;
    case "2":
        echo date("d/m/y") . "\n";
        break;
    case "3":
        $i = 6;
    echo "Saindo \n";
        break;
    default:
    echo "Opção inválida. Por favor, escolha 1, 2 ou 3.\n";
        break;
    }
    
}

?>