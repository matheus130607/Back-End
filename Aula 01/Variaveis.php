<?php
//Desenvolva um código com a mesma estrutura que o abaixo, podrem com seus dados.

echo"Boa Tarde! \n";
$nome = "Matheus Malaman";
$idade = "18";
$ano_atual = "2025";

$data_nascimento = $ano_atual - $idade;
echo $nome, " você nasceu em: ", $data_nascimento;



/*1. Crie uma página PHP com duas variáveis $nome e $idade. Atribua a essas
variáveis o seu nome e a sua idade. Utilize um comando para escrever na tela a
mensagem:
“Eu sou NOME e tenho XX anos”.
*/

$nome = "Matheus Malaman";
$idade = "18";

echo "\nEu sou ", $nome, " e tenho ", $idade, " anos." ;

/*2. Dado uma frase “Programação em php.” transformá‐la em maiúscula, imprima,
depois em minúscula e imprima de novo.*/

$frase = "\nProgramação em php.";
echo strtoupper($frase);
echo strtolower($frase);

/*Numa dada frase “O PHP foi criado em mil novecentos e noventa e cinco”.
- Trocar o “O” (letra) por “0”(zero), o “a” por “4” e o “i” por “1”.*/

$frase2 = "\no PHP foi criado em mil novecentos e noventa e cinco.";
$frase2 = str_replace("o", "0", $frase2);
$frase2 = str_replace("a", "4", $frase2);
$frase2 = str_replace("i", "1", $frase2);
$frase2 = str_replace(['o','a','i',],['0','4','1'], $frase2);
echo $frase2;
?>

