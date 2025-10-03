<?php

// Cenário 2 – Heróis e Personagens
// O Batman, o Superman e o Homem-Aranha estão em uma missão. Eles precisam
// fazer treinamentos especiais no Cotil e, depois, irão ao shopping para doar
// brinquedos às crianças.

// Classes: Heroi, Locais, Missao, Shopping
// Metodos: precisar, fazer, ir, doar
class Heroi {
   private $nome_heroi;
   private $poder_heroi;
   private $fraqueza_heroi;
    private $universo_heroi;

    public function __construct($nome_heroi, $poder_heroi, $fraqueza_heroi, $universo_heroi) {
        $this->nome_heroi = $nome_heroi;
        $this->poder_heroi = $poder_heroi;
        $this->fraqueza_heroi = $fraqueza_heroi;
        $this->universo_heroi = $universo_heroi;
    }

    public function treinar() {
        return "O herói {$this->nome_heroi} está treinando seus poderes.";
    }

    public function realizarMissao($missao) {
        return "O herói {$this->nome_heroi} está realizando a missão: {$missao}.";
    }

    public function doarBrinquedo($crianca, $brinquedo) {
        return "O herói {$this->nome_heroi} doou o brinquedo {$brinquedo} para a criança {$crianca}.";
    }
}

class Locais {
    private $nome_local;
    private $tipo_local;
    private $endereco_local;
    private $cidade_local;
    private $estado_local;
    private $pais_local;

    public function __construct($nome_local, $tipo_local, $endereco_local, $cidade_local, $estado_local, $pais_local) {
        $this->nome_local = $nome_local;
        $this->tipo_local = $tipo_local;
        $this->endereco_local = $endereco_local;
        $this->cidade_local = $cidade_local;
        $this->estado_local = $estado_local;
        $this->pais_local = $pais_local;
    }

    public function localTreinamento() {
        return "O local de treinamento é {$this->nome_local}, que é um {$this->tipo_local} localizado em {$this->endereco_local}, {$this->cidade_local}, {$this->estado_local}, {$this->pais_local}.";
    }
}

class Missao {
    private $objetivo_missao;
    private $local_missao;
    private $herois_missao;

    public function __construct($objetivo_missao, $local_missao, $herois_missao) {
        $this->objetivo_missao = $objetivo_missao;
        $this->local_missao = $local_missao;
        $this->herois_missao = $herois_missao;
    }

    public function iniciar() {
        return "A missão é {$this->objetivo_missao} e será realizada em {$this->local_missao} pelos heróis: {$this->herois_missao}.";
    }

    public function finalizar() {
        return "A missão {$this->objetivo_missao} foi concluída com sucesso!";
    }
}

class Shopping {
    private $nome_shopping;
    private $endereco_shopping;
    private $cidade_shopping;
    private $estado_shopping;
    private $pais_shopping;

    public function __construct($nome_shopping, $endereco_shopping, $cidade_shopping, $estado_shopping, $pais_shopping) {
        $this->nome_shopping = $nome_shopping;
        $this->endereco_shopping = $endereco_shopping;
        $this->cidade_shopping = $cidade_shopping;
        $this->estado_shopping = $estado_shopping;
        $this->pais_shopping = $pais_shopping;
    }

    public function receberDoacao() {
        return "O shopping {$this->nome_shopping} está recebendo doações de brinquedos.";
    }
}

class Brinquedo {
    private $nome_brinquedo;
    private $tipo_brinquedo;
    private $faixa_etaria_brinquedo;

    public function __construct($nome_brinquedo, $tipo_brinquedo, $faixa_etaria_brinquedo) {
        $this->nome_brinquedo = $nome_brinquedo;
        $this->tipo_brinquedo = $tipo_brinquedo;
        $this->faixa_etaria_brinquedo = $faixa_etaria_brinquedo;
    }

    public function getTipo() {
        return "O brinquedo {$this->nome_brinquedo} é do tipo {$this->tipo_brinquedo} e é adequado para a faixa etária {$this->faixa_etaria_brinquedo}.";
    }
}

class Crianca {
    private $nome_crianca;
    private $idade_crianca;
    private $brinquedo_favorito_crianca;

    public function __construct($nome_crianca, $idade_crianca, $brinquedo_favorito_crianca) {
        $this->nome_crianca = $nome_crianca;
        $this->idade_crianca = $idade_crianca;
        $this->brinquedo_favorito_crianca = $brinquedo_favorito_crianca;
    }
    public function receberBrinquedo($brinquedo) {
        return "A criança {$this->nome_crianca} recebeu o brinquedo {$brinquedo}.";
    }
}


// Objetos dos Heróis
$batman = new Heroi("Batman", "Inteligência, artes marciais e tecnologia", "Nenhum poder sobre-humano", "DC");
$superman = new Heroi("Superman", "Superforça, visão de calor, voo", "Kryptonita", "DC");
$homemAranha = new Heroi("Homem-Aranha", "Força, agilidade, teias", "Responsabilidade pessoal", "Marvel");

// Objetos de Locais
$cotil = new Locais("COTIL", "Instituto de Ensino", "Rua Paschoal Marmo, 1888", "Limeira", "São Paulo", "Brasil");
$shopping = new Shopping("Shopping Center Limeira", "Av. Carlos Kuntz Busch, 800", "Limeira", "São Paulo", "Brasil");

// Missão
$missao = new Missao(
    "Treinar no COTIL e depois doar brinquedos às crianças",
    "COTIL e Shopping",
    "Batman, Superman e Homem-Aranha"
);

// Brinquedos
$bola = new Brinquedo("Bola de futebol", "Esporte", "6+");
$boneca = new Brinquedo("Boneca de pano", "Brinquedo clássico", "3+");
$lego = new Brinquedo("Lego", "Blocos de montar", "5+");

// Crianças
$crianca1 = new Crianca("Maria", 7, "Boneca");
$crianca2 = new Crianca("João", 10, "Bola de futebol");
$crianca3 = new Crianca("Pedro", 6, "Lego");

// Demonstração do cenário
echo $missao->iniciar() . "<br><br>";

echo $batman->treinar() . "<br>";
echo $superman->treinar() . "<br>";
echo $homemAranha->treinar() . "<br><br>";

echo $cotil->localTreinamento() . "<br><br>";

echo $batman->realizarMissao("Treinamento no Cotil") . "<br>";
echo $superman->realizarMissao("Treinamento no Cotil") . "<br>";
echo $homemAranha->realizarMissao("Treinamento no Cotil") . "<br><br>";

echo $batman->doarBrinquedo("Maria", "Boneca de pano") . "<br>";
echo $superman->doarBrinquedo("João", "Bola de futebol") . "<br>";
echo $homemAranha->doarBrinquedo("Pedro", "Lego") . "<br><br>";

echo $missao->finalizar() . "<br>";

?>

