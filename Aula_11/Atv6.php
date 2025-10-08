<?php

// Cenário 6 – Leia o enunciado do problema
// "Um sistema de cinema deve permitir que clientes comprem ingressos para
// sessões de filmes."

// Classes: SistemaDeCinema, Filmes, Clientes, Ingressos, Sessoes_de_filmes
// Metodos: getDetalhes, comprarIngresso, venderIngresso, exibirSessoes, reservarAssento, liberarAssento, validar

// Relacionando Classes (Associação, Composição e Agregação):
//SistemaDeCinema e Filmes - Composição
//SistemaDeCinema e Clientes - Agregação
// Filme e Sessões_de_filmes - Composição
// Sessões_de_filmes e Ingressos - Agregação
// Filme e Ingressos - Associação
/// Filme e Clientes - Associação

class SistemaDeCinema {
    private $nome_sistema;
    private $versao_sistema;
    private $localizacao_sistema;

    public function __construct($nome_sistema, $versao_sistema, $localizacao_sistema) {
        $this->nome_sistema = $nome_sistema;
        $this->versao_sistema = $versao_sistema;
        $this->localizacao_sistema = $localizacao_sistema;
    }

   public function exibirSessoes() {
        return "Exibindo sessões de filmes disponíveis.";
    }

    public function venderIngresso($cliente, $ingresso) {
        return "O cliente {$cliente} comprou o ingresso: {$ingresso}.";
    }
}

class clientes {
    private $nome_cliente;
    private $idade_cliente;
    private $cpf_cliente;
    private $email_cliente;

    public function __construct($nome_cliente, $idade_cliente, $cpf_cliente, $email_cliente) {
        $this->nome_cliente = $nome_cliente;
        $this->idade_cliente = $idade_cliente;
        $this->cpf_cliente = $cpf_cliente;
        $this->email_cliente = $email_cliente;
    }

    public function comprarIngresso($cliente, $ingresso) {
        return "O cliente {$cliente} comprou o ingresso: {$ingresso}.";
    }
}

class Filmes {
    private $titulo_filme;
    private $diretor_filme;
    private $genero_filme;
    private $duracao_filme;

    public function __construct($titulo_filme, $diretor_filme, $genero_filme, $duracao_filme) {
        $this->titulo_filme = $titulo_filme;
        $this->diretor_filme = $diretor_filme;
        $this->genero_filme = $genero_filme;
        $this->duracao_filme = $duracao_filme;
    }

    public function getDetalhes() {
        return "Filme: {$this->titulo_filme}, Diretor: {$this->diretor_filme}, Gênero: {$this->genero_filme}, Duração: {$this->duracao_filme} minutos.";
    }
}

class ingressos {
    private $tipo_ingresso;
    private $preco_ingresso;
    private $sessao_filme;

    public function __construct($tipo_ingresso, $preco_ingresso, $sessao_filme) {
        $this->tipo_ingresso = $tipo_ingresso;
        $this->preco_ingresso = $preco_ingresso;
        $this->sessao_filme = $sessao_filme;
    }

    public function validar() {
        return "Ingresso do tipo {$this->tipo_ingresso} validado para a sessão: {$this->sessao_filme}.";
    }
}

class sessoes_de_filmes {
    private $nome_filme;
    private $horario_sessao;
    private $sala_sessao;
    private $data_sessao;

    public function __construct($nome_filme, $horario_sessao, $sala_sessao, $data_sessao) {
        $this->nome_filme = $nome_filme;
        $this->horario_sessao = $horario_sessao;
        $this->sala_sessao = $sala_sessao;
        $this->data_sessao = $data_sessao;
    }

    public function reservarAssento($assento) {
        return "Assento {$assento} reservado para a sessão do filme {$this->nome_filme} no dia {$this->data_sessao}.";
    }

    public function liberarAssento($assento) {
        return "Assento {$assento} liberado para a sessão do filme {$this->nome_filme} no dia {$this->data_sessao}.";
    }
}

// Objeto do sistema
$sistema = new SistemaDeCinema("CineMaster", "1.0", "São Paulo");
echo $sistema->exibirSessoes() . PHP_EOL;

// Objeto de filme
$filme = new Filmes("Interestelar", "Christopher Nolan", "Ficção Científica", 169);
echo $filme->getDetalhes() . PHP_EOL;

// Objeto de cliente
$cliente = new Clientes("Maria Souza", 28, "123.456.789-00", "maria@gmail.com");

// Objeto de sessão
$sessao = new Sessoes_de_Filmes("Interestelar", "20:30", "Sala 4", "06/10/2025");
echo $sessao->reservarAssento("C5") . PHP_EOL;

// Objeto de ingresso
$ingresso = new Ingressos("Meia", 25.00, "Sessão das 20:30");
echo $ingresso->validar() . PHP_EOL;

// Venda do ingresso
echo $sistema->venderIngresso("Maria Souza", "Meia - Interestelar") . PHP_EOL;

// Compra pelo cliente
echo $cliente->comprarIngresso("Maria Souza", "Meia - Interestelar") . PHP_EOL;

// Liberar assento
echo $sessao->liberarAssento("C5") . PHP_EOL;

?>