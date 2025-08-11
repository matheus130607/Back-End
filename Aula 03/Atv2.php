<?php

/* 2. Classificação de Nota
Leia uma nota de 0 a 10.
• Use if...elseif...else para classificar:
o Nota ≥ 9 → Excelente
o Nota ≥ 7 → Bom
o Nota < 7 → Reprovado */


$nota = readline("Digite uma nota de 0 a 10: ");

if ($nota >= 9) {
    echo "Exelente!!";
} elseif ($nota >= 7) {
    echo "Bom!!";
} elseif ($nota < 7) {
    echo "Reprovado!!";
} else {
    echo "Nota inválida!";
}
?>