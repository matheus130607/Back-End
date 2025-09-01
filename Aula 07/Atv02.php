<?php 

// 2. Pessoa com atributos
// Crie uma classe Pessoa com os atributos privados nome, idade e email.
// o Utilize os setters para preencher os dados de uma pessoa.
// o Em seguida, use os getters para exibir as informações dessa
// pessoa em formato de frase, por exemplo:
// O nome é Samuel, tem 22 anos e o email é samuel@exemplo.com.

    class Pessoa{
    private $nome;
    private $idade;
    private $email;
   

    public function __construct($nome,$idade, $email) {
        $this -> setNome($nome);
        $this -> setIdade($idade);
        $this -> email = $email;
        
    }
    
    public function setNome($nome){
        $this -> nome=ucwords(strtolower($nome));
    } 
    public function getNome() {
        return $this->nome;
    }

    public function setIdade($idade) {
        $this -> idade = abs((int)$idade);
    }

    public function getIdade() {
        return $this -> idade;
    }

    public function ExibirInfo() {
        return "O nome é $this->nome, tem $this->idade anos e o email é $this->email.";
    }
}


$pessoa1 = new Pessoa("Samuel", 22, "samuel@gmail.com");
echo $pessoa1 -> ExibirInfo();
?>