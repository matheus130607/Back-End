<?php
/*
Exercício 5 – Calculadora com Sobrecarga Simulada
Crie uma classe `Calculadora` com o método `somar()`.
- Se receber 2 números, retorna a soma dos dois.
- Se receber 3 números, retorna a soma dos três.
*/

class Calculadora {
    public function somar($numeros){
 $quantidade = count($numeros);

 if ($quantidade == 2) {
    return $numeros[0] + $numeros[1];
 } elseif ($quantidade == 3) {
    return $numeros[0] + $numeros[1] + $numeros [2];
 } else {
    echo "Quantidade de numeros invalidos";
 }

    }
}
$calc = new Calculadora();

echo $calc->somar(10, 20) . PHP_EOL;       
echo $calc->somar(5, 15, 25) . PHP_EOL;    
echo $calc->somar(1) . PHP_EOL;
?>