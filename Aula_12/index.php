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
$dao-> criarAlunos (new Aluno(4, "Aurora", "Arquitetura"));
$dao-> criarAlunos (new Aluno(5, "Oliver", "Gestão"));
$dao-> criarAlunos (new Aluno(6, "Amanda", "Luta"));
$dao-> criarAlunos (new Aluno(7, "Geysa", "Engenharia"));
$dao-> criarAlunos (new Aluno(8, "Joab", "Eletrica"));
$dao-> criarAlunos (new Aluno(9, "Miguel", "Steamer"));

// READ
echo "\n Lista de alunos:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "ID: {$aluno->getId_aluno()} - Nome: {$aluno->getNome_aluno()} - Curso: {$aluno->getCurso_aluno()}" . PHP_EOL;
}

// UPDATE
$dao->atualizarAlunos(2, "Hugo Santos", "Cabeleireiro");
$dao->atualizarAlunos(7, "Clotilde", "Engenharia");
$dao->atualizarAlunos(8, "Joana", "Eletrica");
$dao->atualizarAlunos(9, "Miguel", "Designer");
$dao->atualizarAlunos(6, "Amanda", "Logistica");
$dao->atualizarAlunos(5, "Oliver", "Eletrica");
echo "\n Após atualização: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "ID: {$aluno->getId_aluno()} - Nome: {$aluno->getNome_aluno()} - Curso: {$aluno->getCurso_aluno()}" . PHP_EOL;
}

//DELETE 
$dao-> excluirAlunos(2);
$dao-> excluirAlunos(7);
$dao-> excluirAlunos(4);
echo "\n Após exclusão: \n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "ID: {$aluno->getId_aluno()} - Nome: {$aluno->getNome_aluno()} - Curso: {$aluno->getCurso_aluno()}" . PHP_EOL;
}

