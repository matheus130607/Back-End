<?php

// Cenário 5 – Analise o problema com linguagem natural
// "Um sistema de biblioteca deve permitir que usuários (alunos e professores)
// façam empréstimos de livros e revistas."

// Classes: Usuarios, Itens
// Metodos: permitir, fazer, emprestar

class Usuarios {
    private $nome_usuario;
    private $tipo_usuario; 
    private $id_usuario;
    private $email_usuario;

    public function __construct($nome_usuario, $tipo_usuario, $id_usuario, $email_usuario) {
        $this->nome_usuario = $nome_usuario;
        $this->tipo_usuario = $tipo_usuario;
        $this->id_usuario = $id_usuario;
        $this->email_usuario = $email_usuario;
    }
}

class Itens {
    private $titulo_item;
    private $autor_item;
    private $tipo_item; 
    private $ano_publicacao_item;

    public function __construct($titulo_item, $autor_item, $tipo_item, $ano_publicacao_item) {
        $this->titulo_item = $titulo_item;
        $this->autor_item = $autor_item;
        $this->tipo_item = $tipo_item;
        $this->ano_publicacao_item = $ano_publicacao_item;
    }
}
?>