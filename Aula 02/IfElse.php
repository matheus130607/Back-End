<?php

$nome = "Enzo Enrico";
$presença = 75;
$nota2 = 0;
$nota = 7;
$media = ($nota + $nota2) /2;

if ($presença >= 75 && $media >= 7 || $nome == "Enzo Enrico") {
    echo "$nome foi aprovado!, com a media: $media e com a presença: $presença";
} else {
    echo "$nome foi reprovado!, com a media: $media e com a presença: $presença";
}
    
?>