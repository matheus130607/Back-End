<?php

// Cenário 3 – Fantasia e Destino
// John Snow, Papai Smurf, Deadpool e Dexter estão em uma jornada. Durante o
// caminho, começa a chover, e eles precisam amar uns aos outros para superar as
// dificuldades. No fim da jornada, eles celebram ao comer juntos.

//Classes : Personagem, Jornada, Clima, Dificuldade, Refeicao
// Metodos: estar, começar, precisar, amar, superar, celebrar, comer

// Relacionando Classes (Associação, Composição e Agregação):
// Personagem e Jornada - Associação
// Personagem e Clima - Associação
// Personagem e Dificuldade - Associação
// Personagem e Refeição - Associação
// Jornada e Clima - Associação
// Jornada e Dificuldade - Associação
// Dificuldade e Refeição - Associação
//Dificuldade e Clima - Associação

class Personagem {
  private $nome_personagem;
    private $universo_personagem;
    private $poder_personagem;
    private $fraqueza_personagem;

    public function __construct($nome_personagem, $universo_personagem, $poder_personagem, $fraqueza_personagem) {
        $this->nome_personagem = $nome_personagem;
        $this->universo_personagem = $universo_personagem;
        $this->poder_personagem = $poder_personagem;
        $this->fraqueza_personagem = $fraqueza_personagem;
    }

    public function seguirJornada() {
        return "O personagem {$this->nome_personagem} está seguindo sua jornada.";
    }

    public function enfrentarDesafio($desafio) {
        return "O personagem {$this->nome_personagem} está enfrentando o desafio: {$desafio}.";
    }

    public function celebrar() {
        return "O personagem {$this->nome_personagem} está celebrando o fim da jornada.";
    }
}

class Jornada {
    private $local_jornada;
    private $clima_jornada;
    private $dificuldade_jornada;

    public function __construct($local_jornada, $clima_jornada, $dificuldade_jornada) {
        $this->local_jornada = $local_jornada;
        $this->clima_jornada = $clima_jornada;
        $this->dificuldade_jornada = $dificuldade_jornada;
    }

    public function avancar() {
        return "A jornada está avançando pelo local {$this->local_jornada} com clima {$this->clima_jornada} e dificuldade {$this->dificuldade_jornada}.";
    }
}

class Clima {
    private $tipo_clima;
    private $intensidade_clima;
    private $duracao_clima;

    public function __construct($tipo_clima, $intensidade_clima, $duracao_clima) {
        $this->tipo_clima = $tipo_clima;
        $this->intensidade_clima = $intensidade_clima;
        $this->duracao_clima = $duracao_clima;
    }

    public function mudarClima($novo_clima) {
        return "O clima mudou para {$novo_clima}.";
    }
}

class Dificuldade {
    private $tipo_dificuldade;
    private $nivel_dificuldade;
    private $solucao_dificuldade;

    public function __construct($tipo_dificuldade, $nivel_dificuldade, $solucao_dificuldade) {
        $this->tipo_dificuldade = $tipo_dificuldade;
        $this->nivel_dificuldade = $nivel_dificuldade;
        $this->solucao_dificuldade = $solucao_dificuldade;
    }
    
    public function superarDificuldade() {
        return "A dificuldade {$this->tipo_dificuldade} de nível {$this->nivel_dificuldade} foi superada com a solução: {$this->solucao_dificuldade}.";
    }
}

class Refeicao {
    private $tipo_refeicao;
    private $local_refeicao;
    private $comida_refeicao;

    public function __construct($tipo_refeicao, $local_refeicao, $comida_refeicao) {
        $this->tipo_refeicao = $tipo_refeicao;
        $this->local_refeicao = $local_refeicao;
        $this->comida_refeicao = $comida_refeicao;
    }

    public function servir() {
        return "A refeição do tipo {$this->tipo_refeicao} está sendo servida no local {$this->local_refeicao} com a comida: {$this->comida_refeicao}.";
    }
}



// Personagens
$john = new Personagem("John Snow", "Game of Thrones", "Liderança e espada", "Amor e honra");
$smurf = new Personagem("Papai Smurf", "Smurfs", "Sabedoria e magia", "Velhice");
$deadpool = new Personagem("Deadpool", "Marvel", "Regeneração e combate", "Humor e imprudência");
$dexter = new Personagem("Dexter", "Dexter", "Inteligência forense", "Impulso assassino");

// Jornada
$jornada = new Jornada("Floresta Sombria", "Chuva forte", "Emocional");

// Clima
$clima = new Clima("Chuva", "Forte", "3 horas");

// Dificuldade
$dificuldade = new Dificuldade("Tristeza e desunião", "Alta", "Amor e união");

// Refeição
$refeicao = new Refeicao("Celebração", "Taverna da Floresta", "Banquete com carnes, pães e vinho");

// História
echo $john->seguirJornada() . "<br>";
echo $smurf->seguirJornada() . "<br>";
echo $deadpool->seguirJornada() . "<br>";
echo $dexter->seguirJornada() . "<br><br>";

echo $jornada->avancar() . "<br>";
echo $clima->mudarClima("Tempestade com raios") . "<br><br>";

echo $john->enfrentarDesafio("Chuva intensa e caminho escuro") . "<br>";
echo $smurf->enfrentarDesafio("Medo de perder o grupo") . "<br>";
echo $deadpool->enfrentarDesafio("Ficar sério por 5 minutos") . "<br>";
echo $dexter->enfrentarDesafio("Controlar seus impulsos") . "<br><br>";

echo $dificuldade->superarDificuldade() . "<br><br>";

echo $john->celebrar() . "<br>";
echo $smurf->celebrar() . "<br>";
echo $deadpool->celebrar() . "<br>";
echo $dexter->celebrar() . "<br><br>";

echo $refeicao->servir() . "<br>";

?>


