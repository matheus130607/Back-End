<?php

class AlunoDAO { // Classe DAO(Data Access Object) para manipulação das funções do CRUD(create, read, update e delete)
     private $alunos = []; // Array $alunos para armazenamento dos objetos a serem manipulados, antes de ser enviasdo ao banco de dados.Foi criado vazio Inicialmente



     public function criarAlunos(Aluno $aluno) { // Método para cirar um objeto no array alunos -->Create
        $this ->alunos[$aluno->getId_aluno()] = $aluno;
    }

    public function lerAlunos() {// Método paa ler os dadosdeum objeto ja criado --> Read
        return $this -> alunos;
    }

    public function atualizarAlunos($id_aluno, $novoNome, $novoCurso) { // Método para atualizar os dados de um objeto ja criado --> Update
        if(isset($this->alunos[$id_aluno])) {
            $this -> alunos[$id_aluno] -> setNome_aluno($novoNome);
            $this -> alunos[$id_aluno] -> setCurso_aluno($novoCurso);

        }
    }

    public function excluirAlunos($id_aluno) { // Método para excluir um objeto ja criado --> Delete
        unset($this->alunos[$id_aluno]); 
    }
}

?>