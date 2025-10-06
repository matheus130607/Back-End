<?php

// Cenário 5 – Analise o problema com linguagem natural
// "Um sistema de biblioteca deve permitir que usuários (alunos e professores)
// façam empréstimos de livros e revistas."

// Classes: Usuarios, Itens, SistemaDeBiblioteca, Emprestimo
// Metodos: solicitarEmprestimo, devolverItem, registrarEmprestimo, registrarDevolucao, emprestar, devolver, finalizar

// Relacionando Classes (Associação, Composição e Agregação):
//Usuarios e Itens - Associação
// Usuarios e SistemaDeBiblioteca - Associação
// Itens e SistemaDeBiblioteca - Associação
// Emprestimo e Usuarios - Agregação



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

    public function solicitarEmprestimo($item) {
        return "O usuário {$this->nome_usuario} solicitou o empréstimo do item: {$item}.";
    }

    public function devolverItem($item) {
        return "O usuário {$this->nome_usuario} devolveu o item: {$item}.";

    }
}

class SistemaDeBiblioteca {
    private $nome_sistema;
    private $versao_sistema;
    private $instituicao_sistema;

    public function __construct($nome_sistema, $versao_sistema, $instituicao_sistema) {
        $this->nome_sistema = $nome_sistema;
        $this->versao_sistema = $versao_sistema;
        $this->instituicao_sistema = $instituicao_sistema;
    }

    public function registrarEmprestimo($usuario, $item) {
        return "O usuário {$usuario} fez um empréstimo do item: {$item}.";
    }

    public function registrarDevolucao($usuario, $item) {
        return "O usuário {$usuario} devolveu o item: {$item}.";
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

    public function emprestar($usuario) {
        return "O item {$this->titulo_item} foi emprestado para o usuário: {$usuario}.";
    }

    public function devolver() {
        return "O item {$this->titulo_item} foi devolvido.";
    }

}

class Emprestimo {
    private $usuario_emprestimo;
    private $item_emprestimo;
    private $data_emprestimo;
    private $data_devolucao;

    public function __construct($usuario_emprestimo, $item_emprestimo, $data_emprestimo, $data_devolucao) {
        $this->usuario_emprestimo = $usuario_emprestimo;
        $this->item_emprestimo = $item_emprestimo;
        $this->data_emprestimo = $data_emprestimo;
        $this->data_devolucao = $data_devolucao;
    }

    public function finalizar() {
        return "O empréstimo do item {$this->item_emprestimo} pelo usuário {$this->usuario_emprestimo} foi finalizado.";
    }
}



// Usuários
$aluno = new Usuarios("Carlos Silva", "Aluno", 1, "carlos@escola.com");
$professor = new Usuarios("Mariana Souza", "Professora", 2, "mariana@escola.com");

// Sistema
$sistema = new SistemaDeBiblioteca("BookMaster", "1.0", "Instituto Federal");

// Itens (livro e revista)
$livro = new Itens("Dom Casmurro", "Machado de Assis", "Livro", 1899);
$revista = new Itens("National Geographic", "Vários", "Revista", 2024);

// Empréstimos
$emprestimo1 = new Emprestimo("Carlos Silva", "Dom Casmurro", "01/10/2025", "15/10/2025");
$emprestimo2 = new Emprestimo("Mariana Souza", "National Geographic", "02/10/2025", "12/10/2025");

// Demonstração do cenário
echo $aluno->solicitarEmprestimo("Dom Casmurro") . "<br>";
echo $sistema->registrarEmprestimo("Carlos Silva", "Dom Casmurro") . "<br>";
echo $livro->emprestar("Carlos Silva") . "<br><br>";

echo $professor->solicitarEmprestimo("National Geographic") . "<br>";
echo $sistema->registrarEmprestimo("Mariana Souza", "National Geographic") . "<br>";
echo $revista->emprestar("Mariana Souza") . "<br><br>";

// Devoluções
echo $aluno->devolverItem("Dom Casmurro") . "<br>";
echo $sistema->registrarDevolucao("Carlos Silva", "Dom Casmurro") . "<br>";
echo $livro->devolver() . "<br>";
echo $emprestimo1->finalizar() . "<br><br>";

echo $professor->devolverItem("National Geographic") . "<br>";
echo $sistema->registrarDevolucao("Mariana Souza", "National Geographic") . "<br>";
echo $revista->devolver() . "<br>";
echo $emprestimo2->finalizar() . "<br>";

?>

