<?php

// Exercício 5:
// Crie um método para a classe 'Cachorro' chamado de 'latir', no qual exibe uma
// mensagem "O cachorro $nome está latindo!"

// Exercício 6:
// Crie outro método para a classe 'Cachorro' chamado de 'marcar território', no qual
// exibe uma mensagem "O cachorro $nome da raça $raça está marcando território".

class Cachorro{
    public $nome;
    public $raca;
    
    public function latir($nome) {
        echo "O cachorro $nome está latindo!";
    }

    public function marcarTerritorio($nome, $raca) {
        echo "O cachorro $nome da raça $raca está marcando território";
    }
}


// Exercício 7:
// Crie um método para a classe 'Usuários' chamado de 'Testando Reservista' no qual
// testa se o usuário é homem e caso sim exiba uma mensagem "Apresente seu
// certificado de reservista do tiro de guerra!", caso não, exiba uma mensagem "Tudo
// certo".

// Exercício 8:
// Crie um método para a classe 'Usuários' chamado de 'Casamento' que teste se o
// estado civil é igual a 'Casado' e caso sim exiba a mensagem "Parabéns pelo seu
// casamento de $anos_casado anos!" e caso não, exiba uma mensagem de "oloco". O
// valor de anos de casamento será informado na hora de chamar o método para o
// objeto em específico.

class Usuários {
    public $nome;
    public $sexo;
    public $estado_civil;
    public $anos_casado;

    public function testandoReservista ($nome, $sexo) {
        if ($sexo == "Maculino" ) {
            echo "Apresente seu certificado de reservista do tiro de guerra!";
        } else {
            echo "Tudo certo";
        }
    }

    public function Casamento($estado_civil, $anos_casado) {
        if ($estado_civil == "Casado") {
            echo "Parabéns pelo seu casamento de $anos_casado anos!";
        } else {
            echo "Oloco!";
        }
    }
}
?>