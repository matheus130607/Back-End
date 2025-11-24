<?php

require_once __DIR__ . '/../Model/bibliotecaDAO.php';
require_once __DIR__ . '/../Model/biblioteca.php';

class BibliotecaController {

    private $dao;

    public function __construct() {
        $this->dao = new BibliotecaDAO();
    }

    public function ler() {
        return $this->dao->lerLivro();
    }

    public function criar($titulo, $autor, $ano_publicacao, $genero, $qtde) {
        $livro = new Livro($titulo, $autor, $ano_publicacao, $genero, $qtde);
        $this->dao->criarLivro($livro);
    }

    public function atualizar($nomeOriginal, $novoTitulo, $autor, $ano_publicacao, $genero, $qtde){
        $this->dao->atualizarLivro($nomeOriginal, $novoTitulo, $autor, $ano_publicacao, $genero, $qtde);
    }

    public function deletar($titulo) {
        $this->dao->excluirLivro($titulo);
    }
}
