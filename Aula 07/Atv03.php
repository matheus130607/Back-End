<?php

// 3. Validação em setter
// Crie uma classe Aluno com os atributos privados nome e nota.
// o No setNota, garanta que a nota só pode ser entre 0 e 10. Se o
// valor for inválido, armazene 0.
// o Teste criando alunos com notas válidas e inválidas, exibindo os
// resultados com getNota().

class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota ){
        $this -> setNome($nome);
        $this -> setNota($nota);
    }

    public function setNome($nome) {
        $this -> nome = ucwords(strtolower($nome));
    }
    public function getNome() {
        return $this -> nome;
    }

    public function setNota($nota) {
        if($nota >= 0 && $nota <= 10) {
            $this -> nota = $nota;
        } else {
            $this -> nota = 0;
        }
    }

    public function getNota() {
        return $this -> nota;
    }
    public function exibirInfo() {
        return "O aluno $this->nome tem a nota $this->nota.";
    }
}

$aluno1 = new Aluno("samuel", 8);
$aluno2 = new Aluno ("Gabriel", -2);
echo $aluno1 -> exibirInfo();
echo $aluno2 -> exibirInfo();

?>