<?php

// Cenário 6 – Leia o enunciado do problema
// "Um sistema de cinema deve permitir que clientes comprem ingressos para
// sessões de filmes."

// Classes: Clientes, Ingressos, Sessoes_de_filmes
// Metodos: permitir, comprar

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
}
?>