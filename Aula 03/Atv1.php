<?php 

/* 1. Verificação de Idade
Peça para o usuário digitar sua idade.
• Use if...else para verificar:
o Maior de idade (18 anos ou mais)
o Menor de idade (menos de 18 anos) */

$idade = readline("Digite sua idade: ");
 
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

?>