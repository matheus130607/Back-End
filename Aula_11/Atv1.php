<?php


// Cenário 1 – Viagem pelo Mundo
// Um grupo de turistas vai visitar o Japão, o Brasil e o Acre. Em cada lugar da
// Terra, eles poderão comer comidas típicas e nadar em rios ou praias.

// Classes: Turistas, Local, Alimentacao, Ponto_turistico
// Metodos: visitar, poder, comer, nadar

// Relacionando Classes (Associação, Composição e Agregação):
// Turista e Local - Associação
// Turista e Alimentação - Associação
// Turista e ponto turístico - Composição
// local e ponto turistico - Agregação
// ponto turistico e alimentação - Associação



class Turistas {
    private $nome_turista;
    private $idade_turista;
    private $cpf_turista;
    private $nacionalidade_turista;

    public function __construct($nome_turista, $idade_turista, $cpf_turista, $nacionalidade_turista) {
        $this->nome_turista = $nome_turista;
        $this->idade_turista = $idade_turista;
        $this->cpf_turista = $cpf_turista;
        $this->nacionalidade_turista = $nacionalidade_turista;
    }

    public function visitar() {
        return "O turista {$this->nome_turista} está visitando um novo local.";
    }

    public function comer() {
        return "O turista {$this->nome_turista} está comendo uma comida típica.";
    }

    public function nadar() {
        return "O turista {$this->nome_turista} está nadando em um rio ou praia.";

    }
}


class Local {
    private $planeta_local;
  private $pais_local;
  private $estado_local;
  private $cidade_local;
private $ponto_turistico_local;

    public function __construct($pais_local, $estado_local, $cidade_local, $ponto_turistico_local, $planeta_local = "Terra") {
        $this->pais_local = $pais_local;
        $this->estado_local = $estado_local;
        $this->cidade_local = $cidade_local;
        $this->ponto_turistico_local = $ponto_turistico_local;
        $this->planeta_local = $planeta_local;
    } 

    public function informarAtividades() { 
        return "No local {$this->cidade_local}, você pode visitar o ponto turístico {$this->ponto_turistico_local}, comer comidas típicas e nadar em rios ou praias.";
    }
}

class Alimentacao {
    private $tipo_comida;
    private $nome_comida;
    private $ingredientes_comida;

    public function __construct($tipo_comida, $nome_comida, $ingredientes_comida) {
        $this->tipo_comida = $tipo_comida;
        $this->nome_comida = $nome_comida;
        $this->ingredientes_comida = $ingredientes_comida;
    }

    public function getDescricao() { 
        return "A comida {$this->nome_comida} é do tipo {$this->tipo_comida} e é feita com os seguintes ingredientes: {$this->ingredientes_comida}.";

    }
}

class Ponto_turistico {
    private $nome_ponto;
    private $tipo_ponto;
    private $localizacao_ponto;

    public function __construct($nome_ponto, $tipo_ponto, $localizacao_ponto) {
        $this->nome_ponto = $nome_ponto;
        $this->tipo_ponto = $tipo_ponto;
        $this->localizacao_ponto = $localizacao_ponto;
    }

    public function getTipo() { 
        return "O ponto turístico {$this->nome_ponto} é do tipo {$this->tipo_ponto} e está localizado em {$this->localizacao_ponto}.";

    }
}



// Objetos de Turistas
$turista1 = new Turistas("Ana Silva", 28, "123.456.789-00", "Brasileira");
$turista2 = new Turistas("John Smith", 35, "987.654.321-00", "Americano");

// Objetos de Locais
$localJapao = new Local("Japão", "Honshu", "Tóquio", "Templo Senso-ji");
$localBrasil = new Local("Brasil", "Rio de Janeiro", "Rio de Janeiro", "Cristo Redentor");
$localAcre = new Local("Brasil", "Acre", "Rio Branco", "Parque da Maternidade");

// Objetos de Alimentação
$comidaJapao = new Alimentacao("Tradicional", "Sushi", "Arroz, peixe cru, algas");
$comidaBrasil = new Alimentacao("Tradicional", "Feijoada", "Feijão preto, carne de porco, arroz");
$comidaAcre = new Alimentacao("Regional", "Tacacá", "Tucupi, goma de mandioca, camarão");

// Objetos de Pontos Turísticos
$pontoJapao = new Ponto_turistico("Monte Fuji", "Montanha", "Honshu, Japão");
$pontoBrasil = new Ponto_turistico("Praia de Copacabana", "Praia", "Rio de Janeiro, Brasil");
$pontoAcre = new Ponto_turistico("Museu da Borracha", "Histórico", "Rio Branco, Acre");

// Demonstração do cenário
echo $turista1->visitar() .PHP_EOL;
echo $localJapao->informarAtividades() .PHP_EOL;
echo $comidaJapao->getDescricao() .PHP_EOL;
echo $pontoJapao->getTipo() .PHP_EOL;

echo $turista2->comer() .PHP_EOL;
echo $localBrasil->informarAtividades() .PHP_EOL;
echo $comidaBrasil->getDescricao() .PHP_EOL;
echo $pontoBrasil->getTipo() .PHP_EOL;

echo $turista1->nadar() .PHP_EOL;
echo $localAcre->informarAtividades() .PHP_EOL;
echo $comidaAcre->getDescricao() .PHP_EOL;
echo $pontoAcre->getTipo() .PHP_EOL;



?>


