<?php

class Livro {

    private $titulo;
    private $autor;
    private $ano_publicacao;
    private $genero;
    private $qtde;

    public function __construct($titulo, $autor, $ano_publicacao, $genero, $qtde) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this->genero = $genero;
        $this->qtde = $qtde;
    
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAno_publicacao() {
        return $this->ano_publicacao;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getQtde() {
        return $this->qtde;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }

    public function setAno_publicacao($ano_publicacao) {
        $this->ano_publicacao = $ano_publicacao;
        return $this;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
        return $this;
    }

    public function setQtde($qtde) {
        $this->qtde = $qtde;
        return $this;
    }
}