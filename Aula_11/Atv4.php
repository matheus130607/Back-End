<?php


// Cenário 4 – Ciclo da Vida
// Na Terra, pessoas podem engravidar, nascer, crescer, fazer escolhas e até doar
// sangue para ajudar outras.

//  Classes: Pessoa, Escolha, BancoDeSangue
// Metodos: poder, engravidar, nascer, crescer, fazer, doar

// Relacionando Classes (Associação, Composição e Agregação):
// Pessoa e Escolha - Agregação
// Pessoa e BancoDeSangue - Associação
// Escolha e BancoDeSangue - Associação


class Pessoa {
    private $nome_pessoa;
    private $idade_pessoa;
    private $sexo_pessoa;
    private $nacionalidade_pessoa;

    public function __construct($nome_pessoa, $idade_pessoa, $sexo_pessoa, $nacionalidade_pessoa) {
        $this->nome_pessoa = $nome_pessoa;
        $this->idade_pessoa = $idade_pessoa;
        $this->sexo_pessoa = $sexo_pessoa;
        $this->nacionalidade_pessoa = $nacionalidade_pessoa;
    }

    public function engravidar() {
        return "A pessoa {$this->nome_pessoa} está engravidando.";
    }

    public function nascer() {
        return "A pessoa {$this->nome_pessoa} nasceu.";
    }

    public function crescer() {
        return "A pessoa {$this->nome_pessoa} está crescendo.";
    }

    public function fazerEscolha($escolha) {
        return "A pessoa {$this->nome_pessoa} fez a escolha: {$escolha}.";
    }

    public function doarSangue($banco) {
        return "A pessoa {$this->nome_pessoa} doou sangue para o banco de sangue: {$banco}.";
    }
}
class Escolha {
    private $tipo_escolha;
    private $consequencia_escolha;

    public function __construct($tipo_escolha, $consequencia_escolha) {
        $this->tipo_escolha = $tipo_escolha;
        $this->consequencia_escolha = $consequencia_escolha;
    }

    public function executarEscolha() {
        return "A escolha do tipo {$this->tipo_escolha} foi executada, resultando na consequência: {$this->consequencia_escolha}.";
    }
}

class BancoDeSangue {
    private $nome_banco;
    private $local_banco;
    private $capacidade_banco;

    public function __construct($nome_banco, $local_banco, $capacidade_banco) {
        $this->nome_banco = $nome_banco;
        $this->local_banco = $local_banco;
        $this->capacidade_banco = $capacidade_banco;
    }

    public function receberDoacao($pessoa) {
        return "O banco de sangue {$this->nome_banco} recebeu uma doação de sangue da pessoa: {$pessoa}.";
    }
}




// Pessoas
$maria = new Pessoa("Maria", 30, "Feminino", "Brasileira");
$joao = new Pessoa("João", 0, "Masculino", "Brasileiro");

// Escolhas
$escolha1 = new Escolha("Carreira", "Maria decidiu ser médica e ajudar pessoas.");
$escolha2 = new Escolha("Estudo", "João escolheu estudar programação.");

// Banco de sangue
$bancoSangue = new BancoDeSangue("Hemocentro Central", "São Paulo", "500 litros");

// Ciclo da vida acontecendo
echo $maria->engravidar() . "<br>";
echo $joao->nascer() . "<br>";
echo $joao->crescer() . "<br><br>";

echo $maria->fazerEscolha("Seguir carreira na medicina") . "<br>";
echo $escolha1->executarEscolha() . "<br><br>";

echo $joao->fazerEscolha("Estudar programação") . "<br>";
echo $escolha2->executarEscolha() . "<br><br>";

echo $maria->doarSangue("Hemocentro Central") . "<br>";
echo $bancoSangue->receberDoacao("Maria") . "<br>";

?>

