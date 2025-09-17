<?php
/*
Exercício 4 – Notificações
Crie duas classes:
- `Email` com o método `enviar()`, que retorna "Enviando email...",
- `Sms` com o método `enviar()`, que retorna "Enviando SMS...".
Depois crie uma função `notificar($meio)` que aceite qualquer objeto com `enviar()` e faça a
chamada. Teste com ambos os objetos.
*/

class Email {
    public function enviar() {
        echo"Enviando email...";
    }
}

class Sms  extends email{
    public function enviar() {
        echo "Enviando SMS...";
    }
}

function notificar($meio) {
    echo $meio ->enviar(). PHP_EOL;
}
$email = new Email();
$sms = new Sms();

notificar($email); 
notificar($sms); 

?>