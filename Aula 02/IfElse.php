<?php

$nome = "Enzo Enrico";
$presença = readline("Digite a presença em %: ");
$nota2 = readline("Digite a segunda nota: ");
$nota = readline("Digite a primeira nota: ");
$media = ($nota + $nota2) /2;

if ($presença >= 75 && $media >= 7 || $nome == "Enzo Enrico") {
    echo "$nome foi aprovado!, com a media: $media e com a presença: $presença";
} else {
    echo "$nome foi reprovado!, com a media: $media e com a presença: $presença";
}
    
?>