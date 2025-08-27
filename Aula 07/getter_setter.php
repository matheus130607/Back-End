<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $telefone, $idade, $email, $senha) {
        $this -> setNome($nome);
        $this -> setcpf($cpf);
        $this -> setTelefone($telefone);
        $this -> setIdade($idade);
        $this -> email = $email;
        $this -> senha = $senha;
    }
    
    public function setNome($nome){
        $this -> nome=ucwords(strtolower($nome));
    } 
    public function getNome() {
        return $this->nome;
    }

    public function setcpf($cpf) {
        $this -> cpf = preg_replace("/\D/", "", $cpf);
    }

    public function getcpf($cpf) {
        return $this -> cpf;
    }

    public function setTelefone($telefone) {
        $this -> telefone = preg_replace("/\D/", "", $telefone);
    }

    public function getTelefone() {
        return $this -> telefone;
    }

    public function setIdade($idade) {
        $this -> idade = abs((int)$idade);
    }

    public function getIdade() {
        return $this -> idade;
    }
}
$pessoa1 = new Pessoa("SaMuEl", "123.456.789-00", "(11) 91234-5678", -25, "samuelgostoso@gmail.com", "eudouocutododia");
echo $pessoa1 -> getNome();
?>