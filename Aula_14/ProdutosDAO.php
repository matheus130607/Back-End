<?php


namespace Aula_14;
class ProdutosDAO{

    private $produtos = [];


    // Arquivo para armazenamento dos dados em formato JSON
    private $arquivo = "produtos.json";

    public function __construct() {
        if(file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);


        if($dados) {
            foreach($dados as $cod_produtos => $info) {
                $this -> produtos[$cod_produtos] = new produtos(
                    $info['cod_produtos'],
                    $info['nome_produtos'],
                    $info['preco_produtos']
                );
            }
        }
    }
}

    private function salvarEmArquivo() {
    $dados = [];

    foreach($this -> produtos as $cod_produtos => $produto) {
        $dados[$cod_produtos] = [
            'cod_produtos' => $produto -> getCodProdutos(),
            'nome_produtos' => $produto -> getNomeProdutos(),
            'preco_produtos' => $produto -> getPrecoProdutos()
        ];
    }


    file_put_contents($this -> arquivo, json_encode($dados, JSON_PRETTY_PRINT));

    }

    public function criarProdutos(produtos $produto) {
        $this -> produtos[$produto -> getCodProdutos()] = $produto;
        $this -> salvarEmArquivo();
    }

    public function lerProdutos() {
        return $this -> produtos;
    }

    public function atualizarProdutos($cod_produtos, $novoNome, $novoPreco) {
        if(isset($this -> produtos[$cod_produtos])) {
            $this -> produtos[$cod_produtos] -> setNomeProdutos($novoNome);
            $this -> produtos[$cod_produtos] -> setPrecoProdutos($novoPreco);
            $this -> salvarEmArquivo();
        }
    }

    public function excluirProdutos($cod_produtos) {
        unset($this -> produtos[$cod_produtos]);
        $this -> salvarEmArquivo();
    }
}



?>