<?php

class AlunoDAO { // Classe DAO(Data Access Object) para manipulação das funções do CRUD(create, read, update e delete)
     private $alunos = []; // Array $alunos para armazenamento dos objetos a serem manipulados, antes de ser enviasdo ao banco de dados.Foi criado vazio Inicialmente

    private $arquivo = "alunos.json"; // Nome do arquivo para armazenamento dos dados em formato JSON

    public function __construct() {
        if (file_exists($this->arquivo)){
            //Lê o conteudo do arquivo caso ele já existe
            $conteudo = file_get_contents($this->arquivo);
            //Atribui as informações do arquivo existente à variavel $conteudo

            $dados = json_decode($conteudo, true);
            //Decodifica o conteudo JSON para um array associativo
            
            if($dados) {// Verifica se o array é nulo ou falso, caso seja valido e contenha contéudo, ele prossegue para a lógica dentro do if
                foreach ($dados as $id_aluno =>$info) { // percorre o array $dados relacionamento chave e valor
                    $this->alunos[$id_aluno] = new Aluno( //Cria um novo objeto Aluno para cada entrada no array $dados
                        $info['id_aluno'],
                        $info['nome_aluno'],
                        $info['curso_aluno']
                    ); 
                }
            }
        }
    }

    // Método auxiliar --> para salvar o array $alunos no arquivo json
    private function salvarEmArquivo() {
        $dados = [];

        //tranforma os objetos em arrays convencionais
        foreach($this->alunos as $id_aluno => $aluno) {
            $dados[$id_aluno] = [
                'id_aluno' => $aluno->getId_aluno(),
                'nome_aluno' => $aluno->getNome_aluno(),
                'curso_aluno' => $aluno->getCurso_aluno()
            ];
        }

        //Converte para JSON formatado e grava o arquivo
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));

    }

     public function criarAlunos(Aluno $aluno) { // Método para cirar um objeto no array alunos -->Create
        $this ->alunos[$aluno->getId_aluno()] = $aluno;
        $this->salvarEmArquivo(); // Chama o método auxiliar para salvar os dados no arquivo JSON
    }

    public function lerAlunos() {// Método paa ler os dadosdeum objeto ja criado --> Read
        return $this -> alunos;
    }

    public function atualizarAlunos($id_aluno, $novoNome, $novoCurso) { // Método para atualizar os dados de um objeto ja criado --> Update
        if(isset($this->alunos[$id_aluno])) {
            $this -> alunos[$id_aluno] -> setNome_aluno($novoNome);
            $this -> alunos[$id_aluno] -> setCurso_aluno($novoCurso);
            $this->salvarEmArquivo();
        }
    }

    public function excluirAlunos($id_aluno) { // Método para excluir um objeto ja criado --> Delete
        unset($this->alunos[$id_aluno]); 
        $this->salvarEmArquivo();
    }
}

?>