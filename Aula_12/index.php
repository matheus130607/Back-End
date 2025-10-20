<?php

namespace Aula_12;

use Aluno;
use AlunoDAO;

require_once "CRUD.php";
require_once "AlunoDAO.php";

$dao = new AlunoDAO(); // Objeto da classe Aluno DAO para testar as funções do CRUD

// CREATE
$dao-> criarAlunos (new Aluno(1, "João Silva", "Engenharia"));
$dao-> criarAlunos (new Aluno(2, "Hugo","Manicure"));
$dao-> criarAlunos (new Aluno(3, "Beatriz", "Eletricista"));

// READ
echo "\n Lista de alunos:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "ID: {$aluno->getId_aluno()} - Nome: {$aluno->getNome_aluno()} - Curso: {$aluno->getCurso_aluno()}" . PHP_EOL;
}

// UPDATE
$dao->atualizarAlunos(2, "Hugo Santos", "Cabeleireiro");
echo "\n Após atualização: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "ID: {$aluno->getId_aluno()} - Nome: {$aluno->getNome_aluno()} - Curso: {$aluno->getCurso_aluno()}" . PHP_EOL;
}

//DELETE 
$dao-> excluirAlunos(2);
echo "\n Após exclusão: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "ID: {$aluno->getId_aluno()} - Nome: {$aluno->getNome_aluno()} - Curso: {$aluno->getCurso_aluno()}" . PHP_EOL;
}

