<?php

class Aluno {
    private $id_aluno;
    private $nome_aluno;

    private $curso_aluno;

    public function __construct($id_aluno, $nome_aluno, $curso_aluno) {
        $this -> id_aluno = $id_aluno;
        $this ->nome_aluno = $nome_aluno;
        $this ->curso_aluno = $curso_aluno;
    }

    public function setId_aluno($id_aluno) {
        $this -> id_aluno = $id_aluno;
    }

    public function setNome_aluno($nome_aluno) {
        $this -> nome_aluno = $nome_aluno;
    }

    public function setCurso_aluno($curso_aluno) {
        $this -> curso_aluno = $curso_aluno;
    }

    public function getId_aluno() {
        return $this -> id_aluno;
    }

    public function getNome_aluno() {
        return $this -> nome_aluno;
  }

    public function getCurso_aluno() {
        return $this -> curso_aluno;
    }

 }